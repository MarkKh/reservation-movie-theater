<?php include ('inc/conn.php') ?>
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
                            <h4><mark>Hello</mark> Welcome to the Reservation Movie Theater!</h4>
                            <h2>MBF Cineplex</h2>
                            <p class="lead">Enjoy your favorite movie!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- end section -->

        <?php include('inc/showing.php'); ?>

        <?php include('inc/footer.php') ?>
    </div>
    <div class="dmtop"><i class="fa fa-long-arrow-up"></i></div>
    <?php include('inc/homescript.php') ?>

</body>

</html>