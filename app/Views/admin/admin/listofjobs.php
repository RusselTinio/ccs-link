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
    <?= $this->include('admin/admin/template') ?> 
   
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
                        <th>Image</th>
                          <th>Jobs</th>
                          <th>Company Name</th>
                          <th>Description</th>
                          <th>Job Category</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                          <?php foreach ($jobData as $data): ?>
                        <tr>
                            <td class="py-1">
                                <img src="<?= base_url('upload/jobs/') .$data['job_cover']?>" alt="image"/>
                          </td>
                            <td><?= $data['job_title'] ?></td>
                            <td><?= $data['job_company']?></td>
                            <td>
                              <p><?= $data['job_description']?></p>
                            </td>
                            <td><?=  $data['job_category']?></td>
                            <td><?= $data['date']?></td>
                            <?php if ($data['approval'] == 'approved'): ?>
                          <td class="font-weight-medium"><div class="badge badge-primary"><?=  $data['approval']?></div></td>
                              <?php elseif($data['approval'] == 'pending'): ?>
                                <td class="font-weight-medium"><div class="badge badge-warning"><?=  $data['approval']?></div></td>
                              <?php elseif($data['approval'] == 'reject'): ?>
                                <td class="font-weight-medium"><div class="badge badge-danger"><?=  $data['approval']?></div></td>     
                            <?php endif; ?>
                          <td><a href="#approve" class="approve_job" data-job-id="<?= $data['id']?>" data-toggle="modal">
                            <button type="button" class="btn btn-dark btn-sm">Approve</button>
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
         <!--Approve-->
         <div id="approve" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="formbold-event-wrapper">
              <div class="header">
                <h3>Job Title</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                
                <span>Do you want to approve this job?</span>
              </div><div class="modal-footer justify-content-center"> 
                <form action="<?= base_url('AdminController/AdminFolder/JobController/approval')?>" method="post">
                  <input type="hidden" name="id" id="id">
                  <select name="approval" id=""  class="formbold-form-input formbold-form-file mb-4">
                    <option value="" disabled selected>Select</option>
                    <option value="approved">Approve</option>
                    <option value="reject">Reject</option>
                  </select>
                  <div>
                    <button type="submit" class="btn btn-green">Enter</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  </div>

                </form>
                
               
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js' integrity='sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==' crossorigin='anonymous'></script>
  <script src="<?= base_url('script/Script.js')?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="style/js/chart.js"></script>
</body>

</html>
