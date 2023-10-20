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
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">List of Users</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          
                          <th>Last Name</th>
                          <th>First Name</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php foreach($admin as $data): ?>
                          <tr>
                            <td><?= $data['lastname'] ?></td>
                            <td><?= $data['firstname'] ?></td>
                            <td><?= $data['role'] ?></td>
                            <td><label class="badge badge-primary"><?=  $data['status']?></label></td>
                            <td><a href="#block" data-toggle="modal" class="admin-deac" data-admin-id="<?= $data['id']?>">
                              <button type="button" class="btn btn-dark btn-sm"  >Deactivate</button>
                              </a>
                            </td>
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
         <!--BLOCK USER-->
         <div id="block" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="modal-header flex-column">					
                <h4 class="modal-title w-100">Deactivate Admin</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <p>Do you really want to Deactivate this Admin?</p>
              </div>
              <div class="modal-footer justify-content-center">
                <form action="<?= base_url('AdminController/SuperAdminFolder/SuperAdminController/delete')?>" method="post">
                  <input type="hidden" name="id" id="id">
                  <button type="submit" class="btn btn-danger" id="deactivateButton" >Deactivate</button>
                </form>
                
                <a class="btn btn-secondary" data-dismiss="modal">Cancel</a>
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js' integrity='sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==' crossorigin='anonymous'></script>
  <script src="<?= base_url('script/Script.js')?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="style/js/chart.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
