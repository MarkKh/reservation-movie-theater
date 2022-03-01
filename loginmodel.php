<?php include('inc/conn.php') ?>
<?php include('inc/header.php') ?>
<?php
  session_start();
  if (isset($_SESSION['users'])) {
    header('location:index2.php');
  }
?>

<body>
    <div id="wrapper">
        <?php include('inc/navbar.php') ?>

        <section class="hero">
            <div class="magnifier grd3"></div>
            <div class="container">
                <div class="hero-desc">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Login</h2><br>
                            <form action="login.php" method="post">
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    </div>
                                </div><br>
                                <button type="submit" name="login" id="login" class="btn btn-primary">Login</button>
                            </form>
                            <p>not a member? <a href="registermodel.php"> Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- end section -->


        <?php include('inc/footer.php') ?>
    </div>
    
    <?php
  		if(isset($_SESSION['error'])){
  			echo "
			  		<p>".$_SESSION['error']."</p>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
    <?php include('inc/homescript.php') ?>

</body>

</html>