<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
/*function fun()
{
var x=document.getElementById("password").value;
var y=(document.getElementById("confirmPassword").value);
if(x!=y)
{
alert("Password Does Not Match");
}
}
*/
</script>
<script type="text/javascript" src="validatesignup.js"></script>
<link rel="stylesheet" type="text/css" href="css2/styleeditprofile.css">
<link rel="stylesheet" type="text/css" href="css2/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css2/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="css2/bootstrap-responsive-min.css">	
</head>
<?php
session_start();
error_reporting(E_ALL);
require 'connect.php';
// passoword validation
if(isset($_POST['change']))
{
	$password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword'];
	$oldPassword=sha1($_POST['oldPassword']);
	if(empty($password))
	{	
		$error['password']="Please enter your password"."<br>";
	}
	else if($password == $confirmPassword && $password!="" && preg_match("/^[a-zA-Z0-9]+$/",$confirmPassword))
	{
		$validPassword=sha1(mysql_real_escape_string($confirmPassword));
	}
	else 
	{
		$error['password']="The two passwords do not match.Try again!"."<br>";
	}	
	if($confirmPassword==$password && !isset($error['password']))
	{
		$id=$_SESSION['user_id'];
		//echo $id;
		$qu="select * from ifest_register where user_id='$id' ";
		$result=mysqli_query($con,$qu);
		$row=mysqli_fetch_array($result);
		$dbPassword=$row['password'];
		//echo mysqli_num_rows($result);
		//echo $dbPassword.'<br>';
		//echo $oldPassword;
		if($dbPassword==$oldPassword)
		{
			$que="UPDATE ifest_register SET password='$validPassword' where user_id='$id'";
			$change=mysqli_query($con,$que);
			if($change)
			echo "password changed";
		}
		else
		{
			echo "Old password is wrong";
			//include('password_change.php');
		}
	}
}
?>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="signup" method="post">
<?php 
if(isset($error['password']))
	echo $error['password'];
?>
<span id="error"></span>	
<table width="311" height="285" border="0">
  <tr>
    <td>New Password</td>
    
    <td><input type="password" name="password" onblur="validate(this.id)" id="password" /></td>
  </tr>
  <tr>
    <td>Confirm Password</td>
    <td><input type="password" name="confirmPassword" onblur="validate(this.id)" id="confirmPassword"   /></td>
   </tr>
    <tr>
    <td>Password</td>
    <td><input type="password" name="oldPassword" onblur="validate(this.id)" id="oldPassword" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="change" id="changePassword" value="Change Password" /></td>
   </tr>
</table>
</form>
</body>
</html>
