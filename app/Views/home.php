<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="author" content="codepixer">
	
	<meta name="description" content="">

	<meta name="keywords" content="">
	
	<meta charset="UTF-8">
	
	<title>CCSLINK</title>

	<link rel="icon" href="<?= base_url('assets/logo/ccs_logo.png') ?>" type="image/x-icon">

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
		<link rel="stylesheet" href="<?= base_url('style/landingPage/landingpage.css')?>"/>
	</head>
	<body>

		  <header id="header" id="home">
			<div class="container">
				<div class="row align-items-center justify-content-between d-flex">
				  <div id="logo">
					<a href=""><img src="<?= base_url('style/landingPage/img/logo.png')?>" alt="" title="" /></a>
				  </div>
				  <nav id="nav-menu-container">
					<ul class="nav-menu">
					  <li class="menu-active"><a href="<?=base_url('Home')?>">Home</a></li>
					  <li><a href="<?= base_url('Home/aboutUs') ?>">About Us</a></li> 
					  <li><a href="<?= base_url('Login/Auth') ?>">Log In</a></li>  
					  <li class="text text-light">|</li>     
					  <li><a href="<?= base_url('Login/Auth/Register') ?>">Sign Up</a></li>     				          
					</ul>
				  </nav>	    		
				</div>
			</div>
		  </header>


		
		  <section id="hero">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url(style/landingPage/image/CCSLINK-bg.png);">
                  <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                      <h2>Welcome <span>Alumni!</span></h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

		  <section class="popular-post-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="active-popular-post-carusel">
						<?php foreach($newsData as $data): ?>
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="<?= base_url('upload/news/').$data['news_image'] ?>" alt="" height="100" width="200">
                                
                            </div>
                            <div class="details">
                                <a href="#"><h4><?= $data['news_title'] ?></h4></a>
                                <p>
									<?= $data['news_desc'] ?>
								</p>
                            </div>
                        </div>	
						<?php endforeach; ?>																																				
                    </div>

                </div>
            </div>	
        </section>
		<section id="banner" class="d-flex flex-column justify-content-center align-items-center ">
			<div class="container text-center text-md-left" data-aos="fade-up">
			<div id="text-carousel" class="carousel slide " data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
					<h1>BRIEF HISTORY</h1>
					<h4 style="color:white">The College of Computing Studies (CCS) initially began in 2004, when the Institute of Engineering and Architecture headed by Engr. Rohel S. Serrano commenced the semestral offering of the Bachelor of Science in Information Technology (BSIT) course.</h4>
					</div>
					<div class="carousel-item">
					<h4 style="color:white">The BSIT course was in accordance with the CHED Memorandum Order No. 25, Series of 2001 of the Revised Policies and Standards for Information Technology Education (ITE). And with the offering of the new program, the organization changed its name into Institute of Science and Technology (now College of Engineering and Architecture (CEA)).</h4>
					</div>
				<div class="carousel-item">
					<h4 style="color:white">On December 9, 2009, the conversion of Don Honorio Ventura College of Arts and Trades (DHVCAT) into Don Honorio Ventura Technological State University (DHVTSU) directed the way to the approval and creation of the College of Computer Studies. The Dean of the CEA, Engr. Reden M. Hernandez was also designated as the Concurrent Dean of the CCS.</h4>
					</div>
				</div>
				</div>
			</div>
		</section>
		<section id="ccs">
            <div class="ccs-1">
                <h1>DHVSU College of Computing Studies</h1>
            </div>
            <div id="ccs-2">
                <div class="content-box lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <i class="fa fa-book"></i>
                                    <h3>Mision</h3>
                                    <hr>
                                    <p>The College of Computing Studies is commited to deliver quality education by providing knowledge and skills
                                        to its clientele to privide the IT industry and government with proficient and competitive IT Professionals.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <i class="fa fa-globe"></i>
                                    <h3>Vision</h3>
                                    <hr>
                                    <p>The College of Computing Studies will be the lead institution creating knowledge and providing technical skills and training
                                        in the field of Information and Communication Technology in the region.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <i class="fa fa-pencil"></i>
                                    <h3>Objectives</h3>
                                    <hr>
                                    <p>To provide an advance understanding of information technology concepts, methods, and practices that can be applied in solving problems and addressing current technological issue; a broad base of application domain.</p>
										<p>To provide insights and expertise in helping students to become accomplished professionals with holistic knowledge in Information Technology related fields and to contribute in the development and application of new through competent faculty and relevant curriculum.</p>
                                </div>
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
								<li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>       Cabambangan, Bacolor Pampanga</a></li>
									<li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
  <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
</svg>       ccslink43@gmail.com</a></li>
									<li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>       9654841545 0</a></li>
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
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>SEE OTHERS</h6>
								<ul class="footer-nav">
								<li><a href="#">ABOUT US</a></li>
									<li><a href="#">TERMS & CONDITIONS</a></li>
									<li><a href="#">PRIVACY POLICIES</a></li>
								</ul>
							</div>
						</div>		
					</div>
					<div class="text-center p-4" style="color: white;">
					<h4>CCSLINK</h4>
									© 2023 All Rights Reserved:
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
			<script src="<?= base_url('style/footer/faq.js')?>"></script>
			
		</body>
	</html>



