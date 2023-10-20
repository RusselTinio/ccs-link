<?= $this->include('admin/admin/header') ?>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?= $this->include('admin/admin/template')?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">List of Mentors</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Suffix</th>
                          <th>Username</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php foreach($mentorData as $data):?>
                        <tr>
                          <td><?= $data['firstname']?></td>
                          <td><?= $data['lastname']?></td>
                          <td><?= $data['suffix']?></td>
                          <td><?= $data['username']?></td>
                          <?php if($data['approval'] == 'reject'):?>
                            <td class="font-weight-medium"><div class="badge badge-danger"><?= $data['approval']?></div></td>
                          <?php elseif($data['approval'] == 'pending'):?>
                            <td class="font-weight-medium"><div class="badge badge-warning"><?= $data['approval']?></div></td>
                          <?php else:?>
                            <td class="font-weight-medium"><div class="badge badge-success"><?= $data['approval']?></div></td>
                          <?php endif;?>
                            <td>
                              <a href="<?= base_url('AdminController/AdminFolder/ListofuserController/mentoringCheck/').$data['userId']?>" class="badge badge-dark"> Show All</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
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

<?= $this->include('admin/admin/footer')?>

</html>
