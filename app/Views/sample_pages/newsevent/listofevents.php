
<?php if(session()->getFlashdata('success')) :?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
   <?= session()->getFlashdata('success') ?>
    <button button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php endif; ?>



  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo.png" alt="logo"/></a>

      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile"/>
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
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2"></p>
          <div class="color-tiles mx-0 px-4">
            
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="" href="#" id="profile">
                   <img src="images/faces/face28.jpg" alt="image"/>
                   <br>
                   <span class="menu-title" id="profile1">Admin 1</span>
                 </a>
                 </li>
          <li class="nav-item">
            <a class="nav-link" href="forecast.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Forecast</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listofusers.html">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">List of Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listofjobs.html">
              <i class="icon-briefcase menu-icon"></i>
              <span class="menu-title">List of Jobs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listofevents.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">List of Events</span>
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
                  <p class="card-title mb-0">List of Events</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Icon</th>
                          <th>Title Events</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                                <img src="../../images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td>Title of Event</td>
                          <td>hierhgoirhgoirwhgiwrh</td>
                          <td class="font-weight-medium"><div class="badge badge-success">Active</div></td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                  <img src="../../images/faces/face1.jpg" alt="image"/>
                            </td>
                            <td>Title of Event</td>
                            <td>hierhgoirhgoirwhgiwrh</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Active</div></td>
                          </tr>
                          <tr>
                            <td class="py-1">
                                  <img src="../../images/faces/face1.jpg" alt="image"/>
                            </td>
                            <td>Title of Event</td>
                            <td>hierhgoirhgoirwhgiwrh</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Active</div></td>
                          </tr>
                          <tr>
                            <td class="py-1">
                                  <img src="../../images/faces/face1.jpg" alt="image"/>
                            </td>
                            <td>Title of Event</td>
                            <td>hierhgoirhgoirwhgiwrh</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Active</div></td>
                          </tr>
                          <tr>
                            <td class="py-1">
                                  <img src="../../images/faces/face1.jpg" alt="image"/>
                            </td>
                            <td>Title of Event</td>
                            <td>hierhgoirhgoirwhgiwrh</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Active</div></td>
                          </tr>
                          <tr>
                            <td class="py-1">
                                  <img src="../../images/faces/face1.jpg" alt="image"/>
                            </td>
                            <td>Title of Event</td>
                            <td>hierhgoirhgoirwhgiwrh</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Active</div></td>
                          </tr>
                        
                      </tbody>
                    </table>
                    <br>
                    <button type="button" class="btn btn-danger btn-icon-text" id="add">
                        <i class="ti-upload btn-icon-prepend"></i>                                                    
                        Add
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  


