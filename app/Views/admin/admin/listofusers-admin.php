<?= $this->include('admin/admin/header')?>

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
                <a href="#restore-user" data-toggle="modal">
                  <button class="btn btn-primary btn-icon-text" id="add">
                    <i class="ti-archive btn-icon-prepend"></i>                                                    
                    Archives
                  </button>
                </a>
                  <p class="card-title mb-0">List of Users</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                        <th>id</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Suffix</th>
                          <th>Username</th>
                          <th>Status</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php foreach($userData as $data):?>
                        <tr>
                        <td><?= $data['id']?></td>
                          <td><?= $data['firstname']?></td>
                          <td><?= $data['lastname']?></td>
                          <td><?= $data['suffix']?></td>
                          <td><?= $data['username']?></td>
                            <td class="font-weight-medium"><div class="badge badge-success"><?= $data['status']?></div></td>
                         
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
          
          <form action="<?= base_url('AdminController/UserEdit/delete') ?>" method="POST" enctype="multipart/form-data">
          <div id="block" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="modal-header flex-column">					
                <h4 class="modal-title w-100">Deactivate User</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <p>Do you really want to Deactivate this user?</p>
                <input type="hidden" id="deacId" name="deacId">
              </div>
              
              <div class="modal-footer justify-content-center">
               
                
              <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-dark">Deactivate</button>
                </div>
              </div>
            </div>
          </div>
        </div> 
        </form>



        <div id="restore-user" class="modal fade" >
            <div class="modal-dialog modal-confirm">
              <div class="modal-content">
                <div class="header">					
                  <h4 class="modal-title w-100">Disabled User</h4>	
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <!--Table contents-->
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                        <th>First Name</th>
                          <th>Last Name</th>
                          <th>Suffix</th>
                          <th>Username</th>
                          <th>Status</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php foreach ($useDataArchive as $archi): ?>
                          <tr>
                          <td><?= $archi['firstname']?></td>
                          <td><?= $archi['lastname']?></td>
                          <td><?= $archi['suffix']?></td>
                          <td><?= $archi['username']?></td>
                            <td class="font-weight-medium"><div class="badge badge-success"><?= $archi['status']?></div></td>
                              <td>
                              <a href="<?= base_url('AdminController/UserEdit/restore/'.$archi['id'])?>" class="restore-job">
                                <button class="btn btn-primary btn-icon-text">
                                  <i class="ti-share-alt btn-icon-prepend"></i>                                                    
                                </button>
                              </a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                    <br>
                  </div>
                  <!--Table contents-->
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
