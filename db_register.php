
<?php
$conn=mysql_connect('ifestiitr.db.7118431.hostedresource.com', 'ifestiitr', 'D00rdie!');
mysql_select_db('ifestiitr',$conn);
$query="CREATE TABLE IF NOT EXISTS ifest_register (".
  "user_id int(11) NOT NULL AUTO_INCREMENT,".
  "first_name varchar(50) NOT NULL,".
  "last_name varchar(50) NOT NULL,".
  "username varchar(100) NOT NULL,".
  "email varchar(50) NOT NULL,".
  "phone varchar(20) NOT NULL,".
  "sex varchar(10) NOT NULL,".
  "college varchar(100) NOT NULL,".
  "year int(11) NOT NULL,".
  "dob date NOT NULL,".
  "password varchar(100) NOT NULL,".
  "picture varchar(100) DEFAULT NULL,".
  "event1 varchar(20) DEFAULT NULL,".
  "event2 varchar(20) DEFAULT NULL,".
  "fbid varchar(100) DEFAULT NULL,".
  "PRIMARY KEY (user_id),".
  "UNIQUE KEY username ( username ),".
  "UNIQUE KEY email ( email )".
") ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29" ;
if(mysql_query($query))
{
echo 'table created';
}
else
echo 'invalid';



?>