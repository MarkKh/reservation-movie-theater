<?php include 'inc/session.php'; ?>
<?php include('inc/header.php') ?>
<?php
$id = $_GET['GetID'];
$query = "SELECT show_movie.id as id,
    show_movie.datetime as dt,
    movie.name as mname,
    movie.photo as mphoto,
    movie.duration as md,
    movie.price_per_tic as price,
    movie.category as mcat,
    movie.description as mdes,
    movie.director as mdi,
    movie.languages as ml,
    movie.trailers as mt,
    theater.name as tname 
    FROM show_movie
    inner join movie on movie.id = show_movie.movie_id
    inner join theater on theater.id = show_movie.theater_id
    where show_movie.id = '$id' ";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $movie_name = $row['mname'];
    $movie_description = $row['mdes'];
    $movie_director = $row['mdi'];
    $movie_duration = $row['md'];
    $movie_languages = $row['ml'];
    $movie_price_per_tic = $row['price'];
    $movie_trailers = $row['mt'];
    $movie_category = $row['mcat'];
    $movie_photo = $row['mphoto'];
    $theater_name = $row['tname'];
    $datetime = $row['dt'];
}
?>

<body>
    <div id="wrapper">
        <?php include('inc/navbar2.php') ?>

        <section class="hero">
            <div class="magnifier grd3"></div>
            <div class="container">
                <div class="hero2-desc">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php echo $movie_name ?> <mark>trailer</mark></h2>
                            <br>
                            <?php echo $movie_trailers?>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- end section -->

        <section class="section bt littlepad">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="screen-normal wow slideInLeft">
                            <img src="admin/images/movie/<?php echo $movie_photo ?>" alt="" class="img-fluid">
                        </div><!-- end screen -->
                    </div><!-- end col -->

                    <div class="col-md-7 mobmartop30">
                        <div class="tagline-v2 padleft30">
                            <h4><?php echo $movie_name ?></h4><br>
                            <h6><strong>Director : </strong><?php echo $movie_director ?></h6>
                            <h6><strong>Duration : </strong><?php echo $movie_duration ?></h6>
                            <h6><strong>Category : </strong><?php echo $movie_category ?></h6>
                            <h6><strong>Language : </strong><?php echo $movie_languages ?></h6>
                            <h6><strong>Theater : </strong><?php echo $theater_name ?></h6>
                            <h6><strong>Price : </strong><mark><?php echo $datetime ?></mark></h6>
                            <h6><strong>Price : </strong><mark><?php echo $movie_price_per_tic ?></mark></h6>
                            <h6><strong>Description : </strong><?php echo $movie_description ?></h6><br>
                            <a href="reservation.php?GetID=<?php echo $id ?>" class="btn btn-gradient grd41 withradius secbtn withicon">buy now <i class="fa fa-long-arrow-right"></i></a>
                        </div><!-- end tagline -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->


        <?php include('inc/footer.php') ?>
    </div>
    <?php include('inc/homescript.php') ?>

</body>

</html>