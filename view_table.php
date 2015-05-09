<?php 

require_once("connect.php");



$query="SELECT username from ifest_register";


while($row=mysqli_fetch_array(mysqli_query($query,$con)))

{

echo $row['username'].' ';}

mysqli_close($con);

?>