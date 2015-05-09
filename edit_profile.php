<?php

session_start();

?>
<?php
if(!isset($_SESSION['user_id']))
{
	header("Location:ifest.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>

		Edit Profile

	</title>

	<script type="text/javascript" src="validatesignup.js">

	</script>

	

  <link rel="stylesheet" type="text/css" href="css2/styleeditprofile.css">

  <link rel="stylesheet" type="text/css" href="wp-content/sgnfm.css">

 <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>

<!--<link rel="stylesheet" type="text/css" href="css2/bootstrap.css">

<link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css2/bootstrap-responsive.css">

<link rel="stylesheet" type="text/css" href="css2/bootstrap-responsive-min.css">-->	



</head>

<?php

error_reporting(E_ALL);

require 'connect.php';

$id=$_SESSION['user_id'];

//echo $id;

 //$id=1;

$selectQuery="select * from ifest_register where user_id='$id'";

$userSelect=mysqli_query($con,$selectQuery);

//echo mysqli_num_rows($userSelect);

if(mysqli_num_rows($userSelect)==1)

{

	$row=mysqli_fetch_array($userSelect);

	$fname1=$row['first_name'];

	$lname1=$row['last_name'];

	$username1=$row['username'];

	$email1=$row['email'];

	$phone1=$row['phone'];

	$collegeName1=$row['college'];

	$sex1=$row['sex'];

	$dob1=$row['dob'];

	$year1=$row['year'];           

	//$password1=$row['password'];

	$old_picture=$row['picture'];

}

require 'fb-connect.php';

//require 'recaptchalib.php';

require 'appvars.php';

//$error=array();

/*if(isset($_COOKIE['user_id']) && isset($_COOKIE['username']))

{

        $_SESSION['user_id']=$_COOKIE['user_id'];

        $_SESSION['username']=$_COOKIE['user_id'];

}*/

//for login with facebbok

/*if(isset($user_info))

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

			header( "Location:profile.php" );

	}

}*/

/*if(isset($_SESSION['user_id']) && isset($_SESSION['username']))

{

	header("Location:profile.php");

}*/

//signup insert into database

if(isset($_POST['signup']))

{	

//first name validationsi

	$fname=htmlspecialchars($_POST['firstName']);

	if($fname!=$fname1)

	{

	if(empty($fname))

	{

		$error['firstName']="Please enter your first name"."<br>";

	}

	else if(preg_match("/^[a-zA-Z_-.]+$/",$fname))

	{

		$validFirstName=mysqli_real_escape_string($con,$fname);

	}

	else

	{

		$error['firstName']="Invalid name.Try again!"."<br>";

	}

	}

	else $validFirstName=$fname1;



//last name validation

	$lname=htmlspecialchars($_POST['lastName']);

	if($lname!=$lname1)

	{

	if(empty($lname))

	{

		$error['lastName']="Please enter your last name"."<br>";

	}

	else if(preg_match("/^[a-zA-Z_.-]+$/",$lname))

	{

		$validLastName=mysqli_real_escape_string($con,$lname);

	}

	else

	{

		$error['lastName']="Invalid name.Try again!"."<br>";

	}

	}

	else $validLastName=$lname1;



//username validation

	$username=htmlspecialchars($_POST['username']);

	if($username!=$username1)

	{

	if(empty($username))

	{

		$error['username']="Please enter your username"."<br>";

	}

	else if(preg_match("/^[a-z0-9A-Z_-]+$/",$username))

	{

		$validUsername=mysqli_real_escape_string($con,$username);

		$usernameFind="select username from ifest_register where username='$validUsername' and user_id <> $id";

        	$usernameQuery=mysqli_query($con,$usernameFind);

        	$username_fetch=mysqli_num_rows($usernameQuery);

        	if($username_fetch!=0)

        	{

                	$error['username']="Username already exists"."<br>";

        	}

	}

	else 

		$error['username']="Please enter a valid username<br>";

	}

	else 

	{

		$validUsername=$username1;

	}

//email validation

     

    $email=htmlspecialchars($_POST['email']);

    if($email1!=$email)

	{

	if (!preg_match('/^[a-zA-Z0-9][a-zA-Z0-9\._\-&!?=#]*@/', $email)){

	$error['email']="Invalid email id<br>";}

	else {

	$domain=preg_replace('/^[a-zA-Z0-9][a-zA-Z0-9\._\-&!?=#]*@/ ' , '' , $email);

	if (!checkdnsrr($domain)) {

	$error['email']="Invalid email id<br>";

	}

	}

	if(!isset($error['email']))

	{

	$validEmail=mysqli_real_escape_string($con,$email);

	$emailFind="select email from ifest_register where email='$validEmail'";

        $emailQuery=mysqli_query($con,$emailFind);

        $email_fetch=mysqli_num_rows($emailQuery);

        if($email_fetch!=0)

        {

                $error['email']="Email already exists"."<br>";

        }}

	}

	else $validEmail=$email1;



//phone number validation

	$phone=htmlspecialchars($_POST['phone']);

	if($phone!=$phone1)

	{

	if(empty($phone))

	{

	 $error['phone']="Please enter your phone"."<br>";

	}

	else if(strlen($phone)!=10 || !is_numeric($phone) || $phone[0]==0)

	{

		$error['phone']="Invalid phone number"."<br>";

	}

	else 

		$validPhone=mysqli_real_escape_string($con,$phone);

	}

	else $validPhone=$phone1;

//sex validation

	$sex=$_POST['sex'];

	if($sex!="male" && $sex!="female")

		$error['sex']="Not a valid sex<br>";

	else 

		$validSex=$sex;



//college name validation

	$collegeName=htmlspecialchars($_POST['collegeName']);

	if($collegeName!=$collegeName1)

	{

	if(empty($collegeName))

	{

		$error['collegeName']="Please enter your college name"."<br>";

	}

	else if(preg_match("/^[a-zA-Z():, ]+$/",$collegeName))

	{

		$validCollege=mysqli_real_escape_string($con,$collegeName);

	}

	else

	{

		$error['collegeName']="Invalid college.Try again!"."<br>";

	}

	}

	else $validCollege=$collegeName1;

	
//year validation
	$year=$_POST['collegeYear'];

	if($year==1 || $year==2 || $year==3 ||$year==4 || $year==5)

		$validYear=$year;

	else

		$error['collegeYear']="Please select a valid year<br>";	



//date validation

	$date1=$_POST['date'];

	$month1=$_POST['month'];

	$year1=$_POST['year'];

	if($date1==0 || $month1==0 || $year1==0 || (($month1==2 || $month1==4 || $month1==6 || $month1==9 || $month1==11) && $date1==31) || ($date1==30 && $month1==2) || ($date1==29 && $month1==2 && $year1%4!=0))

	{

		$error['date']="Please enter a valid date of birth"."<br>";

	}

	else

		$dob=$_POST['year']."-".$_POST['month']."-".$_POST['date'];



//password validation

	/*$password=htmlspecialchars($_POST['password']);	

	$confirmPassword=htmlspecialchars($_POST['confirmPassword']);

	if(empty($password))

	{	

		$error['password']="Please enter your password"."<br>";

	}

	else if($password == $confirmPassword && $password!="" && preg_match("/^[a-zA-Z0-9]+$/",$confirmPassword))

	{

		$validPassword=mysqli_real_escape_string($con,$confirmPassword);

	}

	else 

	{

		$error['password']="The two passwords do not match.Try again!"."<br>";

	}*/

//photo

	$old_picture = mysqli_real_escape_string($con,trim($_POST['old_picture']));

    $new_picture = mysqli_real_escape_string($con,trim($_FILES['new_picture']['name']));

    $new_picture_type = $_FILES['new_picture']['type'];

    $new_picture_size = $_FILES['new_picture']['size'];

	$error['picture']=false;	

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


	$year1=$row['year'];
//if no error insert into database

	if(!isset($error['firstName']) && !isset($error['lastName']) && !isset($error['username']) && !isset($error['email']) && !isset($error['phone']) && !isset($error['sex']) && !isset($error['collegeName']) && !isset($error['year']) && !isset($error['date']))

	{

		$year1=$validYear;
		if(!isset($user_info)){

			if(!empty($new_picture))

			{

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

			else $new_picture=$old_picture;	

			$fbid=NULL;

		}

		else{

			$img = file_get_contents('https://graph.facebook.com/'.$user_info["username"].'/picture');

			$file = dirname(__file__).'/images/'.$user_info["username"].'.jpg';

			file_put_contents($file, $img);

			$new_picture=$user_info["username"].'.jpg';

			$fbid=$user_info["id"];	

		}

		if(!$error['picture']){

			$updateQuery="Update ifest_register set first_name='$validFirstName',last_name='$validLastName',username='$validUsername',email='$validEmail',phone='$validPhone',sex='$validSex',college='$validCollege',year='$validYear',dob='$dob',picture='$new_picture' where user_id='$id'"; 

			if(!mysqli_query($con,$updateQuery))

  			{

  				die('Error: ' . mysqli_error($con));

  			}		

			else

			{ 

				//echo "record added";
				echo "<script>alert('Your record is successfully updated');</script>";
				echo "<script>window.location.replace('http://ifest.ieeeiitr.com/ifest2013/ifest.php');</script>";
				unset($validFirstName,$validLastName,$validUsername,$validEmail,$validPhone,$validSex,$validCollege,$validYear,$dob);//unset all input variables

			mysqli_close($con);

			}

		}

	}

}

?>

<body>

<?php

        /* if(!isset($user_info))

        {echo "<a href=".$loginUrl.">Login with fb</a>";}

        else echo "<a href=".$logoutUrl.">Logout</a>"; */

?>

<?php

//user info retrieved using facebook

    /*    if(isset($user_info)){

        foreach($user_info as $name => $value)

        echo $name.'-'.$value."<br>";

        }*/

		

?>



<div id="mainform">

<!-- heading and logo -->

	<a href="ifest.php"><img src="FInal_iFest_Logo.png" style="position:absolute;left:44%;top:2%;z-index;100;height:117px;"/>

</a>

		<div id="motto">

			The Future Lies Within

		</div>

		<div id="heading">

			Edit Profile

		</div>

<br/>

<br/>

<!-- main form -->

	<div id="padding">

		<form class= "form-horizontal" enctype="multipart/form-data" name="signup"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<!--		Already a member?&nbsp;<a href="index.php">Sign in</a>. -->

			<br>

			<br>

			<span id="error"></span>

			<br>

			<table>

				<tr>

					<td>

      			<div class="control-group">

				<label class="control-label" for="firstName">First name:</label>

			</td><td><div class="controls">

			<input  type="text" id="firstName" name="firstName" placeholder="" onblur="validate(this.id)" value="<?php echo $fname1; ?>" />

			</div>

		</td>

			</div>

		</tr>

			<?php

			if(isset($error['firstName']))

			{

				echo "<tr><td><div class='error'>*".$error['firstName']."</div></td></tr>";

			}

			?>

			<br>

			<tr>

			<div class="control-group">

				<td><label class="control-label" for="lastName">Last name:</label>

			</td><td><div class="controls">

			<input  type="text" id="lastName" name="lastName" placeholder="" onblur="validate(this.id)" value="<?php echo $lname1; ?>" >

		    </div></td>

			</div></tr>

			<?php

			if(isset($error['lastName']))

			{

				echo "<tr><td><div class='error'>*".$error['lastName']."</div></td></tr>";

			}

			?>

			<br>

			<tr>

			<div class="control-group">

			<td>

				<label class="control-label" for="username">Username:</label>

			</td><td><div class="controls">

			<input type="text" id="username" name="username" placeholder="" value="<?php  echo $username1; ?>" onfocus="this.value=''" onblur="available(this.id,this.value); validate(this.id);" >

		     </div></td>

			 </div></tr>

			<span id="username_available"></span>

			<?php

			if(isset($error['username']))

			{

				echo "<tr><td><div class='error'>".$error['username']."</div></td></tr>";

			}

			?>

			<br>

			<tr>

			<div class="control-group">

				<td>

                                <label class="control-label" for="email">Email:</label>

                    </td><td>    <div class="controls">

                        <input type="email" id="email" name="email" placeholder="" value="<?php  echo $email1; ?>" onfocus="this.value=''" onblur="available(this.id,this.value); validate(this.id);" >

                        </div></td>

						</div></tr>

						<span id="email_available"></span>

			<?php

                        if(isset($error['email']))

                        {

                                echo "<tr><td><div class='error'>*".$error['email']."</div></td></tr>";

                        }

                        ?>

			<br>

			<tr>

			<div class="control-group">

				<td><label class="control-label" for="phone">Phone:</label>

			</td><td><div class="controls">

			<input  type="text" id="phone" name="phone" placeholder="" onblur="validate(this.id)" value="<?php echo $phone1; ?>">

			</div></td>

			</div></tr>

			<?php

			if(isset($error['phone']))

			{

				echo "<tr><td><div class='error'>*".$error['phone']."</div></td></tr>";

			}

			?>

			<br>

			<tr>

			<div class="control-group">

				<td><label class="control-label" for="sex">Sex:</label>

			</td><td><div class="controls">

			

			<input  type="radio" name="sex" id="male" value="male" checked="checked">Male</input>

			<input  type="radio" name="sex" id="female" value="female">Female</input>

			

			</div></td>

			</div></tr>

			<br>

			<tr>

                        <div class="control-group">

                <td>                <label class="control-label" for="collegeName">College:</label>

                    </td><td>    <div class="controls">

                        <input type="text" id="collegeName" name="collegeName" placeholder="" onblur="validate(this.id)" value="<?php echo $collegeName1;  ?>" />

                        </div></td>

						</div></tr>

			<?php

                        if(isset($error['collegeName']))

                        {

                                echo "<tr><td><div class='error'>*".$error['collegeName']."</div></td></tr>";

                        }

                        ?>

			<br>

			<tr>

			<div class="control-group">

				<td>   <label class="control-label" for="collegeYear">Year:</label>	

			</td><td><div class="controls">

			<select name="collegeYear" size="1" id="collegeYear"  onblur="validate(this.id) ">

				<option value=0 <?php if($year1==0) echo 'selected=selected'; ?> >Select year</option>

				<option value=1 <?php if($year1==1) echo 'selected=selected'; ?> >First year</option>

				<option value=2 <?php if($year1==2) echo 'selected=selected'; ?> >Second year</option>

				<option value=3 <?php if($year1==3) echo 'selected=selected'; ?> >Third year</option>

				<option value=4 <?php if($year1==4) echo 'selected=selected'; ?> >Fourth year</option>

			</select>

			</div></td>

			</div></tr>

			<?php

			if(isset($error['collegeYear']))

			{

				echo "<tr><td><div class='error'>*".$error['collegeYear']."</div></td></tr>";

			}

			?>



			<br>

			<tr>

			<div class="control=group">

			<td><label>	Date of birth:</label>

			</td><td><div class="controls">

			<?php $dob=explode('-',$dob1); ?>

			<select name="date" id="date"  onblur="validate(this.id)">

                                <option value=0>Date</option>

                                <?php

                                        for($i=1;$i<=31;++$i)

                                        {

					?>

					<option value='<?php echo $i; ?>' <?php if($dob[2]==$i) echo 'selected=selected'; ?> ><?php echo $i; ?></option>	

					<?php

					}

                                ?>

                        </select>

						

			<select name="month" id="month" onblur="validate(this.id)">

				<option value=0>Month</option>

                                <?php

                                        for($i=1;$i<=12;++$i)

                                        {

					?>

					<option value='<?php echo $i; ?>' <?php if($dob[1]==$i) echo 'selected=selected'; ?> ><?php echo $i; ?></option>	

					<?php

					}

                                ?>

			</select>

			<select name="year" id="year" onblur="validate(this.id)">

				<option value=0>Year</option>

                                <?php

                                        for($i=1980;$i<=2005;++$i)

                                        {

					?>

					<option value='<?php echo $i; ?>' <?php if($dob[0]==$i) echo 'selected=selected'; ?> ><?php echo $i; ?></option>	

					<?php

					}

                                ?>

			</select>

			</div></td>

			</div></tr>

			<?php

			if(isset($error['date']))

			{

				echo "<tr><td><div class='error'>*".$error['date']."</div></td></tr>";

			}

			?>

			<br>

			<!--<div class="control-group">

				<label class="control-label" for="password">Password:</label>

			<div class="controls">

			<input type="password" id="password" name="password" placeholder="" onblur="validate(this.id)">

		</div>

		</div>-->

			 <input type="hidden" name="old_picture" value="<?php if (!empty($old_picture)) echo $old_picture; ?>" />

      <tr><div class="control-group">

    <td><label class="control-label" for="new_picture">Picture:</label>

    </td><td><div class="controls">

    <input type="file" id="new_picture" name="new_picture" value="<?php echo $old_picture; ?>"/>

	<?php if (!empty($old_picture)) {

        echo '<img class="profile" style="height:100px; width:100px" src="' . MM_UPLOADPATH . $old_picture . '" alt="Profile Picture" />';

      } ?>

    </div></td>

    </div></tr>

			<?php 

			/*	$publickey="6Ld0ZuQSAAAAALYFXzvQnIoDf38ozZV2J5u3SDnV";

				echo recaptcha_get_html($publickey);

				if(isset($error['captcha']))

                                	echo "<div class='error'>*".$error['captcha']."</div>";

									*/

			?>



			<br>

			<tr>

			<td><input class="inputs buttons" id="signup" name="signup" type="submit" value="Update"></td>

			<td><input class="inputs buttons" id="reset" name="reset" type="reset" value="Reset"></td>

		</table>

		</form>

	</div>

</div>

</body>

</html>

