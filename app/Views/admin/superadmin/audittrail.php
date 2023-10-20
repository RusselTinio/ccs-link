<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CCSLINK</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('style/vendors/feather/feather.css')?>">
  <link rel="stylesheet" href="<?= base_url('style/vendors/ti-icons/css/themify-icons.css')?>">
  <link rel="stylesheet" href="<?= base_url('style/vendors/css/vendor.bundle.base.css')?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('style/css/modal.css')?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('style/css/vertical-layout-light/style.css')?>">
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?= $this->include('admin/superadmin/template') ?> 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">List of Jobs</p>
                  
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>User Id</th>
                          <th>User name</th>
                          <th>Activity</th>
                          <th>Time Stamp</th>
                        </tr>  
                      </thead>
                      <tbody>
                          <?php foreach ($auditData as $data): ?>
                        <tr>
                          <td><?= $data['userId'] ?></td>
                          <td><?= $data['username'] ?></td>
                          <td><?=  $data['activity']?></td>
                          <td><?= $data['timestamp']?></td>
                         </tr>
                          <?php endforeach; ?>
                      </tbody>
                    </table>
                    <br>
                   
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
  <script src="<?= base_url('style/vendors/js/vendor.bundle.base.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('style/vendors/chart.js/Chart.min.js') ?>"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('style/js/off-canvas.js') ?>"></script>
  <script src="<?= base_url('style/js/hoverable-collapse.js') ?>"></script>
  <script src="<?= base_url('style/js/template.js') ?>"></script>
  <script src="<?= base_url('style/js/settings.js') ?>"></script>
  <script src="<?= base_url('style/js/todolist.js') ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="style/js/chart.js"></script>
</body>

</html>
