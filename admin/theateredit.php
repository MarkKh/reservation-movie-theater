<?php include 'inc/session.php'; ?>
<?php include 'inc/header.php'; ?>
<?php
    $id = $_GET['GetID'];
    $query = "SELECT * FROM theater WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)){

        $name = $row['name'];
        $seats_no = $row['seats_no'];

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
                                    <h3 class="card-title">Update Theater</h3>
                                    <br>
                                    <form class="forms-sample" action="t_edit.php?ID=<?php echo $id; ?>" method="post" name="forms">
                                        <div class="form-group">
                                            <label for="name">Theater Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label for="seats_no">seats</label>
                                            <input type="text" class="form-control" name="seats_no" id="seats_no" value="<?php echo $seats_no; ?>" >
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2" name="update">update</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
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