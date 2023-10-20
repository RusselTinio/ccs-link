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
  <link rel="stylesheet" href="<?= base_url('style/css/form.css')?>">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <?= $this->include('admin/admin/template')?>
      <!-- partial -->
      <div class="main-panel">
        
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <a href="#add-project" data-toggle="modal">
                    <button class="btn btn-danger btn-icon-text" id="add">
                       <i class="ti-upload btn-icon-prepend"></i>                                                    
                       Add
                     </button>
                  </a>

                  <a href="#restore-fund" data-toggle="modal">
                  <button class="btn btn-primary btn-icon-text" id="add">
                    <i class="ti-archive btn-icon-prepend"></i>                                                    
                    Archives
                  </button>
                </a>
                  <p class="card-title mb-0">Donation</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php foreach($dons as $data):?>
                          <tr>
                            <td class="py-1" id="event">
                                  <img src="<?= base_url('upload/funds/').$data['donation_cover']?>" alt="image"/>
                            </td>
                            <td><?= $data['donation_title']?></td>
                            <td>
                              <p><?= $data['donation_desc']?></p>
                            </td>
                            <td><?= $data['donation_date']?></td>
                            <?php if($data['status'] == 'active'):?>
                            <td class="font-weight-medium"><div class="badge badge-success"><?= $data['status']?></div></td>
                            <?php endif;?>
                            <td>
                              <a href="#edit" data-toggle="modal" class="edit-donation"
                              data-donation-id = "<?= $data['id']?>"
                              data-donation-title = "<?= $data['donation_title']?>"
                              data-donation-date = "<?= $data['donation_date']?>"
                              data-donation-desc = "<?= $data['donation_desc']?>"
                              >
                              <button type="button" class="btn btn-dark btn-icon">
                                <i class="fa fa-edit btn-icon-append"></i>
                              </button>
                              </a>                               
                              <a href="#delete" data-toggle="modal" data-donation-id="<?= $data['id']?>" class="delete-donation">
                                <button type="button" class="btn btn-dark btn-icon">
                                  <i class="fa fa-trash btn-icon-append"></i>
                                </button>
                              </a>                                                                                 
                            </td>
                          </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                    
                  </div>
                  <br>
                 
                </div>
              </div>
            </div>
          </div>
          
        <!--Modals-->
        <!--Edit -->
        <form action="<?= base_url('AdminController/AdminFolder/donationController/updateDonation')?>" method="post" enctype="multipart/form-data">
        <div id="edit" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Edit Details</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                  <input type="hidden" name="id" id="id">
                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> Title </label>
                    <input
                      type="text"
                      name="title"
                      id="title"
                      placeholder="Enter News Title"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="description" class="formbold-form-label"> Description </label>
                    <textarea  name="description"
                      id="description"
                      placeholder="Enter Description"
                      class="formbold-form-input" 
                      cols="30" 
                      rows="10">
                    </textarea>
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
                        name="cover"
                        id="cover"
                        class="formbold-form-input formbold-form-file"
                      />
                    </div>
                    
                      
                      <div class="w-full formbold-px-3">               
                      </div>                     
                    </div>
                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-dark">Edit</button>
                                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>   
        </form>
        
  
        <!--Delete-->
        <form action="<?= base_url('AdminController/AdminFolder/DonationController/deletedonation')?>" method="post">
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
                  <input type="hidden" name="id" id="delete-id">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
                </div>
              </div>
            </div>
          </div> 
        </form>
       

        <!--Add News-->
        <form action="<?= base_url('AdminController/AdminFolder/DonationController/storeDonation')?>" method="post" enctype="multipart/form-data">
        <div id="add-project" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Add Donation</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">

                  <div class="formbold-mb-5">
                    <label for="title" class="formbold-form-label"> Title </label>
                    <input
                      type="text"
                      name="title"
                      id="title"
                      placeholder="Enter News Title"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="description" class="formbold-form-label"> Description </label>
                    <textarea name="description"
                      id="description"
                      class="formbold-form-input"
                      cols="30"
                      rows="10">
                    </textarea>
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
                        name="cover"
                        id="upload"
                        class="formbold-form-input formbold-form-file"
                      />
                    </div>
                    
                    
                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-dark">Submit</button>
                                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>   
        </form>
         <!--Archive modal-->
         <div id="restore-fund" class="modal fade" >
            <div class="modal-dialog modal-confirm">
              <div class="modal-content">
                <div class="header">					
                  <h4 class="modal-title w-100">Disabled Donation</h4>	
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <!--Table contents-->
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php foreach ($archi as $data): ?>
                          <tr>
                            <td class="py-1">
                            <img src="<?=base_url('upload/funds/').$data['donation_cover']; ?>" alt="">
                            </td>
                            <td><?= $data['donation_title']; ?></td>
                            <td>
                            <?= $data['status']; ?>
                            </td>
                            <td class="font-weight-medium"><div class="badge badge-danger"><?= $data['status']; ?></div></td>
                            <td>
                              <a href="<?= base_url('AdminController/AdminFolder/DonationController/restoredonation/'.$data['id'])?>" class="restore-job">
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
        <!--Archive modal-->
       

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
  <script src="<?= base_url('style/vendors/js/vendor.bundle.base.js')?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('style/vendors/chart.js/Chart.min.js')?>"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('style/js/off-canvas.js')?>"></script>
  <script src="<?= base_url('style/js/hoverable-collapse.js')?>"></script>
  <script src="<?= base_url('style/js/template.js')?>"></script>
  <script src="<?= base_url('style/js/settings.js')?>"></script>
  <script src="<?= base_url('style/js/todolist.js')?>"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url('style/js/chart.js')?>"></script>
  <?= $this->include('admin/admin/footer')?>
  <!-- End custom js for this page-->
</body>

</html>
