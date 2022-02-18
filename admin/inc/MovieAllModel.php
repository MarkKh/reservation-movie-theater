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
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">All Movie</p>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="display expandable-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Duration</th>
                                            <th>Language</th>
                                            <th>Price</th>
                                            <th>Tool</th>
                                        </tr>
                                    <tbody>

                                        <?php
                                        $sql = "SELECT * FROM movie $where";
                                        $query = $conn->query($sql);

                                        while ($row = $query->fetch_assoc()) {
                                            $id = $row['id'];
                                            echo "
                                                    <tr>
                                                    <td>" . $row['id'] . "</td>
                                                    <td>
                                                        <div class='nav-profile'>
                                                            <img src='images/movie/" . $row['photo'] . "' width='70px'>                                                        
                                                            <a href='movieinfo.php?GetID=$id'><input type='button' value='edit' class='btn btn-darkgray btn-xs view_data' /></a>
                                                        <div>
                                                    </td>
                                                    <td>" . $row['name'] . "</td>
                                                    <td>" . $row['duration'] . "</td>
                                                    <td>" . $row['languages'] . "</td>
                                                    <td>" . $row['price_per_tic'] . "</td>
                                                    <td>
                                                            <a href='movieinfo.php?GetID=$id'><input type='button' value='info' class='btn btn-warning btn-xs view_data' /></a>
                                                            <a href='movieedit.php?GetID=$id'><input type='button' value='update' class='btn btn-primary btn-xs edit_data' /></a>
                                                            <a href='moviedel.php?delID=$id'><input type='button' value='delete' class='btn btn-danger btn-xs delete_data' /></a>
                                                          
                                                    </td>
                                                    </tr>
                                                ";
                                        }
                                        ?>




                                    </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>