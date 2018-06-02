<?php 
session_start();
// session_destroy();
unset($_SESSION['username1']);
unset($_SESSION['uid']);
unset($_SESSION['uname']);

// echo 'wait for 2-3 seconds.. you are logged out';
header("Location:index.php"); 
exit();

?>