<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('style/style.css')?>">
    <title>New Profile</title>
    <link rel="icon" href="<?= base_url('assets/logo/ccs_logo.png') ?>" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    
    <link rel="stylesheet" href="<?= base_url('style/donationPage/css/linearicons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('style/donationPage/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('style/donationPage/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('style/donationPage/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('style/donationPage/css/nice-select.css') ?>">					
    <link rel="stylesheet" href="<?= base_url('style/donationPage/css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('style/donationPage/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('style/donationPage/css/main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('style/donationPage/css2/style.css') ?>">

</head>
<body>
    
		<header id="header" id="home">
		    <div class="container">
				<?= $this->include('navbar') ?>    
		    </div>
		</header>
    <div class="container mt-4">
        <form action="<?= base_url('Dash/ProfileController/createProfile')?>" method="post" enctype="multipart/form-data">
    <section id="blog" class="blog">
				<div class="container" data-aos="fade-up">		  
				  <div class="row">
                  <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
                        <div class="user-avatar d-flex justify-content-center">
                        <img src="<?= base_url('upload/no_profile.png')?>" alt="image" id="previewImage"  height="200" width="200">
                        </div>
                        <div class="text-center mt-3">
                            <input type="file" name="image" id="userfile" accept="image/*" onchange="preview(event)" style="display:none">
                            <label for="userfile" class="btn btn-primary rounded">Upload</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Personal Details</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="fullName" value="<?= $userInfo['lastname'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="fullName"  value="<?= $userInfo['firstname'] ?>" disabled>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="suffixName">Suffix</label>
                            <input type="text" class="form-control" id="fullName" name="extension" placeholder="Enter suffix">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="suffixName">Title</label>
                            <input type="text" class="form-control" id="fullName" name="title" placeholder="Enter title or degree">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="province">Address</label>
                            <input type="name" class="form-control" id="Street"  name="address" placeholder="Enter Address">
                            <?= isset($validation) ? display_error($validation, 'address'):'' ?> 
                        </div>
                    </div>
                   
                </div>
                <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                            <label for="">Description</label>
                            <textarea  id="" class="form-control" name="description" cols="20" rows="10"></textarea>
                            <?= isset($validation) ? display_error($validation, 'description'):'' ?> 
                            
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
        </div>
        </div>
				  </div>
		  
				</div>
			  </section>
        
        </div>
        <script src="<?= base_url('script/profile.js') ?>"></script>
        <script src="<?= base_url('style/profile.js')?>"></script>
        <script src="<?= base_url('style/landingPage/js/vendor/jquery-2.2.4.min.js') ?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?= base_url('style/landingPage/js/vendor/bootstrap.min.js') ?>"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="<?= base_url('style/landingPage/js/easing.min.js') ?>"></script>			
			<script src="<?= base_url('style/landingPage/js/hoverIntent.js') ?>"></script>
			<script src="<?= base_url('style/landingPage/js/superfish.min.js') ?>"></script>	
			<script src="<?= base_url('style/landingPage/js/jquery.ajaxchimp.min.js') ?>"></script>
			<script src="<?= base_url('style/landingPage/js/jquery.magnific-popup.min.js') ?>"></script>	
			<script src="<?= base_url('style/landingPage/js/owl.carousel.min.js') ?>"></script>			
			<script src="<?= base_url('style/landingPage/js/jquery.sticky.js') ?>"></script>
			<script src="<?= base_url('style/landingPage/js/jquery.nice-select.min.js') ?>"></script>			
			<script src="<?= base_url('style/landingPage/js/parallax.min.js') ?>"></script>		
			<script src="<?= base_url('style/landingPage/js/mail-script.js') ?>"></script>	
			<script src="<?= base_url('style/landingPage/js/main.js') ?>"></script>
			<script src="<?= base_url('style/landingPage/js/donation.js') ?>"></script>
</body>
</html>