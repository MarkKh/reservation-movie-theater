<?php
  session_start();
  if (isset($_SESSION['admin'])) {
    header('location:home.php');
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Admin Login</title>
  <link href="css/index.css" rel="stylesheet" id="bootstrap-css" />
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <h1>Admin Login</h1>
      </div>

      <!-- Login Form -->
      <form action="login.php" method="post">
        <input type="email" id="login" class="fadeIn second" name="email" placeholder="username" />
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" />
        <input type="submit" class="fadeIn fourth" name="login" value="Log In" />
      </form>
    </div>
  </div>
  <?php
  		if(isset($_SESSION['error'])){
  			echo "
			  		<p>".$_SESSION['error']."</p>
  			";
  			unset($_SESSION['error']);
  		}
  	?>

</body>

</html>