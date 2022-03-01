<?php
	session_start();
	include 'inc/conn.php';

	if(!isset($_SESSION['users']) || trim($_SESSION['users']) == ''){
		header('location: loginmodel.php');
	}

	$sql = "SELECT * FROM users WHERE id = '".$_SESSION['users']."'";
	$query = $conn->query($sql);
	$users = $query->fetch_assoc();

	
?>