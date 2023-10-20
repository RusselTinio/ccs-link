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
                  <p class="card-title mb-0">List of News</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>News</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                          <?php foreach ($newsData as $data): ?>
                            <?php if($data['status']!='disabled'): ?>
                              <tr>
                                <td class="py-1" id="event">
                                  <img src="<?= base_url('upload/news/').$data['news_image']?>" alt="image"/>
                                </td>
                                <td><?= $data['news_title']?></td>
                                <td>
                                  <p><?= $data['news_desc']?></p>
                                </td>
                                <td>
                                  <p><?= $data['date_posted']?></p>
                                </td>
                                  <td class="font-weight-medium"><div class="badge badge-success">Active</div></td>
                                <td><a href="#approve-news" class=" news_disable btn btn-dark btn-sm" data-toggle="modal"  data-news-title="<?= $data['news_title'] ?>" data-news-id="<?= $data['id']?>">
                                  Disable
                                  </a>
                                </td>
                              </tr>
                            <?php endif;?>
                          <?php endforeach;?>                                                
                      </tbody>
                    </table>
                    <br>
                    
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
                          <th>Status</th>
                          <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php foreach ($eventsData as $data): ?>
                          <?php if($data['status']!='disabled'): ?>
                            <tr>
                              <td class="py-1" id="event">
                                <img src="<?= base_url('upload/events/').$data['events_image'] ?>" alt="image"/>
                              </td>
                              <td><?= $data['events_title']?></td>
                              <td>
                                <p><?= $data['events_desc']?></p>
                              </td>
                              <td>
                                <p><?= $data['events_date']?></p>
                              </td>
                              <?php if($data['status'] == 'active'):?>
                                <td class="font-weight-medium"><div class="badge badge-success">Active</div></td>
                              <?php elseif($data['status'] == 'disabled'):?>
                                <td class="font-weight-medium"><div class="badge badge-danger">Disabled</div></td>
                              <?php endif;?>
                              <td><a href="#approve-event" data-toggle="modal">
                                <button type="button" class="events_disable btn btn-dark btn-sm" data-events-title="<?= $data['events_title'] ?>" data-news-id="<?= $data['id']?>">Disabled</button>
                                </a>
                              </td>
                            </tr>
                            <?php endif;?>
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
        <!--Disable-->
        <div id="deac-news" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="formbold-event-wrapper">
                <h3>Confirm Disabled</h3>
                <div class="formbold-event-details">
                    <p>Are you sure you want to disable this Event? </p>
                    <h6>Title: </h6>

              </div>
              <div class="modal-footer justify-content-center"> 
                <button type="button" class="btn btn-danger" >Disable</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> 
              </div>
              </div>
              
            </div>
          </div>
        </div> 
        <div id="approve-news" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="formbold-event-wrapper">
                <h3>Confirm Disabled</h3>
                <div class="formbold-event-details">
                    <p>Are you sure you want to disable this news? </p>
                    <h6>Title: <span id="news-title"></span></h6>
                    

              </div>
              <div class="modal-footer justify-content-center"> 
                <form action="<?= base_url('AdminController/NewsController/deleteNews')?>" method="POST">
                  <input type="hidden" id="news-id" value="" name="user_id">
                  <button type="submit" class="btn btn-danger">Disable</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancel</button> 
                </form>
              
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js' integrity='sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==' crossorigin='anonymous'></script>
  <script src="<?= base_url('script/deactivate.js')?>"></script>
  <!-- End custom js for this page-->
</body>

</html>
