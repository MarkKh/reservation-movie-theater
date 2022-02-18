<?php
	include 'inc/session.php';

	if(isset($_POST['addt'])){
		$name = $_POST['name'];


		$sql = "INSERT INTO theater (name) VALUES ('$name')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'theater has been added';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: theater.php');

?>