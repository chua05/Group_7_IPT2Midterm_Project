<?php
  include('partials\header.php');
  include('partials\sidebar.php');
  include('database/database.php');


  // Your PHP BACK CODE HERE

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Music_Artist</h1>
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
                  <h5 class="card-title">Default Table</h5>
                </div>
                <div>
                  <button class="btn btn-primary btn-sm mt-4 mx-3">Add Artist</button>
                </div>
              </div>
              
              

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">artist_id</th>
                    <th scope="col">name</th>
                    <th scope="col">genre</th>
                    <th scope="col">country</th>
                    <th scope="col">debut_year</th>
                    <th scope="col">profile_image</th>
                    <th scope="col">profile_image</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Taylor Swift</td>
                    <td>Pop</td>
                    <td>USA</td>
                    <td>2006</td>
                    <td>taylor_swift.jpg</td>
                    <td>Republic Records</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Ed Sheeran</td>
                    <td>Pop</td>
                    <td>USA</td>
                    <td>2011</td>
                    <td>ed_sheeran.png</td>
                    <td>Atlantic Records</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>BTS</td>
                    <td>K-pop</td>
                    <td>South Korea</td>
                    <td>2013</td>
                    <td>bts_group.jpeg</td>
                    <td>BigHit Entertainment</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Adele</td>
                    <td>Soul</td>
                    <td>UK</td>
                    <td>2008</td>
                    <td>adele_profile.jpg</td>
                    <td>Columbia Records</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Billie Eilish</td>
                    <td>Pop</td>
                    <td>America</td>
                    <td>2015</td>
                    <td>billie_eilish.jpg</td>
                    <td>Interscope Records</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Olivia Rodrigo</td>
                    <td>Pop</td>
                    <td>America</td>
                    <td>2015</td>
                    <td>olivia_rodrigo.jpg</td>
                    <td>Geffen Records</td>              
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Sabrina Carpenter</td>
                    <td>Pop Rock</td>
                    <td>America</td>
                    <td>2014</td>
                    <td>sabrina_carpenter.jpg</td>
                    <td>Island Records</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Drake</td>
                    <td>Rapper</td>
                    <td>Canadian</td>
                    <td>2006</td>
                    <td>drake_image.jpg</td>
                    <td>OVO Sound Record Label</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Dua Lipa</td>
                    <td>Dance Pop</td>
                    <td>Albanian</td>
                    <td>2015</td>
                    <td>dua_lipa.jpg</td>
                    <td>Warner Records</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>Miley Cyrus</td>
                    <td>Pop Rock</td>
                    <td>America</td>
                    <td>2007</td>
                    <td>miley_cyrus.jpg</td>
                    <td>Columbia Records</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
            <div class="mx-4">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div>
          </div>

        </div>

        
      </div>

      <!-- Modal -->
      <div class="modal fade" id="editInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editInfoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="editInfoLabel">Employee Information</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?php
include('partials\footer.php');
?>