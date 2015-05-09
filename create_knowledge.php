<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	header("Location:Share-home.php");
}
require 'connect.php';
if(isset($_POST['submit']))
{
$sql="INSERT INTO knowledge (heading, image, description)
VALUES
('$_POST[heading]','$_POST[image]','$_POST[description]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
}

?>

<html>
<body>

<form action="" method="post">
heading: <input type="text" name="heading">
image: <input type="file" name="image">
description: <input type="text" name="description">
<input type="submit" name="submit" value="Submit" id="submit">
</form>

</body>
</html>