<?php include 'inc/session.php'; ?>
<?php include('inc/header.php') ?>
<?php 
   $userid = $users['id'];
   $username = $users['name'];
   
?>
<body>
    <div id="wrapper">
        <?php include('inc/navbar2.php') ?>

        <section class="hero">
            <div class="magnifier grd3"></div>
            <div class="container">
                <div class="hero-desc">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><mark>Hello</mark> Welcome to the Reservation Movie Theater!</h4>
                            <h2>Welcome! <?php echo $username; ?></h2>
                            <p class="lead">Enjoy your favorite movie!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- end section -->

        <?php include('inc/showing2.php'); ?>

        <?php include('inc/footer.php') ?>
    </div>
    <div class="dmtop"><i class="fa fa-long-arrow-up"></i></div>
    <?php include('inc/homescript.php') ?>

</body>

</html>