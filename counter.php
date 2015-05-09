<?php
require 'connect.php';
$query="CREATE TABLE IF NOT EXISTS `counter` ( `counter` INT( 20 ) NOT NULL );";
$q="INSERT INTO counter VALUES (0);";
//$result=mysqli_query($con,$query);
if(!mysqli_query($con,$query))
  			{
  				die('Error: ' . mysqli_error($con));
  			}	
$count = mysqli_fetch_row(mysqli_query($con,"SELECT counter FROM counter"));
foreach($count as $x)
echo $x;
?>
