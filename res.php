<?php
	include 'inc/session.php';
    $userid = $users['id'];

	if(isset($_POST['reservation'])){
		$show = $_GET['ID'];

		$sql = "INSERT INTO reservation (user_id,show_id) VALUES ('$userid','$show')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'reservation has been added';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: reshis.php');

?>