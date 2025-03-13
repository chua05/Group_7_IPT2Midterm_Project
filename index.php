<?php
  include('database/database.php');
  include('partials/header.php');
  include('partials/sidebar.php');



  $sql = "SELECT * FROM music_artists";

  if (!empty($_GET['search'])) {
      $search = $_GET['search'];
      $sql = "SELECT * FROM music_artists WHERE nam LIKE '%$search%' OR genre LIKE '%$search%' OR country LIKE '%$search%' OR debut_year LIKE '%$search%' OR record_label LIKE '%$search%'";
  }
  
  $music_artists = $conn->query($sql);  
  $status = '';
  if (isset($_SESSION['status'])) {
    $status = $_SESSION['status'];
    unset($_SESSION['status']);
  }
?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Music Artist</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <h5 class="card-title">Artists</h5>
                </div>
                <div>
                <button class="btn btn-primary btn-sm mt-4 mx-2" data-bs-toggle="modal" data-bs-target="#addMovieModal">Add Artist</button>
                </div>
              </div>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Artist Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Country</th>
                    <th scope="col">Debut Year</th>
                    <th scope="col">Record Label</Label></th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
          

                <?php
                $counter = 1;
                if ($music_artists->num_rows > 0): ?>
                  <?php while ($row = $music_artists->fetch_assoc()): ?>
                    <tr>
                      <td><?php echo $counter++; ?></td>
                      <td><?php echo $row['nam']; ?></td>
                      <td><?php echo $row['genre']; ?></td>
                      <td><?php echo $row['country']; ?></td>
                      <td><?php echo $row['debut_year']; ?></td>
                      <td><?php echo $row['record_label']; ?></td>
                      <td class="d-flex justify-content-center">
                        <!-- Edit Button -->
                        <button class="btn btn-success btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['artist_id']; ?>">Edit</button>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal<?php echo $row['artist_id']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Edit Artist Info</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="database/update.php" method="POST">
                                <div class="modal-body">
                                  <input type="hidden" name="artist_id" value="<?php echo $row['artist_id']; ?>">
                                  <div class="mb-3">
                                    <label class="form-label">nam</label>
                                    <input type="text" name="nam" class="form-control" value="<?php echo $row['nam']; ?>" required>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">genre</label>
                                    <input type="text" name="genre" class="form-control" value="<?php echo $row['genre']; ?>" required>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">country</label>
                                    <input type="text" name="country" class="form-control" value="<?php echo $row['country']; ?>" required>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">debut_year</label>
                                    <input type="year" name="debut_year" class="form-control" value="<?php echo $row['debut_year']; ?>" required>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">record_label</label>
                                    <input type="text" name="record_label" class="form-control" value="<?php echo $row['record_label']; ?>" required>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>


                            <!-- View Button -->
                            <button class="btn btn-primary btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#ViewModal<?php echo $row['artist_id']; ?>">View</button>

                            <!-- View Modal -->
                            <div class="modal fade" id="ViewModal<?php echo $row['artist_id']; ?>" tabindex="-1" aria-labelledby="ViewModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">View Artist Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                  <div class="mb-3">
                                    <p><strong>artist_id#:</strong></p>
                                    <input type="text" class="form-control" value="<?php echo $counter -1 ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <p><strong>nam:</strong></p>
                                    <input type="text" class="form-control" value="<?php echo $row['nam']; ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <p><strong>genre:</strong></p>
                                    <input type="text" class="form-control" value="<?php echo $row['genre']; ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <p><strong>country:</strong></p>
                                    <input type="text" class="form-control" value="<?php echo $row['country']; ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <p><strong>debut_year:</strong></p>
                                    <input type="year" class="form-control" value="<?php echo $row['debut_year']; ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <p><strong>record_label:</strong></p>
                                    <input type="text" class="form-control" value="<?php echo $row['record_label']; ?>" disabled>
                                  </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>


                        <!-- Delete Button -->
                        <button class="btn btn-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $row['artist_id']; ?>">Delete</button>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal<?php echo $row['artist_id']; ?>" data-bs-backdrop="static" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-body text-center">
                                <h1 class="text-danger" style="font-size: 50px"><strong>!</strong></h1>
                                <h5>Are you sure you want to delete this book?</h5>
                                <h6>This action cannot be undone.</h6>
                              </div>
                              <div class="modal-footer d-flex justify-content-center">
                                <form action="database/delete.php" method="POST">
                                  <input type="hidden" name="artist_id" value="<?php echo $row['artist_id']; ?>">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php endwhile; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="6" class="text-center">No Artist found</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

                        <!-- Create "Add Artist" Modal -->
                        <div class="modal fade" id="addMovieModal" tabindex="-1" aria-labelledby="addMovieLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <form action="database/create.php" method="POST">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Add Artist</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <div class="mb-3">
                                  <label class="form-label">nam</label>
                                  <input type="text" name="nam" id="nam" class="form-control" placeholder="Enter nam" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">genre</label>
                                <input type="text" name="genre" id="genre" class="form-control" placeholder="Enter genre"required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">country</label>
                                <input type="text" name="country" id="country" class="form-control" placeholder="Enter country"required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">debut_year</label>
                                <input type="year" name="debut_year" id="debut_year" class="form-control" placeholder="Enter debut_year"required>
                              </div><div class="mb-3">
                                <label class="form-label">record_label</label>
                                <input type="year" name="record_label" id="record_label" class="form-control" placeholder="Enter record_label"required>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save Artist</button>
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>


<?php include('partials/footer.php'); ?>
