<?php

//include('functions.php');
?>
<?php
if(isset($_SESSION['user_id']))
{
	header("Location:ifest.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="This is the official website of iFest 2013 hosted by IIT Roorkee, IEEE Student Chapter" />
<meta name="keywords" content="ifest,2013,i-fest,IITR,IIT,Roorkee,IEEE,IEEE Student,online,fest,envision,eureka,matrix,techtales,techex"  />

<title>Forgot Password</title>
   	  <div id="login_register" align="right">
        	<div id="login_left" class="login_image"></div>
            <div id="login_text">
        	<?php
				/*if(!isset($_SESSION['username']))
	        		echo "<a href='signup.php'>Login / Sign Up</a>";
				else
				echo "<a href='logout.php'>Logout</a>";*/
			?>
        	</div>
        	<div id="login_right" class="login_image"/></div>
        	<div style="clear:both"></div>
  </div>
        
    </div>
        
<?php
//$conn = mysql_connect("ifestiitr.db.7118431.hostedresource.com", "ifestiitr", "D00rdie!") or die(mysql_error());
//mysql_select_db('ifestiitr', $conn) or die(mysql_error());
require 'connect.php';

//this function will display error messages in alert boxes, used for login forms so if a field is invalid it will still keep the info
//use error('foobar');
function error($msg) {
    ?>
 
    <script language="JavaScript">

        alert("<?=$msg?>");
        history.back();
 
    </script>

    <?
    exit;
}

//This functions checks and makes sure the email address that is being added to database is valid in format. 
function check_email_address($email) {
  // First, we check that there's one @ symbol, and that the lengths are right
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
    return false;
  }
  // Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
     if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
      return false;
    }
  }  
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}


if (isset($_POST['submit'])) {
	
	if ($_POST['forgotpassword']=='') {
		error('Please Fill in Email.');
	}
	if(get_magic_quotes_gpc()) {
		$forgotpassword = htmlspecialchars(stripslashes($_POST['forgotpassword']));
	} 
	else {
		$forgotpassword = htmlspecialchars($_POST['forgotpassword']);
	}
	//Make sure it's a valid email address, last thing we want is some sort of exploit!
	if (!check_email_address($_POST['forgotpassword'])) {
  		error('Email Not Valid - Must be in format of name@domain.tld');
	}
    // Lets see if the email exists
    $sql = "SELECT COUNT(*) FROM ifest_register WHERE email = '$forgotpassword'";
    $result = mysqli_query($con,$sql)or die('Could not find member: ' . mysql_error());
    if (!mysqli_num_rows($result)==1) {
        error('Email Not Found!');
    }

	//Generate a RANDOM sha1 Hash for a password
	$random_password=(uniqid(rand()));
	
	//Take the first 8 digits and use them as the password we intend to email the user
	$emailpassword=substr($random_password, 0, 8);
	
	//Encrypt $emailpassword in sha1 format for the database
	$newpassword = sha1($emailpassword);
	
        // Make a safe query
       	$query = sprintf("UPDATE `ifest_register` SET `password` = '$newpassword' 
						  WHERE `email` = '$forgotpassword'",
                    mysqli_real_escape_string($con,$newpassword));
					
					mysqli_query($con,$query)or die('Could not update members: ' . mysql_error());

//Email out the infromation
$subject = "Your New Password for iFest 2013"; 
$message = "Your new password is as follows:
----------------------------------
Password: $emailpassword
---------------------------------- 
Please make note this information has been encrypted into our database. 

This email was automatically generated.

Team iFest



For any website related issues please contact:

Archit Agarwal
Email  - ifest.ca@gmail.com
Mobile - +918439557925
"; 
                       
          if(!mail($forgotpassword, $subject, $message,  "FROM: iFest")){ 
             die ("Sending Email Failed, Please Contact Site Admin! (ifest.ca@gmail.com)"); 
          }else{ 
                error('Your New Password has been Sent to your EmailId!');
         } 
		
	}
	
else {
?>
      <form name="forgotpasswordform" action="" method="post">
        <!--<table border="0" cellspacing="0" cellpadding="3" width="100%">
          
          <tr>-->
            <label>Email Address:</label>
            <input name="forgotpassword" type="text" value="" id="forgotpassword" />
            <!--<td colspan="2" class="footer" align="center">--><input type="submit" name="submit" value="Submit" class="mainoption" />
      </form>
      <?
}
?>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
</div>
<div class="header_underline"></div>
<div id="footer">
	<div id="footer_text">
    	<?php //include('footer.php');?>

    </div>
</div>

</body>
</html>
