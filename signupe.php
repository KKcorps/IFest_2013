<?php session_start(); ?>
<?php
//error_reporting(E_ALL);
require 'connect.php';
require 'fb-connect.php';
//require 'recaptchalib.php';
require 'appvars.php';
//$error=array();
if(isset($_COOKIE['user_id']) && isset($_COOKIE['username']))
{
        $_SESSION['user_id']=$_COOKIE['user_id'];
        $_SESSION['username']=$_COOKIE['username'];
}
if(isset($_SESSION['user_id']) && isset($_SESSION['username']))
{
	header("Location:ifest.php");
}

//for login with facebbok
if(isset($user_info))
{
	$fbid=$user_info["id"];
	$fbid_query="select user_id,username,fbid from ifest_register where fbid='$fbid'";
	$fbid_fetch=mysqli_query($con,$fbid_query);
	if(mysqli_num_rows($fbid_fetch)==1)
	{
		$fbuser=mysqli_fetch_array($fbid_fetch);
		$_SESSION['user_id']=$fbuser['user_id'];
		$_SESSION['username']=$fbuser['username'];
		setcookie('user_id',$fbuser['user_id'],time() + (60*60*24*30));	//expires in 30 days
		setcookie('username',$fbuser['username'],time() + (60*60*24*30));	//expires in 30 days
		// redirect to profile page
			header( "Location:ifest.php" );
	}
}
//signup insert into database
if(isset($_POST['signup']))
{	
//first name validationsi
	$fname=htmlspecialchars($_POST['firstName']);
	if(empty($fname))
	{
		$error['firstName']="Please enter your first name"."<br>";
	}
	else if(preg_match("/^[a-zA-Z]+$/",$fname))
	{
		$validFirstName=mysqli_real_escape_string($con,trim($fname));
	}
	else
	{
		$error['firstName']="Invalid name.Try again!"."<br>";
	}

//last name validation
	$lname=htmlspecialchars($_POST['lastName']);
	if(empty($lname))
	{
		$error['lastName']="Please enter your last name"."<br>";
	}
	else if(preg_match("/^[a-zA-Z]+$/",$lname))
	{
		$validLastName=mysqli_real_escape_string($con,trim($lname));
	}
	else
	{
		$error['lastName']="Invalid name.Try again!"."<br>";
	}

//username validation
	$username=htmlspecialchars($_POST['username']);
	if(empty($username))
	{
		$error['username']="Please enter your username"."<br>";
	}
	else if(preg_match("/^[a-z0-9_-]+$/",$username))
	{
		$validUsername=mysqli_real_escape_string($con,trim($username));
		$usernameFind="select username from ifest_register where username='$validUsername'";
        	$usernameQuery=mysqli_query($con,$usernameFind);
        	$username_fetch=mysqli_num_rows($usernameQuery);
        	if($username_fetch!=0)
        	{
                	$error['username']="Username already exists"."<br>";
        	}
	}
	else 
		$error['username']="Please enter a valid username<br>";

//email validation	
	$email=htmlspecialchars($_POST['email']);
	if (!preg_match('/^[a-zA-Z0-9][a-zA-Z0-9\._\-&!?=#]*@/', $email)){
	$error['email']="Invalid email id<br>";}
	/*else {
	$domain=preg_replace('/^[a-zA-Z0-9][a-zA-Z0-9\._\-&!?=#]*@/ ' , '' , $email);
	if (!checkdnsrr($domain)) {
	$error['email']="Invalid email idb<br>";
	}
	}*/

	if(!isset($error['email']))
	{
	$validEmail=mysqli_real_escape_string($con,trim($email));
	$emailFind="select email from ifest_register where email='$validEmail'";
        $emailQuery=mysqli_query($con,$emailFind);
        $email_fetch=mysqli_num_rows($emailQuery);
        if($email_fetch!=0)
        {
                $error['email']="Email already exists"."<br>";
        }}
	
	

//phone number validation
	$phone=htmlspecialchars($_POST['phone']);
	if(empty($phone))
	{
	 $error['phone']="Please enter your phone"."<br>";
	}
	else if(strlen($phone)!=10 || !is_numeric($phone) || $phone[0]==0)
	{
		$error['phone']="Invalid phone number"."<br>";
	}
	else 
		$validPhone=mysqli_real_escape_string($con,trim($phone));
	
//sex validation
	$sex=$_POST['sex'];
	if($sex!="male" && $sex!="female")
		$error['sex']="Not a valid sex<br>";
	else 
		$validSex=$sex;

//college name validation
	$collegeName=htmlspecialchars($_POST['collegeName']);
	if(empty($collegeName))
	{
		$error['collegeName']="Please enter your college name"."<br>";
	}
	else if(preg_match("/^[a-zA-Z ]+$/",$collegeName))
	{
		$validCollege=mysqli_real_escape_string($con,trim($collegeName));
	}
	else
	{
		$error['collegeName']="Invalid college.Try again!"."<br>";
	}
	
	$year=$_POST['collegeYear'];
	if($year==1 || $year==2 || $year==3 ||$year==4)
		$validYear=$year;
	else
		$error['collegeYear']="Please select a valid year<br>";	

//date validation
	$date1=$_POST['date'];
	$month1=$_POST['month'];
	$year1=$_POST['year'];
	if($date1==0 || $month1==0 || $year1==0 || ($month1%2==0 && $date1==31) || ($date1==30 && $month1==2) || ($date1==29 && $month1==2 && $year1%4!=0))
	{
		$error['date']="Please enter a valid date of birth"."<br>";
	}
	else
		$dob=$_POST['year']."-".$_POST['month']."-".$_POST['date'];

//password validation
	$password=htmlspecialchars($_POST['password']);	
	$confirmPassword=htmlspecialchars($_POST['confirmPassword']);
	if(empty($password))
	{	
		$error['password']="Please enter your password"."<br>";
	}
	else if($password == $confirmPassword && $password!="" && preg_match("/^[a-zA-Z0-9]+$/",$confirmPassword))
	{
		$validPassword=mysqli_real_escape_string($con,trim($confirmPassword));
	}
	else 
	{
		$error['password']="The two passwords do not match.Try again!"."<br>";
	}
//photo
	if(!isset($user_info)){
	$old_picture = mysqli_real_escape_string($con,trim($_POST['old_picture']));
    $new_picture = mysqli_real_escape_string($con,trim($_FILES['new_picture']['name']));
    $new_picture_type = $_FILES['new_picture']['type'];
    $new_picture_size = $_FILES['new_picture']['size'];
	$target = MM_UPLOADPATH . basename($new_picture);
	if (!empty($new_picture)) {
	$array= getimagesize($_FILES['new_picture']['tmp_name']);
	$new_picture_width=$array[0];
	$new_picture_height=$array[1];
      if ((($new_picture_type == 'image/gif') || ($new_picture_type == 'image/jpeg') || ($new_picture_type == 'image/pjpeg') ||
        ($new_picture_type == 'image/png')) && ($new_picture_size > 0) && ($new_picture_size <= MM_MAXFILESIZE) &&
        ($new_picture_width <= MM_MAXIMGWIDTH) && ($new_picture_height <= MM_MAXIMGHEIGHT)) {
        if ($_FILES['new_picture']['error'] == 0) {
          // Move the file to the target upload folder
          $target = MM_UPLOADPATH . basename($new_picture);
/*          if (move_uploaded_file($_FILES['new_picture']['tmp_name'], $target)) {
            // The new picture file move was successful, now make sure any old picture is deleted
            if (!empty($old_picture) && ($old_picture != $new_picture)) {
              @unlink(MM_UPLOADPATH . $old_picture);
            }
          }
          else {
            // The new picture file move failed, so delete the temporary file and set the error flag
            @unlink($_FILES['new_picture']['tmp_name']);
            $error['picture'] = true;
            echo '<p class="error">Sorry, there was a problem uploading your picture.</p>';
          }*/
        }
      }
      else {
        // The new picture file is not valid, so delete the temporary file and set the error flag
        @unlink($_FILES['new_picture']['tmp_name']);
        $error['picture'] = true;
        echo '<p class="error">Your picture must be a GIF, JPEG, or PNG image file no greater than ' . (MM_MAXFILESIZE / 1024) .
          ' KB and ' . MM_MAXIMGWIDTH . 'x' . MM_MAXIMGHEIGHT . ' pixels in size.</p>';
      }
    }
	}
//captcha check
/*	$privatekey="your private key";
	$resp=recaptcha_check_answer($privatekey,
				$_SERVER['REMOTE_ADDR'],
				$_POST['recaptcha_challenge_field'],
				$_POST['recaptcha_response_field']
				);
	if(!$resp->is_valid)
		$error['captcha']="The captcha wasn't entered correctly<br>";

	/*	foreach($error as $x => $y)
		echo $x.'-'.$y."<br>";*/

//if no error insert into database

if(!isset($error['firstName']) && !isset($error['lastName']) && !isset($error['username']) && !isset($error['email']) && !isset($error['phone']) && !isset($error['sex']) && !isset($error['collegeName']) && !isset($error['year']) && !isset($error['date']) && !isset($error['picture']) && !isset($error['password']))
	{
		if(!isset($user_info)){
			$error['picture']=false;
			if(!empty($new_picture)){
				$error['picture']=false;
			if (move_uploaded_file($_FILES['new_picture']['tmp_name'], $target)) {
				// The new picture file move was successful, now make sure any old picture is deleted
				if (!empty($old_picture) && ($old_picture != $new_picture)) {
					@unlink(MM_UPLOADPATH . $old_picture);

				}
			}
			else {
				// The new picture file move failed, so delete the temporary file and set the error flag
				@unlink($_FILES['new_picture']['tmp_name']);
				$error['picture'] = true;
				echo '<p class="error">Sorry, there was a problem uploading your picture.</p>';
			}
			}	
			$fbid=null;
		}
		else{
			$img = file_get_contents('https://graph.facebook.com/'.$user_info["username"].'/picture');
			$file = dirname(__file__).'/images/'.$user_info["username"].'.jpg';
			file_put_contents($file, $img);
			$new_picture=$user_info["username"].'.jpg';
			$fbid=$user_info["id"];	
		}
		$encrypt=sha1($confirmPassword);
		if(!$error['picture']){
			$insertQuery="INSERT INTO ifest_register(first_name,last_name,username,email,phone,sex,college,year,dob,picture,password,fbid) VALUES('$validFirstName','$validLastName','$validUsername','$validEmail','$validPhone','$validSex','$validCollege','$validYear','$dob','$new_picture','$encrypt','$fbid')"; 
			if(!mysqli_query($con,$insertQuery))
  			{
  				die('Error: ' . mysqli_error($con));
  			}		
			else
			{ 
				//echo "<script>$('#success').css({'visibility': 'visible'});$('#success').html('You have been successfully registered');</script>";
				echo "<script>alert('You have been successfully registered');</script>";
				$headers = "From: Ifest 2013\r\n";
				mail($validEmail,'Ifest Registration','You have been successfully registered for Ifest 2013.',$headers);
				unset($validFirstName,$validLastName,$validUsername,$validEmail,$validPhone,$validSex,$validCollege,$validYear,$dob,$encrypt);//unset all input variables
			mysqli_close($con);
			echo "<script>window.location.replace('http://ifest.ieeeiitr.com/ifest2013/ifest.php');</script>";
			//header("Location:ifest.php");
			}
		}
	}
	else echo "<script>$('#success').css({'visibility': 'visible'});$('#success').html('There was some problem.Try again');</script>";
}
?>
<?php
//username and password verify from database
if(isset($_POST['login']))
{
	if($_POST['loginUsername']=="")
	{ 
		$error['loginUsername']="Please enter your username";
	}
	else if($_POST['loginPassword']=="")
	{
		$error['loginPassword']="Please enter your password";
	}
	else
	{
		$loginUsername=mysqli_real_escape_string($con,htmlspecialchars($_POST['loginUsername']));
		$loginPassword=mysqli_real_escape_string($con,htmlspecialchars($_POST['loginPassword']));
		$loginEncryptPassword=sha1($loginPassword);
		$loginQuery="Select user_id,username,password,first_name,dob from ifest_register where username='$loginUsername' and password='$loginEncryptPassword'";
		$user=mysqli_query($con,$loginQuery);
		$_SESSION['user_id']='';
//		foreach($error as $x => $y)	echo $x."-".$y;
//		echo mysqli_num_rows($user);
		if(mysqli_num_rows($user)==1)
		{
			session_start();
		//	echo "blah blah";
			$row=mysqli_fetch_array($user);
			// auth okay, setup session
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['username']=$row['username'];
			setcookie('user_id',$row['user_id'],time() + (60*60*24*30));	//expires in 30 days
			setcookie('username',$row['username'],time() + (60*60*24*30));	//expires in 30 days
		// redirect to profile page
			header( "Location:ifest.php" );
		}
		else 
		{
			$error['login']="Username and password do not match";
		}
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		Sign Up
	</title>
	<script type="text/javascript" src="validatesignup.js">
	</script>
	
 <!--<link rel="stylesheet" type="text/css" href="wp-content/themes/ifest/style.css">-->
 <link rel="stylesheet" type="text/css" href="css2/styleeditprofile.css">
 <link rel="stylesheet" type="text/css" href="wp-content/sgnfm.css">
 <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
 <!--<link rel="stylesheet" type="text/css" href="css2/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css2/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="css2/bootstrap-responsive-min.css">-->
</head>

<body style="background:url(img/event.png);">
<?php
        if(!isset($user_info))
        {echo "<a href=".$loginUrl."><img src='fblg.png' style='height:26px;width:175px;position:absolute;top:18%;left:4%;'/></a>";}
        //else echo "<a href=".$logoutUrl.">Logout</a>";
?>
<div id="login_form">
<br/>
<br/>
<!-- main form -->
<div id="padding">
	
	<form class="sgli" name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<?php
			if(isset($error['login']))
			{
				echo "<p class='error'>".$error['login']."</p>";
				unset($error['login']);
			}
		?>
		<span id="login_error"></span>
		<br/>
		<span id="sgin">Sign in</span>
		<table>
		<div class="input">
			<tr>
				<td>
		<label for="loginUsername">
			Username:
		</label>
		</div></td><td>
		<input class="inputs" id="loginUsername" type="text" placeholder="Enter your username" name="loginUsername" onblur="validateLogin(this.id)">
		</td></tr>
		<?php
			if(isset($error['loginUsername']))
			{
				echo "<p class='error'>".$error['loginUsername']."</p>";
				unset($error['loginUsername']);
			}
		?>
		<br>
		<tr>
			<td>
		<div class="input">
		<label for="loginPassword">
			Password:
		</label>
		</div></td>
		<td>
		<input class="inputs" id="loginPassword" placeholder="Enter your password" type="password" name="loginPassword" onblur="validateLogin(this.id)">
		</td>
	</tr>
</table>
		<?php
			if(isset($error['loginPassword']))
			{
				echo "<p class='error'>".$error['loginPassword']."</p>";
				unset($error['loginPassword']);
			}
		?>
		<br>
		<input class="inputs" id="login" class="buttons" type="submit" value="Login" name="login">	
	</form>
<div>
</div>

<div id="signup_form">
<!-- heading and logo -->
		<div id="heading">
			Signup
		</div>
<br/>
<br/>
<!-- main form -->
	<div id="padding">
		<form class= "form-horizontal" enctype="multipart/form-data" name="signup" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<!--Already a member?&nbsp;<a href="index.php">Sign in</a>.
			<br>
			<br>-->
			<span id="error"></span>
			<br>
			 <table>
			 			<tr>
				<td>
			<div class="control-group">
			<label class="control-label" for="firstName">First name:</label>
				</td>
				<td>
			<div class="controls">
			<input type="text" id="firstName" name="firstName" placeholder="" onblur="validate(this.id)" value="<?php if(isset($user_info)) echo $user_info['first_name']; ?>" />
			</div>
		</td>
	</tr>
			</div>
			<?php
			if(isset($error['firstName']))
			{
				echo "<tr><td><div class='error'>*".$error['firstName']."</div></td></tr>";
			}
			?>
			<br>
			<tr>
				<td>
			<div class="control-group">
				<label class="control-label" for="lastName">Last name:</label>
			</td>
			<td>
			<div class="controls">
			<input  type="text" id="lastName" name="lastName" placeholder="" onblur="validate(this.id)" value="<?php if(isset($user_info)) echo $user_info['last_name']; ?>" >
		    </div>
			</td>
		</tr>
			</div>
			<?php
			if(isset($error['lastName']))
			{
				echo "<tr><td><div class='error'>*".$error['lastName']."</div></tr></td>";
			}
			?>
			<br>
			<div class="control-group">
			<tr>
				<td>
				<label class="control-label" for="username">Username:</label>
			</td>
			<td>
			<div class="controls">
			<input type="text" id="username" name="username" placeholder=""  onblur="available(this.id,this.value); validate(this.id);">
		     </div>
			 </td>
			</tr>
			 </div>
			<span id="username_available"></span>
			<?php
			if(isset($error['username']))
			{
				echo "<tr><td><div class='error'>".$error['username']."</div></td></tr>";
			}
			?>
			<br>
			<div class="control-group">
				<tr>
					<td>
                                <label class="control-label" for="email">Email:</label>
                        </td>
                        <td>
                        <div class="controls">
                        <input type="email" id="email" name="email" placeholder="" value="<?php if(isset($user_info)) echo $user_info['email']; ?>" onblur="available(this.id,this.value); validate(this.id);" >
                        </div>
                    </td>
                </tr>
						</div>
						<span id="email_available"></span>
			<?php
                        if(isset($error['email']))
                        {
                                echo "<tr><td><div class='error'>*".$error['email']."</div></td></tr>";
                        }
                        ?>
			<br>
			<div class="control-group">
				<tr>
					<td>
				<label class="control-label" for="phone">Phone:</label>
			</td>
			<td>
			<div class="controls">
			<input  type="text" id="phone" name="phone" placeholder="" onblur="validate(this.id)">
			</div>
		</td>
	</tr>
			</div>
			<?php
			if(isset($error['phone']))
			{
				echo "<tr><td><div class='error'>*".$error['phone']."</div></tr></td>";
			}
			?>
			<br>
			<div class="control-group">
				<tr>
					<td>
				<label class="control-label" for="sex">Sex:</label>
			</td>
			<td>
			<div class="controls">
			
			<input  type="radio" name="sex" id="male" value="male" checked="checked">Male</input>
			<input  type="radio" name="sex" id="female" value="female">Female</input>
			
			</div>
		</td>
	</tr>
			</div>
			<br>
                        <div class="control-group">
                        	<tr>
                        		<td>
                                <label class="control-label" for="collegeName">College:</label>
                        </td>
                        	<td>
                        <div class="controls">
                        <input type="text" id="collegeName" name="collegeName" placeholder="" onblur="validate(this.id)" />
                        </div>
						</td>
					</tr>
						</div>
						<?php
                        if(isset($error['collegeName']))
                        {
                                echo "<tr><td><div class='error'>*".$error['collegeName']."</div></td></tr>";
                        }
                        ?>
			<br>
			<div class="control-group">
				<tr>
					<td>
				   <label class="control-label" for="collegeYear">Year:</label>	
				</td>
				<td>
					<div class="controls">
			<select name="collegeYear" id="collegeYear"  onblur="validate(this.id)">
				<option value=0>Select year</option>
				<option value=1>First year</option>
				<option value=2>Second year</option>
				<option value=3>Third year</option>
				<option value=4>Fourth year</option>
			</select>
			</div>
			</td>
			</tr>
			</div>
			<?php
			if(isset($error['collegeYear']))
			{
				echo "<tr><td><div class='error'>*".$error['collegeYear']."</div></td></tr>";
			}
			?>

			<br>
			<div class="control=group">
				<tr>
                <td>
			<label>	Date of birth:</label>
			</td>
			<td>
			<div class="controls">
			<select name="date" id="date"  onblur="validate(this.id)">
                                <option value=0>Date</option>
                                <?php
                                        for($i=1;$i<=31;++$i)
                                        {echo "<option value=".$i.">".$i."</option>";}
                                ?>
                        </select>
						
			<select name="month" id="month" onblur="validate(this.id)">
				<option value=0>Month</option>
				<?php
					for($i=1;$i<=12;++$i)
					{echo "<option value=".$i.">".$i."</option>";}
				?>
			</select>
			<select name="year" id="year" onblur="validate(this.id)">
				<option value=0>Year</option>
				<?php
					for($i=1980;$i<=2005;++$i)
					{echo "<option value=".$i.">".$i."</option>";}
				?>
			</select>
			</div>
		</td>
	</tr>
			</div>
			<?php
			if(isset($error['date']))
			{
				echo "<tr><td><div class='error'>*".$error['date']."</div></td></tr>";
			}
			?>
			<br>
			<div class="control-group">
				<tr>
					<td>
				<label class="control-label" for="password">Password:</label>
			</td>
			<td>
			<div class="controls">
			<input type="password" id="password" name="password" placeholder="" onblur="validate(this.id)">
		</div>
	</td>
</tr>
		</div>
		
		<br>
			<div class="control-group">
				<tr>
					<td>
				<label class="control-label" for="confirmPassword">Confirm Password:</label>
			</td>
			<td>
			<div class="controls">
			<input type="password" id="confirmPassword" name="confirmPassword" placeholder="" onblur="validate(this.id)" >
			</div>
		</td>
	</tr>
			</div>
			<?php
			if(isset($error['password']))
			{
				echo "<tr><td><div class='error'>*".$error['password']."</div></td></tr>";
			}
			?>
			<br>
			 <input type="hidden" name="old_picture" value="<?php if (!empty($old_picture)) echo $old_picture; ?>" />
      <div class="control-group">
      	<tr>
      		<td>
    <label class="control-label" for="new_picture">Picture:</label>
</td>
	<?php if(!isset($user_info)): ?>
    <td>
    <div class="controls">
    <input type="file" id="new_picture" name="new_picture" />
	<?php else: ?>
	<img src="<?php echo 'https://graph.facebook.com/'.$user_info["username"].'/picture'; ?>"> 
	<?php endif; ?>
	<?php if (!empty($old_picture)) {
        echo '<img class="profile" style="height:100px; width:100px" src="' . MM_UPLOADPATH . $old_picture . '" alt="Profile Picture" />';
      } ?>
    </div>
</td>
</tr>
    </div>
			<?php 
			/*	$publickey="6Ld0ZuQSAAAAALYFXzvQnIoDf38ozZV2J5u3SDnV";
				echo recaptcha_get_html($publickey);
				if(isset($error['captcha']))
                                	echo "<div class='error'>*".$error['captcha']."</div>";
									*/
			?>

			<br>
			<tr>
				<td>
			<input class="inputs buttons" id="signup" name="signup" type="submit" value="Sign Up"></td>
			<td><input class="inputs buttons" id="reset" name="reset" type="reset" value="Reset"></td>
		</form>
	</div>
</div>
</body>
</html>

