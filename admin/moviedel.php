<?php
	include 'inc/session.php';

	if(isset($_GET['GetID']))
         {
             $id = $_GET['GetID'];
             $query = " delete from movie where id = '".$id."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
				$_SESSION['success'] = 'Movie deleted successfully';
                 header("location:movieall.php");
             }
             else
             {
				$_SESSION['error'] = 'The movie is showing';
                header("location:movieall.php");
             }
        }
         else
         {
             header("location:movieall.php");
         }
?>

