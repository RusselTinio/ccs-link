<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="author" content="codepixer">
    
    <meta name="description" content="">

    <meta name="keywords" content="">
    
    <meta charset="UTF-8">
    
    <title>Login Admin</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/linearicons.css')?>">
        <link rel="stylesheet" href="<?= base_url('style/landingPage/css/font-awesome.min.css')?>">
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/bootstrap.css')?>">
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/magnific-popup.css')?>">
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/nice-select.css')?>">					
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/animate.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('style/landingPage/css/owl.carousel.css')?>">
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/main.css')?>">
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/style.css')?>">
		<link rel="stylesheet" type="text" href="<?= base_url('style/landingPage/css/owl.carousel.min.css')?>">
        <link href="<?= base_url('style/loginPage/csslogin/styles.css')?>" rel="stylesheet">
        
    </head>
    <body>

          <header id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                    <a href="index.html"><img src="landingPage/img/logo.png" alt="" title="" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-active"><a href="<?=base_url('Home')?>">Home</a></li>
                      <li><a href="<?= base_url('Home/aboutUs') ?>">About Us</a></li> 
					  <li><a href="<?= base_url('Login/Auth') ?>">Log In</a></li>      				          
                    </ul>
                  </nav>	    		
                </div>
            </div>
          </header>


        
          <section class="banner-area2 relative" id="home">
            <div class="overlay2 overlay-bg2"></div>
            <div class="container">
                <div class="row">
                    <div class="banner-content2 col-lg-12 pt-5">
                            <div class="banner-title2 text-uppercase">
                            </div>
                        </div>
                </div>
            </div>
        </section>
        
        
        <section class="popular-post-area pt-1">
            <div class="ex-form-1 pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3">
                            <div class="text-box mt-5 mb-5">
                            <form action="<?= base_url('AdminController/AdminFolder/Admin/check') ?>" method="POST"> 
                                <?= csrf_field() ?>
                                    <?php if(!empty(session()->getFlashdata('fail'))):?>
                                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                                    <?php endif?>
                                    <div class="mb-4 form-floating">
                                        <label for="floatingInput">Username</label>
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" value="<?= set_value('username') ?>">
                                        <span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'username'):'' ?>       
                                        </span>
                                    </div>
                                    <div class="mb-4 form-floating">
                                        <label for="floatingPassword">Password</label>
                                        <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password">
                                        <span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'password'):'' ?>       
                                        </span>
                                    </div>
                                    
                                    <a href="admin/forecast-admin.html"><button type="submit" class="form-control-submit-button">Log in</button></a>
                                </form>
                            </div>
                        </div> 
                    </div> 
                </div> 
            </div>
        </section>
        
       
        
        
            
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-12">
                        <div class="single-footer-widget">
                            <h6>Contact Info</h6>
                            <ul class="footer-nav">
                                <li><a href="#">Lorem ispun</a></li>
                                <li><a href="#">Lorem ispun</a></li>
                                <li><a href="#">Lorem ispun</a></li>
                                <li><a href="#">Lorem ispun</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-12">
                        <div class="single-footer-widget newsletter">
                            <h6>Send us feedback</h6>
                            
                            <div id="mc_embed_signup">
                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                    <div class="form-group row" style="width: 100%">
                                        <div class="col-lg-8 col-md-12">
                                            <input name="EMAIL" placeholder="Type here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type here '" required="" type="feedback">
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>
                                        </div> 
                                    
                                        <div class="col-lg-4 col-md-12">
                                            <button class="nw-btn primary-btn">Submit</button>
                                        </div> 
                                    </div>		
                                    <div class="info"></div>
                                </form>
                            </div>		
                        </div>
                    </div>					
                </div>

                <div class="row footer-bottom d-flex justify-content-between">
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
            
        </footer>
                

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



