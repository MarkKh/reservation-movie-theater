<?php
if (isset($_SESSION['error'])) {
    echo "
            <div class='content-wrapper'>
                <div class='row'>
                    <div class='col-md-6 mb-4 mb-lg-0 stretch-card transparent'>
                        <div class='card card-light-blue'>
                            <div class='card-body'>
                                <h3 class='mb-4'>error</h3>
                                " . $_SESSION['error'] . "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          ";
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    echo "
          <div class='content-wrapper'>
          <div class='row'>
              <div class='col-md-6 mb-4 mb-lg-0 stretch-card transparent'>
                  <div class='card card-light-blue'>
                      <div class='card-body'>
                          <h3 class='mb-4'>success</h3>
                          " . $_SESSION['success'] . "
                      </div>
                  </div>
              </div>
          </div>
      </div>
          ";
    unset($_SESSION['success']);
}
?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Screening</h3>
                    <br>
                    <form class="forms-sample" action="screeningadd.php" method="post" name="screening">
                        <div class="form-group">
                            <label for="movie_id" class="col-sm-3 control-label">Select Movie</label>

                            <div class="col-sm-9">
                                <select class="form-control" name="movie_id" id="movie_id" required="">
                                    <option value="" selected="" disabled=""> Please Select Movie.</option>
                                    <?php
                                    $sql = "SELECT * FROM movie order by id asc ";
                                    $qry = $conn->query($sql);
                                    while ($row = $qry->fetch_array()) :
                                    ?>
                                        <option value="<?php echo $row['id'] ?>"><?php echo ucwords($row['name']) ?></option>
                                    <?php endwhile;  ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="theater_id" class="col-sm-3 control-label">Select Theater</label>

                            <div class="col-sm-9">
                                <select class="form-control" name="theater_id" id="theater_id" required="">
                                    <option value="" selected="" disabled=""> Please Select Theater.</option>
                                    <?php
                                    $sql = "SELECT * FROM theater order by id asc ";
                                    $qry = $conn->query($sql);
                                    while ($row = $qry->fetch_array()) :
                                    ?>
                                        <option value="<?php echo $row['id'] ?>"><?php echo ucwords($row['name']) ?></option>
                                    <?php endwhile;  ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="datetime" class="col-sm-3 control-label">Select Date-Time</label><br>&nbsp;&nbsp;
                            <input type="datetime-local" id="datetime" name="datetime">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2" name="screening">submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">All Screening</p>

                    <?php
                    if (isset($_POST['search'])) {
                        $search = $_POST['search'];
                        $sql = "SELECT show_movie.id,movie.name as mname,theater.name as tname,show_movie.datetime FROM show_movie
                        inner join movie on movie.id = show_movie.movie_id
                        inner join theater on theater.id = show_movie.theater_id 
                        WHERE movie.name LIKE '%$search%' order by show_movie.id";
                    } else {
                        $sql = "SELECT show_movie.id,movie.name as mname,theater.name as tname,show_movie.datetime FROM show_movie
                        inner join movie on movie.id = show_movie.movie_id
                        inner join theater on theater.id = show_movie.theater_id $where order by show_movie.id";
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
                                            <th>Movie</th>
                                            <th>Theater</th>
                                            <th>Date-Time</th>
                                            <th>Tool</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        while ($row = $query->fetch_assoc()) {
                                            $id = $row['id'];
                                            echo "
                                                    <tr>
                                                    <td>" . $row['mname'] . "</td>
                                                    <td>" . $row['tname'] . "</td>
                                                    <td>" . $row['datetime'] . "</td>
                                                    <td>
                                                    <a href='screeningcheckdel.php?GetID=$id'><input type='button' value='delete' class='btn btn-danger btn-xs delete_data' /></a>
                                                    </td>
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