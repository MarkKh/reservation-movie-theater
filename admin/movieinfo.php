<?php include 'inc/session.php'; ?>
<?php include 'inc/header.php'; ?>
<?php
$id = $_GET['GetID'];
$query = "SELECT * FROM movie WHERE id = '$id'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
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
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h2><strong><?php echo $name ?> : Details</strong></h2><br>

                            <p><b>Director</b> : <?php echo $director ?></p>
                            <p><b>Duration</b> : <?php echo $duration ?></p>
                            <p><b>Languages</b> : <?php echo $languages ?></p>
                            <p><b>Price per Ticket</b> : <?php echo $price_per_tic ?></p>
                            <p><b>Category</b> : <?php echo $category ?></p>
                            <p><b>Description</b> : <?php echo $description ?></p><br>
                            <div class="row">
                                <?php echo $trailers ?><br> &nbsp;&nbsp;&nbsp;
                                <img src='images/movie/<?php echo $photo ?>' width="200px">
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