<?php 
	$host = 'localhost';
	$DBUser = "u960537433_root";
	$DBPassword = 'pg/aUF6|b';
	$db = 'u960537433_NamayaLogin';

	
	$conn = mysqli_connect($host,$DBUser, $DBPassword, $db);
	
	if(!$conn)
	{
		die(mysqli_error());
	}
	
?>