<?php 

//require_once("connect.php");
$con=mysql_connect('ifestiitr.db.7118431.hostedresource.com', 'ifestiitr', 'D00rdie!');
mysql_select_db('ifestiitr',$con);

$query="DELETE from ifest_register where username='new'";

$data=mysql_query($query, $con);
/*
while($row=mysql_fetch_array($data))

{

echo $row['username'].' '.$row['user_id'].' '.$row['firstname'].' '.$row['lastname'].' '.$row['email'].' '.$row['phone'].' '.$row['sex'].' '.$row['college'].' '.$row['year'].' '.$row['dob'].' '.'<br />';}

mysql_close($con);

?>*/