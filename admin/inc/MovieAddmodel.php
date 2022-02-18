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
                    <h3 class="card-title">Add New Movie</h4>
                        <br>
                        <form class="forms-sample" action="movieaddf.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Movie Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Movie Name">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" row="6" placeholder="Enter Movie Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="director">Director</label>
                                <input type="text" class="form-control" name="director" id="director" placeholder="Enter Movie Director">
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" class="form-control" name="duration" id="duration" placeholder="Enter Movie Duration">
                            </div>
                            <div class="form-group">
                                <label for="languages">Languages</label>
                                <input type="text" class="form-control" name="languages" id="languages" placeholder="Enter Movie Languages">
                            </div>
                            <div class="form-group">
                                <label for="price_per_tic">Price per Ticket</label>
                                <input type="text" class="form-control" name="price_per_tic" id="price_per_tic" placeholder="Enter Movie Price per Ticket">
                            </div>
                            <div class="form-group">
                                <label for="trailers">Trailers</label>
                                <input type="text" class="form-control" name="trailers" id="trailers" placeholder="Enter Movie Trailers">
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <input type="text" class="form-control" name="category" id="category" placeholder="Enter Movie Category">
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <span class="input-group-append">
                                    <input type="file" class="file-upload-browse btn btn-primary" id="photo" name="photo">
                                </span>
                            </div>


                            <button type="submit" class="btn btn-primary mr-2" name="addm">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>


