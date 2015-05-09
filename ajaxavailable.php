<?php
session_start();
require 'connect.php';
$field='';
$value='';
$id=0;
if(isset($_GET["username"]))
{
	$value=$_GET["username"];
	$field='username';
}
else if(isset($_GET["email"]))
{
	$value=$_GET["email"];
	$field='email';
}
if(isset($_SESSION['user_id']))
$id=$_SESSION['user_id'];
$query="Select $field from ifest_register where user_id <> $id";
$execute=mysqli_query($con,$query);
if (strlen($value) > 0)
{
	if(!mysqli_num_rows($execute)==0)
	{
		while($allusers=mysqli_fetch_assoc($execute))
		{
			if ($value == $allusers[$field])
			{
				$hint=0;
				break;
			}
			else
			{
				$hint=1;
			}
		}
	}
	else 
		$hint=1;	
}
if($hint == 0)
{
	$response=ucfirst($field)." not available";
}
else
{
	$response="";
}

//output the response
echo $response;
?>
