<?php include 'inc/session.php'; ?>
<?php include 'inc/header.php'; ?>
<?php
$id = $_GET['GetID'];
$query = "SELECT * FROM show_movie WHERE id = '$id'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
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
                                    <h2>Are you sure you want to delete the show?</h2><br>

                                    <a href='screening.php'><button type='button' class='btn btn-dark'>cancel</button></a>
                                    <a href='screeningdel.php?delID=<?php echo $id ?>'><button type='submit' class='btn btn-danger'>delete</button></a>
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