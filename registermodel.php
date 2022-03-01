<?php include('inc/conn.php') ?>
<?php include('inc/header.php') ?>


<body>
    <div id="wrapper">
        <?php include('inc/navbar.php') ?>

        <section class="hero">
            <div class="magnifier grd3"></div>
            <div class="container">
                <div class="hero-desc">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Register</h2><br>
                            <form action="register.php" method="post">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobile_number" class="col-sm-2 col-form-label">Mobile Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Phone number" required>
                                    </div>
                                </div>
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
                                <button type="submit" name="register" id="register" class="btn btn-primary">Register</button>
                            </form>
                            <p>if you are a member please <a href="loginmodel.php">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- end section -->


        <?php include('inc/footer.php') ?>
    </div>
    <div class="dmtop"><i class="fa fa-long-arrow-up"></i></div>
    <?php include('inc/homescript.php') ?>

</body>

</html>