<section class='section lb'>
    <div class='container'>
        <div class='section-title text-center'>
            <h4>Now Showing</h4>
        </div><!-- end section-title -->

        <div id='works_01' class='owl-carousel owl-theme owl-style-02'>

            <?php
            $sql = 'SELECT show_movie.id as id,show_movie.datetime as dt,movie.name as mname,movie.photo as mphoto,movie.duration as md,movie.price_per_tic as price,movie.category as mcat,theater.name as tname FROM show_movie
            inner join movie on movie.id = show_movie.movie_id
            inner join theater on theater.id = show_movie.theater_id ';
            $query = $conn->query($sql);

            while ($row = $query->fetch_assoc()) {
                $id = $row['id'];
                echo "
                <div class='owl-work-item'>
                    <div class='portfolio-ver-01'>
                        <div class='media-element'>
                            <img src='admin/images/movie/" . $row['mphoto'] . "' alt='' class='img-fluid'>
                        </div><!-- end media -->
                        <div class='portfolio-details'>
                            <h4><a href='#'>" . $row['mname'] . "</a></h4>
                            <p><strong>show time : </strong>" . $row['dt'] . "</p>
                            <p><strong>duration : </strong>" . $row['md'] . "</p>
                            <p><strong>theater : </strong>" . $row['tname'] . "</p>
                            <p><strong>category : </strong>" . $row['mcat'] . "</p>
                            <mark>total = " . $row['price'] . "</mark>
                        </div><!-- end details -->
                        <div class='portfolio-meta clearfix'>
                            <div class='float-left'>
                                <a href='movieinfo.php?GetID=$id'><button type='button' class='btn btn-warning'>info</button></a>
                            </div>
                            <div class='float-right'>
                                <a href='reservation.php?GetID=$id'><button type='button' class='btn btn-danger'>buy now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                                                
                ";
            }
            ?>








        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->