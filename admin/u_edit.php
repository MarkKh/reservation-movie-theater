<?php

include 'inc/session.php';

if (isset($_POST['update'])) {
    $id = $_GET['ID'];
    $name = $_POST['name'];
    $mobile_number = $_POST['mobile_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = " UPDATE users SET name = '" . $name . "',
                                mobile_number ='" . $mobile_number . "',
                                email='" . $email . "', 
                                password='" . $password . "'
                                WHERE id ='" . $id . "' ";

    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['success'] = 'update successfully';
        header("location:user.php");
    } else {
        $_SESSION['error'] = 'update is not successfully';
    }
} else {
    header("location:user.php");
}


?>