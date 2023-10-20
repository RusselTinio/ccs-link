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
                <a href="#add-news" data-toggle="modal">
                     <button class="btn btn-danger btn-icon-text" id="add">
                        <i class="ti-upload btn-icon-prepend"></i>                                                    
                        Add
                      </button>
                    </a> 

                    <a href="#restore-news" data-toggle="modal">
                  <button class="btn btn-primary btn-icon-text" id="add">
                    <i class="ti-archive btn-icon-prepend"></i>                                                    
                    Archives
                  </button>
                </a>
                  <p class="card-title mb-0">List of News</p>
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
                        <?php foreach($newsData as $data):?>
                          <tr>
                            <td class="py-1" id="event">
                              <img src="<?= base_url('upload/news/').$data['news_image']?>" alt="<?= $data['news_image']?>" />
                            </td>
                            <td ><?= $data['news_title']?></td>
                            <td>
                              <p><?= $data['news_desc']?></p>
                            </td>
                            <td ><?= $data['date_posted']?></td>
                            <td class="font-weight-medium"><div class="badge badge-success"><?= $data['status']?></div></td>
                            <td>
                              <a href="#edit-news" class="" data-toggle="modal">
                                
                              <button type="button" class="edit-news btn btn-dark btn-icon" 
                              data-news-id = "<?= $data['id']?>" 
                              data-news-title = "<?= $data['news_title']?>" 
                              data-news-desc = "<?= $data['news_desc']?>"
                              data-news-date = "<?= $data['date_posted']?>"
                              data-news-cover = "<?= $data['news_image']?>"
                              >
                                <i class="fa fa-edit btn-icon-append"></i>
                              </button>
                              </a>   

                              <a href="#delete-news" data-toggle="modal">
                                <button type="button" class=" delete-news btn btn-dark btn-icon" data-news-id="<?= $data['id']?>">
                                  <i class="fa fa-trash btn-icon-append"></i>
                                </button>
                              </a>                                                                                 
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
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">List of Events</p>
                  <a href="#add-event" data-toggle="modal">
                   <button class="btn btn-danger btn-icon-text" id="add">
                      <i class="ti-upload btn-icon-prepend"></i>                                                    
                      Add
                    </button>
                  </a>

                  <a href="#restore-events" data-toggle="modal">
                    <button class="btn btn-primary btn-icon-text" id="add">
                      <i class="ti-archive btn-icon-prepend"></i>                                                    
                      Archives
                    </button>
                  </a>
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
                        <?php  foreach($eventsData as $data):?>
                          <tr>
                            <td class="py-1" id="event">
                              <img src="<?= base_url('upload/events/').$data['events_image']?>" alt="image"/>
                            </td>
                            <td><?= $data['events_title']?></td>
                            <td>
                              <p><?= $data['events_desc']?></p>
                            </td>
                            <td><?= $data['events_date']?></td>
                            <td class="font-weight-medium"><div class="badge badge-success"><?= $data['status']?></div></td>
                            <td>
                              <a href="#edit-event"class="" data-toggle="modal">
                                <button type="button" class=" edit-event btn btn-dark btn-icon"
                                  data-events-id="<?= $data['id']?>"
                                  data-events-title="<?= $data['events_title']?>"
                                  data-events-desc="<?= $data['events_desc']?>"
                                  data-events-date="<?= $data['events_date']?>"
                                  data-events-cover="<?= $data['events_image']?>"
                                >
                                  <i class="fa fa-edit btn-icon-append"></i>
                                </button>
                              </a>    

                              <a href="#delete-events" data-toggle="modal">
                                <button type="button" class=" delete-events btn btn-dark btn-icon" data-events-id="<?= $data['id']?>">
                                  <i class="fa fa-trash btn-icon-append"></i>
                                </button>
                              </a>                                                                                 
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
        <!--Modals-->
        <!--Edit News-->
        <form action="<?=  base_url('AdminController/AdminFolder/NewsController/updateNews')?>" method="POST" enctype="multipart/form-data">
        <div id="edit-news" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Edit News</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">

                  <div class="formbold-mb-5">
                    <label for="title" class="formbold-form-label"> News Title </label>
                    <input
                      type="text"
                      name="newsTitle"
                      id="newsTitle"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="description" class="formbold-form-label"> Description </label>
                    <textarea  
                      name="newsDescription"
                      id="newsDescription"
                      class="formbold-form-input" 
                      cols="30" rows="10"></textarea>
                  </div>
                   
                    <div class="formbold-mb-5">
                      <label for="cover" class="formbold-form-label">
                        Upload File (Image)
                      </label>
                      <input
                        type="file"
                        name="newsCover"
                        id="newsCover"
                        class="formbold-form-input formbold-form-file"
                      />
                    </div>
                    <input type="hidden" name="id" id="news_Id">
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
        
        <!--Archive modal-->
        <div id="restore-news" class="modal fade" >
                  <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                      <div class="header">					
                        <h4 class="modal-title w-100">Disabled Job</h4>	
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
                                <th>Date Posted</th>
                                <th>Action</th>
                              </tr>  
                            </thead>
                            <tbody>
                              <?php foreach ($newsDataArchive as $data): ?>
                                <tr>
                                  <td class="py-1">
                                  <img src="<?=base_url('upload/news/').$data['news_image']; ?>" alt="">
                                  </td>
                                  <td><?= $data['news_title']; ?></td>
                                  <td>
                                  <?= $data['date_posted']; ?>
                                  </td>
                                  <td class="font-weight-medium"><div class="badge badge-danger"><?= $data['status']; ?></div></td>
                                  <td>
                                    <a href="<?= base_url('AdminController/AdminFolder/NewsController/restoreNews/'.$data['id'])?>" class="restore-job">
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
               
        <!--Archive modal-->
        <div id="restore-events" class="modal fade" >
                  <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                      <div class="header">					
                        <h4 class="modal-title w-100">Disabled Events</h4>	
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
                                <th>Date Posted</th>
                                <th>Action</th>
                              </tr>  
                            </thead>
                            <tbody>
                              <?php foreach ($eventsDataArchive as $data): ?>
                                <tr>
                                  <td class="py-1">
                                  <img src="<?=base_url('upload/events/').$data['events_image']; ?>" alt="">
                                  </td>
                                  <td><?= $data['events_title']; ?></td>
                                  <td>
                                  <?= $data['timestamp']; ?>
                                  </td>
                                  <td class="font-weight-medium"><div class="badge badge-danger"><?= $data['status']; ?></div></td>
                                  <td>
                                  <a href="<?= base_url('AdminController/AdminFolder/NewsController/restoreEvents/'.$data['id'])?>" class="restore-job">
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

        <!--Edit Event-->
        <form action="<?= base_url('AdminController/AdminFolder/NewsController/updateEvents')?>" method="post" enctype="multipart/form-data">
        <div id="edit-event" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Edit Event</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                  <input type="hidden" id="eventId" name="id">
                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> Event Title </label>
                    <input
                      type="text"
                      name="eventsTitle"
                      id="eventsTitle"
                      placeholder="Enter Event Title"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="phone" class="formbold-form-label"> Description </label>
                    <textarea  name="eventsDescription"
                      id="eventsDescription"
                      placeholder="Enter Description"
                      class="formbold-form-input" cols="30"
                       rows="10">
                      </textarea>
                  </div>
                  <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5 w-full">
                        <label for="date" class="formbold-form-label"> Date </label>
                        <input
                          type="date"
                          name="eventsDate"
                          id="eventsDate"
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
                        name="eventsCover"
                        id="upload"
                        class="formbold-form-input formbold-form-file"
                      />
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
        <form action="<?= base_url('AdminController/AdminFolder/NewsController/deleteNews')?>" method="post">
          <div id="delete-news" class="modal fade">
            <div class="modal-dialog modal-confirm">
              <div class="modal-content">
                <div class="modal-header flex-column">					
                  <h4 class="modal-title w-100">Are you sure?</h4>	
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <p>Do you really want to delete this news?</p>
                  <input type="hidden" name="id" id="news_id">
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-danger">Disable</button>
                </div>
              </div>
            </div>
          </div> 
        </form>

        <form action="<?= base_url('AdminController/AdminFolder/NewsController/deleteEvents')?>" method="post">
          <div id="delete-events" class="modal fade">
            <div class="modal-dialog modal-confirm">
              <div class="modal-content">
                <div class="modal-header flex-column">					
                  <h4 class="modal-title w-100">Are you sure?</h4>	
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <p>Do you really want to delete this event?</p>
                  <input type="hidden" name="id" id="events_id" >
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-danger">Disable</button>
                </div>
              </div>
            </div>
          </div> 
        </form>
        
        <!--Add News-->
        <form action="<?= base_url('AdminController/AdminFolder/NewsController/storeNews')?>" method="post" enctype="multipart/form-data">
        <div id="add-news" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="header">					
                <h4 class="modal-title w-100">Add News</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">

                  <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> News Title </label>
                    <input
                      type="text"
                      name="title"
                      id="name"
                      placeholder="Enter News Title"
                      class="formbold-form-input"
                      required
                    />
                  </div>
                  <div class="formbold-mb-5">
                    <label for="phone" class="formbold-form-label"> Description </label>

                    <textarea 
                      name="description"
                      id="description"
                      placeholder="Enter Description"
                      class="formbold-form-input"
                      required 
                      cols="30" rows="10"></textarea>
                  </div>
                  <div class="flex flex-wrap formbold--mx-3">
                    
                    <div class="formbold-mb-5">
                      <label for="upload" class="formbold-form-label">
                        Upload File (Image)
                      </label>
                      <input
                        type="file"
                        name="news-cover"
                        id="upload"
                        class="formbold-form-input formbold-form-file job-image"
                        required
                      />
                    </div>
                    <div class="modal-footer justify-content-center">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-dark">Add</button>
                                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        </form>
        
        
        <!--Add Event-->
        <form action="<?= base_url('AdminController/AdminFolder/NewsController/storeEvents')?>" method="post" enctype="multipart/form-data">
          <div id="add-event" class="modal fade">
            <div class="modal-dialog modal-confirm">
              <div class="modal-content">
                <div class="header">					
                  <h4 class="modal-title w-100">Add Event</h4>	
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="formbold-mb-5">
                      <label for="name" class="formbold-form-label"> Event Title </label>
                      <input
                        type="text"
                        name="eventsTitle"
                        id="name"
                        placeholder="Enter Event Title"
                        class="formbold-form-input"
                      />
                    </div>
                    <div class="formbold-mb-5">
                      <label for="phone" class="formbold-form-label"> Description </label>
                      <textarea name="eventsDescription" id="description" cols="30" rows="10" class="formbold-form-input"></textarea>
                    </div>
                    <div class="flex flex-wrap formbold--mx-3">
                      <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5 w-full">
                          <label for="date" class="formbold-form-label"> Date </label>
                          <input
                            type="date"
                            name="eventsDate"
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
                          name="eventsCover"
                          id="upload"
                          class="formbold-form-input formbold-form-file"
                        />
                      </div>
                      <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-dark">Add</button>
                                      </div>
                    </div>
                </div>
              </div>
          </div>
        </form>
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
  <?= $this->include('admin/admin/footer')?>

</html>
