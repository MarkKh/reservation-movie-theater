<?php
include 'inc/session.php';

if (isset($_POST['addm'])) {
	$name = $_POST['name'];
	$description = $_POST['description'];
	$director = $_POST['director'];
	$duration = $_POST['duration'];
	$languages = $_POST['languages'];
	$price_per_tic = $_POST['price_per_tic'];
	$trailers = $_POST['trailers'];
	$category = $_POST['category'];

	$fileupload = $_POST['photo'];

	//ฟังก์ชั่นวันที่
	date_default_timezone_set('Asia/Bangkok');
	$date = date("Ymd");
	//ฟังก์ชั่นสุ่มตัวเลข
	$numrand = (mt_rand());
	//เพิ่มไฟล์
	$upload = $_FILES['photo'];
	if ($upload <> '') {   //not select file
		//โฟลเดอร์ที่จะ upload file เข้าไป 
		$path = "images/movie/";

		//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
		$type = strrchr($_FILES['photo']['name'], ".");

		//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
		$newname = $date . $numrand . $type;
		$path_copy = $path . $newname;
		$path_link = "images/movie/" . $newname;

		//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
		move_uploaded_file($_FILES['photo']['tmp_name'], $path_copy);
	}

	if ($upload != '') {
		move_uploaded_file($_FILES['photo']['tmp_name'], 'C:\Bitnami\wampstack-8.0.13-0\apache2\htdocs\resmovie\admin\images\movie' . $filename);
	}

	$sql = "INSERT INTO movie (name,description,director,duration,languages,price_per_tic,trailers,category,photo) VALUES ('$name','$description','$director','$duration','$languages','$price_per_tic','$trailers','$category','$newname')";
	if ($conn->query($sql)) {
		$_SESSION['success'] = 'movie has been added';
	} else {
		$_SESSION['error'] = $conn->error;
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}

header('location: movieadd.php');
