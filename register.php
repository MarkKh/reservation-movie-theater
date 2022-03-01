<?php
	include 'inc/conn.php';

	if(isset($_POST['register'])){
		$name = $_POST['name'];
		$mobile_number = $_POST['mobile_number'];
        $email = $_POST['email'];
        $password = $_POST['password'];


		$sql = "INSERT INTO users (name,mobile_number,email,password) VALUES ('$name','$mobile_number','$email','$password')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'user has been added';
		}
		else{
			$_SESSION['error'] = $conn->error;

		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: loginmodel.php');

?>