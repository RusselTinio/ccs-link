<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CCSLINK</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('style/vendors/feather/feather.css') ?>">
  <link rel="stylesheet" href="<?= base_url('style/vendors/ti-icons/css/themify-icons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('style/vendors/css/vendor.bundle.base.css') ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('style/vendors/datatables.net-bs4/dataTables.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?= base_url('style/vendors/ti-icons/css/themify-icons.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('style/js/select.dataTables.min.css') ?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=  base_url('style/css/vertical-layout-light/style.css')?>">
  <!-- endinject -->
  
</head>
<body>
  <div class="container-scroller">
     <!-- partial:../../partials/_navbar.html -->
     <?= $this->include('admin/superadmin/template') ?> 
      <!-- partial -->
     
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Dashboard</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Line chart</h4>
                  <canvas id="lineChart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bar chart</h4>
                  <canvas id="barChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Area chart</h4>
                  <canvas id="areaChart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Doughnut chart</h4>
                  <canvas id="doughnutChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pie chart</h4>
                  <canvas id="pieChart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Scatter chart</h4>
                  <canvas id="scatterChart"></canvas>
                </div>
              </div>
            </div>
          </div>
         

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html
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
  <!-- End custom js for this page-->
</body>

</html>

