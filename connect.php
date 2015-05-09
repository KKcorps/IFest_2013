<?php
//connect to database
$con=mysqli_connect('ifestiitr.db.7118431.hostedresource.com', 'ifestiitr', 'D00rdie!', 'ifestiitr');
//mysql_select_db('ifestiitr',$con);

if (mysqli_connect_errno($con)) {
    echo "Connect failed:".mysqli_connect_error();
}
?>
