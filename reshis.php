<?php include 'inc/session.php';
$userid = $users['id'];
$username = $users['name'];
?>
<?php include('inc/header.php') ?>


<body>
    <div id="wrapper">
        <?php include('inc/navbar2.php') ?>

        <section class="hero">
            <div class="magnifier grd3"></div>
            <div class="container">
                <div class="hero-desc">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><mark>hello</mark> Reservation History</h4><br>
                            <img src="images/basket.png" width="300">

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- end section -->


        <section id="first-section" class="section lb">
            <div class="container">


                <div class="row">
                    <div class="col-md-12">
                        <?php

                        $query = "SELECT users.name as usersname, 
                        show_movie.id as showid,
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
                        FROM reservation
                        inner join users on reservation.user_id = users.id
                        inner join show_movie on reservation.show_id = show_movie.id
                        inner join movie on movie.id = show_movie.movie_id
                        inner join theater on theater.id = show_movie.theater_id
                        where reservation.user_id = '$userid' ";
                        $result = mysqli_query($conn, $query);
                        while ($row = $result->fetch_assoc()) {
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

                            echo "  <center><div class='card bg-light mb-3' style='max-width: 27rem;'>
                        
                                        <div class='card-header'>
                                            <h3><strong> $movie_name</strong></h3>
                                        </div>
                                        <div class='card-body'>
                                            <br><img src='admin/images/movie/$movie_photo' width='70'>
                                            <br><br><h6 class='card-text'>$datetime<br>$movie_price_per_tic<br>$theater_name</h6>
                                            <h6 class='card-text'>order by : $username</h6><br>
                                        </div>
                                </div></center>
                                        ";
                        }
                        ?>
                    </div>
                </div>

            </div><!-- end container -->
        </section><!-- end section -->




        <?php include('inc/footer.php') ?>
    </div>
    <?php include('inc/homescript.php') ?>

</body>

</html>