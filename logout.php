<?php 

// if(isset($_GET['logout']))
// {
// 	session_destroy();
// 	header('location:index.php?logout=true');
// 	exit;
// }
?>
<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["first_name"]);
unset($_SESSION["user_id"]);
header('location:index.php?logout=true');
// header("Location:login.php");
?>