<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('style/style.css')?>">
    <title>New Contact</title>
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
    <section id="blog" class="blog">
    <div class="container d-flex justify-content-center">
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <form action="<?= base_url('Dash/ContactController/createContact') ?>" method="post">

           
            <div class="card-body">
                <h4 class="text">
                    Contact Information
                </h4>
                <p class="text text-muted fs-6">
                    You can create your contact info here
                </p>
                <div class="row gutters">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" name="website" id="Website">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">Email</label>
                            <input type="text" class="form-control" id="Email" name="email">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">LinkedIn</label>
                            <input type="text" class="form-control" id="LinkedIn" name="linkin">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">Facebook</label>
                            <input type="text" class="form-control" id="Facebook" name="facebook">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">Contact Number</label>
                            <input type="text" class="form-control" id="contact-number" name="number">
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
                </form>
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