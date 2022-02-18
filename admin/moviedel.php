<?php
	include 'inc/session.php';

	if(isset($_GET['delID']))
         {
             $id = $_GET['delID'];
             $query = " delete from movie where id = '".$id."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
				$_SESSION['success'] = 'Movie deleted successfully';
                 header("location:movieall.php");
             }
             else
             {
				$_SESSION['error'] = 'Select item to delete first';
             }
        }
         else
         {
             header("location:movieall.php");
         }
?>

