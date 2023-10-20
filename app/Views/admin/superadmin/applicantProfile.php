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
        <?= $this->include('admin/superadmin/template')?>
        <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-2">
                      <img src="<?= base_url('upload/profile/').$applicantData['image']?>" alt="" height="150" width="150" class="m-4">
                    </div>
                    <div class="col-md-10 align-text-bottom ">
                        <h2 class="mt-5"><?= $applicantData['firstname']?>  <?= $applicantData['lastname']?>  <?= $applicantData['suffix']?></h2>
                        <p><?= $applicantData['title']?></p> 
                        <p><?= $applicantData['address'] ?></p>
                        <span><?= $applicantData['description']?></span>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-md-4 ">
                      <div class="row">
                        <h2 class="ml-4">Contact</h2>
                      </div> 
                      <div class="row">
                        <div class="col-md-12">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                            <span class="text-secondary"><?=  $applicantData['website']?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                            <span class="text-secondary"><?=  $applicantData['email']?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                            <span class="text-secondary"><?=  $applicantData['linkin']?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                            <span class="text-secondary"><?=  $applicantData['facebook']?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                            <span class="text-secondary"><?= $applicantData['contactNumber']?></span>
                            </li>
                          </ul>
                        </div>
                        
                      </div>                     
                    </div>
                    <div class="col-md-4 ">
                      <div class="row">
                        <h2 class="ml-4">Experience</h2>
                      </div>
                      <?php foreach($expData as $data): ?>
                      <div class="row">
                        <div class="col-md-12">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item "><h4><?= $data['position']?></h4></li>
                            <li class="list-group-item "><span><?= $data['org']?></span></li>
                            <li class="list-group-item "><span><?= $data['description']?></span></li>
                            <li class="list-group-item "><span><?= $data['startYear']?>-<?= $data['endYear']?></span></li>
                          </ul>
                        </div>
                      </div>
                      <?php endforeach;?>
                    </div>

                    <div class="col-md-4 ">
                      <div class="row">
                        <h2 class="ml-4">Education</h2>
                      </div>
                      <?php foreach($educData as $data):?>
                      <div class="row">
                        <div class="col-md-12">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item "><h4><?= $data['program']?></h4></li>
                            <li class="list-group-item "><span><?= $data['school']?></span></li>
                            <li class="list-group-item "><span><?= $data['startYear']?>-<?= $data['endYear']?></span></li>
                          </ul>
                        </div> 
                      </div>
                      <?php endforeach;?>
                    </div>

                  </div>
                  <?php if($applicantData['approval'] == 'pending'):?>
                  <div class="row mt-5">
                    <div class="col-md-12  "> 
                      <a href="<?= base_url('Dash/ApplicantController/applicantApproval/').$applicantData['id']."/approve"?>" class="btn btn-primary float-right px-2 mx-2">Approove</a>
                      <a href="<?= base_url('Dash/ApplicantController/applicantApproval/').$applicantData['id']."/reject"?>" class="btn btn-danger float-right">Reject</a>
                    </div>
                  </div>
                  <?php else:?>
                    <div class="row mt-5">
                    <div class="col-md-12  "> 
                      <a href="<?= base_url('superadmin/applicant_list')?>" class="btn btn-primary float-right px-2 mx-2">Back</a>
                    </div>
                  </div>
                  <?php endif;?>
                </div>
              </div>
            </div>
          </div>
    </div>
    <?= $this->include('admin/admin/footer')?>
