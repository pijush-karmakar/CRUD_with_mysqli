<?php ob_start(); session_start(); 


	$dbserver = 'localhost'; // 127.0.0.1
	$dbuser = 'root';
	$dbpassword = '';
	$database  = 'notice_board'; 


	$conn = new mysqli($dbserver,$dbuser,$dbpassword,$database);

	if(!$conn)
		die("Couldn't Connect to the database".mysql_errno());


	