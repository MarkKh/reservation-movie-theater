<section class="content">
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
                        <h3 class="card-title">Add New Theater</h3>
                        <br>
                        <form class="forms-sample" action="theateradd.php" method="post" name="forms">
                            <div class="form-group">
                                <label for="name">Theater Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Theater Name" required>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2" name="addt">Submit</button>
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
                        <p class="card-title">All Theater</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Tool</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM theater $where";
                                            $query = $conn->query($sql);
                                            while ($row = $query->fetch_assoc()) {
                                                echo "
                                                    <tr>
                                                    <td>" . $row['id'] . "</td>
                                                    <td>" . $row['name'] . "</td>
                                                    <td>
                                                    
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