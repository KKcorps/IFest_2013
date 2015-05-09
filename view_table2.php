<?php 

//require_once("connect.php");
$con=mysql_connect('ifestiitr.db.7118431.hostedresource.com', 'ifestiitr', 'D00rdie!');
mysql_select_db('ifestiitr',$con);

$query="SELECT * from ifest_register";

$data=mysql_query($query, $con);
echo "<table border='2' >  ";
echo "<tr><th>USERNAME</th><th>USER ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>EMAIL</th><th>PHONE</th><th>SEX</th><th>COLLEGE</th><th>YEAR</th><th>DATE OF BIRTH</th>";
while($row=mysql_fetch_array($data))

{
echo "<tr>"."<td height='10'>".$row['username']."</td>"."<td height='10' width='45'>".$row['user_id']."</td>"."<td height='10' width='45'>".$row['first_name']."</td>"."<td height='10' width='45'>".$row['last_name']."</td>"."<td height='10' width='45'>".$row['email']."</td>"."<td height='10' width='45'>".$row['phone']."</td>"."<td height='10' width='45'>".$row['sex']."</td>"."<td height='10' width='200'>".$row['college']."</td>"."<td height='10' width='50'>".$row['year']."</td>"."<td height='10' width='50'>".$row['dob']."</td>";}



mysql_close($con);

?>