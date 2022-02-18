	<?php

	include 'inc/session.php';

	if (isset($_POST['update'])) {
		$id = $_GET['ID'];
		$name = $_POST['name'];
		$description = $_POST['description'];
		$director = $_POST['director'];
		$duration = $_POST['duration'];
		$languages = $_POST['languages'];
		$price_per_tic = $_POST['price_per_tic'];
		$trailers = $_POST['trailers'];
		$category = $_POST['category'];

		$query = " UPDATE movie SET name = '" . $name . "',
									description ='" . $description . "',
									director='" . $director . "', 
									duration='" . $duration . "',
									languages='" . $languages . "',
									price_per_tic='" . $price_per_tic . "',
									trailers='" . $trailers . "',
									category='" . $category . "'
									WHERE id ='" . $id . "' ";

		$result = mysqli_query($conn, $query);

		if ($result) {
			$_SESSION['success'] = 'update successfully';
			header("location:movieall.php");
		} else {
			$_SESSION['error'] = 'update is not successfully';
		}
	} else {
		header("location:movieall.php");
	}


	?>