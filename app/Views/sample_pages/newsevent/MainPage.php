
<?php if(session()->getFlashdata('success')) :?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
   <?= session()->getFlashdata('success') ?>
    <button button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php endif; ?>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>

<h1> News list</h1>
<a href="<?= base_url('AdminController/NewsController/createNews') ?>" class="btn btn-primary">Add News</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">News Id</th>
            <th scope="col">News Title</th>
            <th scope="col">News Description</th>
            <th scope="col">News Date</th>
            <th scope="col">Cover</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($news as $new): ?>
            <tr>
                <th scope="row"><?= $new['id']; ?></th>
                <td><?= $new['news_title']; ?></td>
                <td><?= $new['news_desc']; ?></td>
                <td><?= $new['news_date']; ?></td>
                <td><img src="/uploads/<?= $new['news_image']; ?>" alt="" width="100"></td>
                <td><?= $new['Status']; ?></td>
                <td>
                    <a href="<?= base_url('AdminController/NewsController/editNews/') ?><?= $new['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="<?= base_url('AdminController/NewsController/deleteNews/') ?><?= $new['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
        <?php endforeach; ?>
    </tbody>
</table>

<h1> Archive</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">News Id</th>
            <th scope="col">News Title</th>
            <th scope="col">News Description</th>
            <th scope="col">News Date</th>
            <th scope="col">Cover</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($archi as $arc): ?>
            <tr>
                <th scope="row"><?= $arc['id']; ?></th>
                <td><?= $arc['news_title']; ?></td>
                <td><?= $arc['news_desc']; ?></td>
                <td><?= $arc['news_date']; ?></td>
                <td><img src="/uploads/<?= $arc['news_image']; ?>" alt="" width="100"></td>
                <td><?= $arc['Status']; ?></td>
                <td>
                    <a href="<?= base_url('AdminController/NewsController/restore/') ?><?= $arc['id']; ?>" class="btn btn-success">Restore</a>
                </td>
        <?php endforeach; ?>
    </tbody>
</table>


<h1> Events list</h1>
<a href="<?= base_url('AdminController/NewsController/createEvents') ?>" class="btn btn-primary">Add Event</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Event Id</th>
            <th scope="col">Event Title</th>
            <th scope="col">Event Description</th>
            <th scope="col">Event Date</th>
            <th scope="col">Event Time</th>
            <th scope="col">Cover</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($events as $event): ?>
            <tr>
                <th scope="row"><?= $event['id']; ?></th>
                <td><?= $event['events_title']; ?></td>
                <td><?= $event['events_desc']; ?></td>
                <td><?= $event['events_date']; ?></td>
                <td><?= $event['events_time']; ?></td>
                <td><img src="/uploads/<?= $event['events_image']; ?>" alt="" width="100"></td>
                <td><?= $event['events_status']; ?></td>
                <td>
                    <a href="<?= base_url('AdminController/NewsController/editEvents/') ?><?= $event['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="<?= base_url('AdminController/NewsController/deleteEvents/') ?><?= $event['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
        <?php endforeach; ?>
    </tbody>
</table>

<h1> Archive</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Event Id</th>
            <th scope="col">Event Title</th>
            <th scope="col">Event Description</th>
            <th scope="col">Event Date</th>
            <th scope="col">Event Time</th>
            <th scope="col">Cover</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($events_archi as $eve): ?>
            <tr>
                <th scope="row"><?= $eve['id']; ?></th>
                <td><?= $eve['events_title']; ?></td>
                <td><?= $eve['events_desc']; ?></td>
                <td><?= $eve['events_date']; ?></td>
                <td><?= $eve['events_time']; ?></td>
                <td><img src="/uploads/<?= $eve['events_image']; ?>" alt="" width="100"></td>
                <td><?= $eve['events_status']; ?></td>
                <td>
                    <a href="<?= base_url('AdminController/NewsController/restoreEvents/') ?><?= $eve['id']; ?>" class="btn btn-success">Restore</a>
                </td>
        <?php endforeach; ?>
    </tbody>
</table>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CCSLINK</title>
  <base href="/">
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/modal.css">

  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo " href="forecast.html"><img src="images/logo.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="forecast.html"><img src="images/logo1.png" alt="logo"/></a>

      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/admin.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#" id="profile">
              <i class="menu-icon"><img src="images/faces/admin.png"/></i>
               <span class="menu-title" id="profile1">Admin 1</span>
             </a>
             </li>
          <li class="nav-item">
            <a class="nav-link" href="forecast-admin.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Analytics</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listofusers-admin.html">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">List of Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listofjobs-admin.html">
              <i class="icon-briefcase menu-icon"></i>
              <span class="menu-title">List of Jobs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listofevents-admin.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">List of News and Events</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">List of News</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>News Title</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                      <?php foreach ($news as $new): ?>
            
       
                        <tr>
                          <td class="py-1" id="event">
                          <img src="/uploads/<?= $new['news_image']; ?>" alt="">
                          </td>
                          <td><?= $new['news_title']; ?></td>
                          <td>
                          <?= $new['news_desc']; ?>
                          </td>
                          <td><?= $new['news_date']; ?></td>
                          <td class="font-weight-medium"><div class="badge badge-success"><?= $new['Status']; ?></div></td>
                          <td>
                            <a href="<?= base_url('AdminController/NewsController/editNews/') ?><?= $new['id']; ?>" data-toggle="modal">
                            <button type="button" class="btn btn-dark btn-icon">
                              <i class="fa fa-edit btn-icon-append"></i>
                            </button>
                            </a>                               
                            <a href="<?= base_url('AdminController/NewsController/deleteNews/') ?><?= $new['id']; ?>" data-toggle="modal">
                              <button type="button" class="btn btn-dark btn-icon">
                                <i class="fa fa-trash btn-icon-append"></i>
                              </button>
                            </a>                                                                                 
                          </td>
                        </tr>
                        
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                    <br>
                    <a href="#add-news" data-toggle="modal">
                     <button class="btn btn-danger btn-icon-text" id="add">
                        <i class="ti-upload btn-icon-prepend"></i>                                                    
                        Add
                      </button>
                    </a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">List of Events</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Events</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1" id="event">
                                <img src="images/faces/event.jpg" alt="image"/>
                          </td>
                          <td>Title of Event</td>
                          <td>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt.</p>
                          </td>
                          <td>21 Sep 2018</td>
                          <td> 10:00am - 2:00pm</td>
                          <td class="font-weight-medium"><div class="badge badge-success">Active</div></td>
                          <td>
                            <a href="#edit-event" data-toggle="modal">
                            <button type="button" class="btn btn-dark btn-icon">
                              <i class="fa fa-edit btn-icon-append"></i>
                            </button>
                            </a>                               
                            <a href="#delete" data-toggle="modal">
                              <button type="button" class="btn btn-dark btn-icon">
                                <i class="fa fa-trash btn-icon-append"></i>
                              </button>
                            </a>                                                                                 
                          </td>
                        </tr>
                        
                          
                      </tbody>
                    </table>
                    <br>
                    <a href="#add-event" data-toggle="modal">
                     <button class="btn btn-danger btn-icon-text" id="add">
                        <i class="ti-upload btn-icon-prepend"></i>                                                    
                        Add
                      </button>
                    </a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <!--Modals-->
        <!--Edit News-->
        <div id="edit-news" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Edit News</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">

                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> News Title </label>
                    <input
                      type="text"
                      name="name"
                      id="name"
                      placeholder="Enter News Title"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="phone" class="formbold-form-label"> Description </label>
                    <input
                      type="text"
                      name="description"
                      id="description"
                      placeholder="Enter Description"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full formbold-px-3">
                      <div class="formbold-mb-5 w-full">
                        <label for="date" class="formbold-form-label"> Date </label>
                        <input
                          type="date"
                          name="date"
                          id="date"
                          class="formbold-form-input"
                        />
                      </div>                  
                    </div>            
                  </div>
                    <div class="formbold-mb-5">
                      <label for="upload" class="formbold-form-label">
                        Upload File (Image)
                      </label>
                      <input
                        type="file"
                        name="upload"
                        id="upload"
                        class="formbold-form-input formbold-form-file"
                      />
                    </div>
                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="button" class="btn btn-dark">Edit</button>
                                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>   
  
        <!--Edit Event-->
        <div id="edit-event" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Edit Event</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">

                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> Event Title </label>
                    <input
                      type="text"
                      name="name"
                      id="name"
                      placeholder="Enter Event Title"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="phone" class="formbold-form-label"> Description </label>
                    <input
                      type="text"
                      name="description"
                      id="description"
                      placeholder="Enter Description"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5 w-full">
                        <label for="date" class="formbold-form-label"> Date </label>
                        <input
                          type="date"
                          name="date"
                          id="date"
                          class="formbold-form-input"
                        />
                      </div>
                      
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                        <label for="time" class="formbold-form-label"> Time </label>
                        <input
                          type="time"
                          name="time"
                          id="time"
                          class="formbold-form-input"
                        />
                      </div>
                      </div>
            
                  </div>
                    <div class="formbold-mb-5">
                      <label for="upload" class="formbold-form-label">
                        Upload File (Image)
                      </label>
                      <input
                        type="file"
                        name="upload"
                        id="upload"
                        class="formbold-form-input formbold-form-file"
                      />
                    </div>
                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="button" class="btn btn-dark">Edit</button>
                                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>   
        <!--Delete-->
        <div id="delete" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="modal-header flex-column">					
                <h4 class="modal-title w-100">Are you sure?</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <p>Do you really want to delete these records?</p>
              </div>
              <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </div>
            </div>
          </div>
        </div> 
        <!--Add News-->
        <div id="add-news" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Add News</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">

                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> News Title </label>
                    <input
                      type="text"
                      name="name"
                      id="name"
                      placeholder="Enter News Title"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="phone" class="formbold-form-label"> Description </label>
                    <input
                      type="text"
                      name="description"
                      id="description"
                      placeholder="Enter Description"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full formbold-px-3">
                      <div class="formbold-mb-5 w-full">
                        <label for="date" class="formbold-form-label"> Date </label>
                        <input
                          type="date"
                          name="date"
                          id="date"
                          class="formbold-form-input"
                        />
                      </div>
                    </div>
                    
                    <div class="formbold-mb-5">
                      <label for="upload" class="formbold-form-label">
                        Upload File (Image)
                      </label>
                      <input
                        type="file"
                        name="upload"
                        id="upload"
                        class="formbold-form-input formbold-form-file"
                      />
                    </div>
                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="button" class="btn btn-dark">Add</button>
                                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--Add Event-->
        <div id="add-event" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Add Event</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">

                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> Event Title </label>
                    <input
                      type="text"
                      name="name"
                      id="name"
                      placeholder="Enter Event Title"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="phone" class="formbold-form-label"> Description </label>
                    <input
                      type="text"
                      name="description"
                      id="description"
                      placeholder="Enter Description"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5 w-full">
                        <label for="date" class="formbold-form-label"> Date </label>
                        <input
                          type="date"
                          name="date"
                          id="date"
                          class="formbold-form-input"
                        />
                      </div>
                      
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                        <label for="time" class="formbold-form-label"> Time </label>
                        <input
                          type="time"
                          name="time"
                          id="time"
                          class="formbold-form-input"
                        />
                      </div>
                      </div>
            
                  </div>
                    <div class="formbold-mb-5">
                      <label for="upload" class="formbold-form-label">
                        Upload File (Image)
                      </label>
                      <input
                        type="file"
                        name="upload"
                        id="upload"
                        class="formbold-form-input formbold-form-file"
                      />
                    </div>
                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="button" class="btn btn-dark">Add</button>
                                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>    

        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html 
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
            </div>
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            </div>
            <br>
            <br>
          </footer> 
        partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/chart.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
