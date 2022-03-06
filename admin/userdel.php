<?php
	include 'inc/session.php';

	if(isset($_GET['delID']))
         {
             $id = $_GET['delID'];
             $query = " delete from users where id = '".$id."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
				$_SESSION['success'] = 'User deleted successfully';
                 header("location:user.php");
             }
             else
             {
				$_SESSION['error'] = 'User hve reservations';
             }
        }
         else
         {
             header("location:user.php");
         }
         header("location:user.php");
?>

