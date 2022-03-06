<?php include 'inc/session.php'; ?>
<?php include 'inc/header.php'; ?>
<?php
$id = $_GET['GetID'];
$query = "SELECT * FROM movie WHERE id = '$id'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {

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
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body"><center>
                                    <h2>Are you sure you want to delete the <strong><?php echo $name ?></strong>?</h2><br>
                                    <img src="images/movie/<?php echo $photo ?>" width="200"><br><br>

                                    <a href='movieall.php'><button type='button' class='btn btn-dark'>cancel</button></a>
                                    <a href='moviedel.php?GetID=<?php echo $id ?>'><button type='submit' class='btn btn-danger'>delete</button></a>
                                </center></div>
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