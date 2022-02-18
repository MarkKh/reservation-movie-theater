<?php include 'inc/session.php'; ?>
<?php include 'inc/header.php'; ?>
<?php
    $id = $_GET['GetID'];
    $query = "SELECT * FROM movie WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)){

        $name = $row['name'];
        $description = $row['description'];
        $director = $row['director'];
        $duration = $row['duration'];
        $languages = $row['languages'];
        $price_per_tic = $row['price_per_tic'];
        $trailers = $row['trailers'];
        $category = $row['category'];
        $photo = $row['photo'];
    }
?>

<body>
    <div class="container-scroller">
        <?php include 'inc/navbar.php'; ?>


        <div class="container-fluid page-body-wrapper">
            <?php include 'inc/sidebar.php'; ?>
            <div class="main-panel">

                <!-- write on this -->
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Update Movie</h4>
                                        <br>
                                        <form class="forms-sample" action="m_edit.php?ID=<?php echo $id; ?>" method="post">
                                            <div class="form-group">
                                                <label for="name">Movie Name</label>
                                                <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" id="description" name="description" ><?php echo $description; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="director">Director</label>
                                                <input type="text" class="form-control" name="director" id="director" value="<?php echo $director; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="duration">Duration</label>
                                                <input type="text" class="form-control" name="duration" id="duration" value="<?php echo $duration; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="languages">Languages</label>
                                                <input type="text" class="form-control" name="languages" id="languages" value="<?php echo $languages; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="price_per_tic">Price per Ticket</label>
                                                <input type="text" class="form-control" name="price_per_tic" id="price_per_tic" value="<?php echo $price_per_tic; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="trailers">Trailers</label>
                                                <textarea type="text" class="form-control" name="trailers" id="trailers" ><?php echo $trailers; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <input type="text" class="form-control" name="category" id="category" value="<?php echo $category; ?>">
                                            </div>


                                            <button type="submit" class="btn btn-primary mr-2" name="update">Update</button>
                                            <button class="btn btn-light">Cancel</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- write on this -->

                <?php include 'inc/footer.php'; ?>
            </div>
        </div>

    </div>


    <?php include 'inc/scriptonhome.php'; ?>

</body>

</html>