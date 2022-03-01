<?php
	include 'inc/session.php';

	if(isset($_POST['screening'])){
		$movie_id = $_POST['movie_id'];
		$theater_id = $_POST['theater_id'];
		$datetime = $_POST['datetime'];

		$sql = "INSERT INTO show_movie (movie_id, theater_id, datetime) VALUES ('$movie_id', '$theater_id', '$datetime')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'show movie added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: screening.php');

?>