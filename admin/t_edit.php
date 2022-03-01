<?php

include 'inc/session.php';

if (isset($_POST['update'])) {
    $id = $_GET['ID'];
    $name = $_POST['name'];
    $seats_no = $_POST['seats_no'];


    $query = " UPDATE theater SET name = '" . $name . "', seats_no= '" . $seats_no . "' WHERE id ='" . $id . "' ";

    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['success'] = 'update successfully';
        header("location:theater.php");
    } else {
        $_SESSION['error'] = 'update is not successfully';
    }
} else {
    header("location:theater.php");
}


?>