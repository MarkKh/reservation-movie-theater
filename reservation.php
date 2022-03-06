<?php include 'inc/session.php'; 
    $userid = $users['id'];
    $username = $users['name'];
?>
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
                            <div class='float-left'>
                                <h4><mark>Check detail</mark> Please check your order.</h4>
                                <br>
                                <div class="card bg-light mb-3" style="max-width: 27rem;">
                                    <div class="card-header">
                                        <h3><strong><?php echo $movie_name ?></strong></h3>
                                    </div>
                                    <div class="card-body">
                                        <br><img src="admin/images/movie/<?php echo $movie_photo ?>" width="70">
                                        <br><br><h6 class="card-text"><?php echo $datetime ?><br><?php echo $movie_price_per_tic ?><br><?php echo $theater_name ?></h6>
                                        <h6 class="card-text">order by : <?php echo $username ?></h6><br>
                                        <form method="post" action="res.php?ID=<?php echo $id; ?>">
                                            <button type="submit" class="btn btn-danger" name="reservation" id="reservation" >buy now</button><br><br>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- end section -->




        <?php include('inc/footer.php') ?>
    </div>
    <?php include('inc/homescript.php') ?>

</body>

</html>