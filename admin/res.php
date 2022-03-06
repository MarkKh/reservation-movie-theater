<?php include 'inc/session.php'; ?>
<?php include 'inc/header.php'; ?>

<body>
    <div class="container-scroller">
        <?php include 'inc/navbar.php'; ?>


        <div class="container-fluid page-body-wrapper">
            <?php include 'inc/sidebar.php'; ?>
            <div class="main-panel">

                <!-- write on this -->
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">All Reservation</p>

                                    <?php
                                    if (isset($_POST['search'])) {
                                        $search = $_POST['search'];
                                        $sql = "SELECT reservation.id as resid,users.name as uname,movie.name as mname,show_movie.datetime as sdate from reservation
                                        inner join show_movie inner join movie on show_movie.id = reservation.show_id and movie.id = show_movie.movie_id
                                        inner join users on users.id = reservation.user_id
                                        WHERE movie.name LIKE '%$search%' order by show_movie.datetime";
                                    } else {
                                        $sql = "SELECT reservation.id as resid,users.name as uname,movie.name as mname,show_movie.datetime as sdate from reservation
                                        inner join show_movie inner join movie on show_movie.id = reservation.show_id and movie.id = show_movie.movie_id
                                        inner join users on users.id = reservation.user_id
                                        order by show_movie.datetime
                                        ";
                                    }
                                    $query = $conn->query($sql);
                                    ?>

                                    <form action="" method="post">
                                        <div class="input-group">
                                            <div class="form-outline">
                                                <input type="search" id="search" name="search" class="form-control" placeholder="Search by movie name" value="<?php echo @$_POST['search']; ?>" />
                                            </div> &nbsp;
                                            <button type="submit" class="btn btn-primary btn-rounded btn-icon">
                                                <i class="ti-search"></i>
                                            </button>
                                        </div>
                                    </form>

                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="display expandable-table" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>User</th>
                                                            <th>Movie</th>
                                                            <th>Date-Time</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

                                                        while ($row = $query->fetch_assoc()) {
                                                            $id = $row['resid'];
                                                            echo "
                                                    <tr>
                                                    <td>" . $row['uname'] . "</td>
                                                    <td>" . $row['mname'] . "</td>
                                                    <td>" . $row['sdate'] . "</td>
                                                    
                                                    </tr>
                                                ";
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'inc/footer.php'; ?>
            </div>
        </div>

    </div>
    <?php include 'inc/scriptonhome.php'; ?>

</body>

</html>