<?php
//destroying session
session_start();
session_destroy();
setcookie("user_id", "", time()-3600);
setcookie("username", "", time()-3600);
header("Location:ifest.php");//redirect to main page
?>
