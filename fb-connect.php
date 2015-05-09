<?php 
require 'php-sdk/facebook.php';
//Application Configurations
//$app_id="319219538213654";
$app_id="233044826805820";
$app_secret="f914cd5e0cb55302a477cc4f2cd19b02";
//$app_secret="d5ae180ed2bcd8cad94416686a717269";
// Create our application instance
$facebook = new Facebook(array(
			'appId'=>$app_id,
			'secret'=>$app_secret,
			));

// Get User ID
$user=$facebook->getUser();
//echo $user;
/*if($user)
{
	try
	{
		$user_profile = $facebook->api('/me');
	}
	catch(FacebookApiException $e)
	{
		error_log($e);
		$user = NULL;
	}
}*/
if($user)
{
	try
	{
		$user_info=$facebook->api('/'.$user);
	}
	catch(FacebookApiException $e)
	{
		error_log($e);
	}
}

if($user)
{
	// Get logout URL
	$logoutUrl = $facebook->getLogoutUrl(array(
				'next'=>'http://ifest.ieeeiitr.com/ifest2013/logout.php',
				));
}
else
{
	// Get login URL
	$loginUrl = $facebook->getLoginUrl(array(
				'scope'		=> 'email',
				'redirect_uri'	=> 'http://ifest.ieeeiitr.com/ifest2013/signup.php',
				));
}
?>
