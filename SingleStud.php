<?php 
	session_start();
		
	// if(!isset($_SESSION))
	// {
	// 	header('location:index.php');
	// 	exit;
	// }
if($_SESSION["user_id"]) {
	

?>





<?php
}else 
// echo "<h1>Please login first .</h1>";
header('location:index.php');
	exit;
?>