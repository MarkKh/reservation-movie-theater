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
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card tale-bg">
                                <div class="card-people mt-auto">
                                    <img src="images/admin/people.png" alt="people">
                                    <div class="weather-info">
                                        <div class="d-flex">

                                            <div class="ml-2">
                                                <h2>Welcome Admin</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin transparent">
                            <div class="row">
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <h4 class="mb-4">Total Movie</h4>

                                            <?php
                                            $sql = "SELECT * FROM movie";
                                            $query = $conn->query($sql);

                                            echo "<p class='fs-30 mb-2'>" . $query->num_rows . "</p>";
                                            ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <h4 class="mb-4">Total Theater</h4>

                                            <?php
                                            $sql = "SELECT * FROM theater";
                                            $query = $conn->query($sql);

                                            echo "<p class='fs-30 mb-2'>" . $query->num_rows . "</p>";
                                            ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                                    <div class="card card-light-blue">
                                        <div class="card-body">
                                            <h4 class="mb-4">Total User</h4>

                                            <?php
                                            $sql = "SELECT * FROM users";
                                            $query = $conn->query($sql);

                                            echo "<p class='fs-30 mb-2'>" . $query->num_rows . "</p>";
                                            ?>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 stretch-card transparent">
                                    <div class="card card-light-danger">
                                        <div class="card-body">
                                            <h4 class="mb-4">Total Screening</h4>

                                            <?php
                                            $sql = "SELECT * FROM show_movie";
                                            $query = $conn->query($sql);

                                            echo "<p class='fs-30 mb-2'>" . $query->num_rows . "</p>";
                                            ?>
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