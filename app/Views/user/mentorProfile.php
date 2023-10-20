<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="author" content="codepixer">
	
	<meta name="description" content="">

	<meta name="keywords" content="">
	
	<meta charset="UTF-8">
	
	<title>CCS-Link | Profile</title>

	<link rel="icon" href="<?= base_url('assets/logo/ccs_logo.png') ?>" type="image/x-icon">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/linearicons.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/font-awesome.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/bootstrap.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/magnific-popup.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/nice-select.css') ?>">                  
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/animate.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/main.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/swiper-bundle.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/style/style/profilePage/css/swiper.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/profile-css.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/modal.css') ?>">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.css' integrity='sha512-KOWhIs2d8WrPgR4lTaFgxI35LLOp5PRki/DxQvb7mlP29YZ5iJ5v8tiLWF7JLk5nDBlgPP1gHzw96cZ77oD7zQ==' crossorigin='anonymous'/>

	</head>
	<body>
		<header id="header" id="home">
			<div class="container">
				<?= $this->include('navbar') ?>    
			</div>
		</header>

			
		<section class="post-area section-gap">
			<div class="container">
				<div class="row gutters-sm">
					<div class="col-md-4 mb-3">
						<a href="<?= base_url('Mentorship')?>">Back</a>
					  <div class="card">
						<div class="card-body">
						  <div class="d-flex flex-column align-items-center text-center">
						  <?php if (!$mentorData['image']): ?>
							<img src="<?=base_url("upload/profile/no_profile.png")?>" heigh="200" width="200" class="mb-3">
						  <?php else: ?>
							<img src="<?= base_url('upload/profile/').$mentorData['image'] ?>" alt="Admin" class="rounded-circle" width="150">
						  <?php endif; ?>
							
							<div class="mt-3">
							  <h4><?= $mentorData['firstname']?>  <?= $mentorData['lastname'] ?> <?= $mentorData['suffix'] ?>
								<abbr title="verified mentor"><i class="fa-solid fa fa-check text-primary"></i></abbr> 
								</h4>
							  <p class="text-secondary mb-1"><?= $mentorData['title'] ?></p>
							  <p class="text-secondary mb-1"><?= $mentorData['address']?></p>

							 
							  
							</div>
						  </div>
						</div>
					  </div>
                      <div class="card mt-3">
						<ul class="list-group list-group-flush">
						  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h6 class="mb-0">Website</h6>
							<span class="text-secondary"><?=$mentorData['website']?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h6 class="mb-0">Email</h6>
							<span class="text-secondary"><?= $mentorData['email'] ?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h6 class="mb-0">Linkin</h6>
							<span class="text-secondary"><?= $mentorData['linkin'] ?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h6 class="mb-0">Facebook</h6>
							<span class="text-secondary"><?= $mentorData['facebook'] ?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h6 class="mb-0">Contact Number</h6>
							<span class="text-secondary"><?= $mentorData['contactNumber'] ?></span>
						  </li>
						</ul>
					  </div>
					</div>
					<div class="col-md-8">
					  <div class="card mb-3">
						<div class="card-body">
							
						  <div class="row">
							<div class="col-sm-12 text-secondary">
							  <?= $mentorData['description'] ?>
							</div>
						  </div>
						  <hr>
						  <div class="row">
							<div class="col-sm-12 text-secondary">
								<h5>Skills</h5>
								
								
							</div>
						  </div>
						  <hr>
	
						</div>

					  </div>
		
					  <div class="row gutters-sm">
						<div class="col-sm-6 mb-3">
						  <div class="card h-100">
							<div class="card-body">
								
							  <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>Experience:</h6>
                              <?php if(!$experience):?>
                                <h4>No Data</h4>
                              <?php else:?>
							<?php foreach($experience as $data): ?>
								<div class="row2">
									<div class="col-sm-3">
									</div>
									<div class="col-sm-9">
										<h4><?= $data['position'] ?></h4>
									</div>
									<div class="col-sm-9">
										<span class="text text-dark"><?= $data['org'] ?></span>
									
									</div>	
									<div class="col-sm-9">
									<?= $data['startYear'] ?>-<?= $data['endYear'] ?>
									</div>
									<div class="col-sm-12">
										-<span class="text text-dark"><?= $data['description'] ?></span>
									</div>
								</div>
							 	<hr>
							<?php endforeach; ?>
                            <?php endif;?>
							  
							</div>
						  </div>
						</div>
						<div class="col-sm-6 mb-3">
						  <div class="card h-100">
							<div class="card-body">
							  <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>Education:</h6>
                              <?php if(!$education):?>
                                <h4>No Data</h4>
                              <?php else:?>
							<?php foreach($education as $data): ?>
							  <div class="row2">
								<div class="col-sm">
									<h5><?= $data['program'] ?></h5>
								</div>
								<div class="col-sm-9 text-secondary">
								  <span class="text text-dark"><?= $data['school'] ?></span>
								</div>
								<div class="col-sm-9 text-secondary">
								  <?= $data['startYear'] ?>-<?= $data['endYear'] ?>
								</div>
							  </div>
							  <hr>
							<?php endforeach; ?>
                            <?php endif;?>
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
					

				

		<script src="<?= base_url('style/profilePage/js/vendor/jquery-2.2.4.min.js') ?>"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="<?= base_url('style/profilePage/js/vendor/bootstrap.min.js') ?>"></script>          
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="<?= base_url('style/profilePage/js/easing.min.js') ?>"></script>            
		<script src="<?= base_url('style/style/profilePage/js/hoverIntent.js') ?>"></script>
		<script src="<?= base_url('style/profilePage/js/superfish.min.js') ?>"></script> 
		<script src="<?= base_url('style/profilePage/js/jquery.ajaxchimp.min.js') ?>"></script>
		<script src="<?= base_url('style/profilePage/js/jquery.magnific-popup.min.js') ?>"></script> 
		<script src="<?= base_url('style/profilePage/js/owl.carousel.min.js') ?>"></script>          
		<script src="<?= base_url('style/profilePage/js/jquery.sticky.js') ?>"></script>
		<script src="<?= base_url('style/profilePage/js/jquery.nice-select.min.js') ?>"></script>
		<script src="<?= base_url('style/profilePage/js/main.js') ?>"></script>  
		<script src="<?= base_url('style/profilePage/js/swiper-bundle.min.js') ?>"></script> 
		<script src="<?= base_url('style/profilePage/js/script.js') ?>"></script>
		<script src="<?= base_url('style/js/parallax.min.js')?>"></script>
		<script src="<?= base_url('style/js/mail-script.js')?>"></script>
		<script src="<?= base_url('script/profile.js')?>"></script>
		<script src="<?= base_url('style/footer/faq.js')?>"></script>
	</body>
</html>