<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Goal Digger Network</title>
    <link rel="icon" href="<?php echo $this->config->config['base_url']?>social/<?php echo $this->config->config['base_url']?>social/images/fav.png" type="image/png" sizes="16x16"> 
    <link href="<?=$this->config->config['base_url']?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>social/css/main.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>social/css/style.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>social/css/color.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>social/css/responsive.css">
</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	
<div class="responsive-header">
		<div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="<?php echo $this->config->config['base_url']?>home"><img src="<?=$this->config->config['base_url']?>assets/images/goaldig1.png" width="25%" alt=""></a>
			</span>			
		</div>		
		<nav id="menu" class="res-menu">
			<ul>				
				<li><a style="" href="<?php echo $this->config->config['base_url']?>home">HOME</a></li>		
						<li><a href="<?php echo $this->config->config['base_url']?>ResourceCenter" >Resources Center</a></li>
				<li><a href="<?php echo $this->config->config['base_url']?>goals" >Set Goals</a></li>
				<li><a href="<?php echo $this->config->config['base_url']?>Profile" >Profile Setting</a></li>
				
			</ul>
		</nav>
		
	</div><!-- responsive header -->
	<div class="topbar stick">
		<div class="logo">
			<a title="" href="<?php echo $this->config->config['base_url']?>home"><img src="<?=$this->config->config['base_url']?>assets/images/goaldig1.png" width="15%" alt=""></a>
		</div>
		
		<div class="top-area">
			<ul class="main-menu">
				<li><a style="" href="<?php echo $this->config->config['base_url']?>home">HOME</a></li>
				<li><a href="<?php echo $this->config->config['base_url']?>ResourceCenter" >Resources Center</a></li>
				<li><a href="<?php echo $this->config->config['base_url']?>goals" >Set Goals</a></li>
				<li><a href="<?php echo $this->config->config['base_url']?>Profile" >Profile Setting</a></li>
				
			</ul>
			
		</div>
	</div><!-- topbar -->

		

	<section>
		<div class="gap color-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="faq-top">
							<h1>Network Center</h1>
							<form method="post">
								<input type="text" placeholder="Find a Member!!">
								<button type="submit">search</button>
							</form>
						</div>
					</div>
					<div class="row know-box">
						<div class="col-lg-4 col-md-4">
							<div class="knowldeg-box">
                            <div class="nearly-pepls">
                              
								<a href="time-line.html" title=""><img src="<?php echo $this->config->config['base_url']?>social/images/resources/noimage.jpg" alt="" style="width:100%"></a>							  
                            </div>								
								<span>Member Name:</span>
								<p>About from Profile</p>
								<!-- <a href="#" title="" class="underline btn btn-primary">View Profile</a> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">View Profile</button>                               

                                <a href="#" title="" class="underline btn btn-warning text-light">Send a Message!</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="knowldeg-box">
								<i class="fa fa-check-square-o"></i>
								<span>FAQ</span>
								<p>Guys! you may make your own social media website for their friends, or publically.</p>
								<a href="#" title="" class="underline">Read More</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="knowldeg-box">
								<i class="fa fa-envelope-o"></i>
								<span>Contact us</span>
								<p>Guys! you may make your own social media website for their friends, or publically.</p>
								<a href="#" title="" class="underline">Read More</a>
							</div>
						</div>
					</div>
                    

				</div>
			</div>
		</div>
	</section><!-- knowledge base top -->
     <!-- Modal1 -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <section>
                                    <div class="about">
										<div class="personal">
											<h5 class="f-title"><i class="ti-info-alt"></i> Personal Info</h5>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
											</p>
										</div>
										<div class="d-flex flex-row mt-2">
											<ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" >
												<li class="nav-item">
													<a href="#basic" class="nav-link active" data-toggle="tab" >Basic info</a>
												</li>											
												<li class="nav-item">
													<a href="#work" class="nav-link" data-toggle="tab" >work and education</a>
												</li>																								
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="basic" >
													<ul class="basics">
														<li><i class="ti-user"></i>sarah grey</li>
														<li><i class="ti-map-alt"></i>live in Dubai</li>
														<li><i class="ti-mobile"></i>+1-234-345675</li>
														<li><i class="ti-email"></i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c4553494e515d55507c59515d5550125f5351">[email&#160;protected]</a></li>
														
													</ul>
												</div>
												<div class="tab-pane fade" id="location" role="tabpanel">
													<div class="location-map">
														<div id="map-canvas"></div>
													</div>
												</div>
												<div class="tab-pane fade" id="work" role="tabpanel">
													<div>
														
														<a href="#" title="">Envato</a>
														<p>work as autohr in envato themeforest from 2013</p> 
														
													</div>
												</div>
												
											</div>
										</div>
									</div>
                                    </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <!-- end Modal1 -->
	
	
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright"><a target="_blank" href="<?php echo $this->config->config['base_url']?>home">Goal Digger</a></span>
					<i><img src="<?php echo $this->config->config['base_url']?>social/images/goaldig2.png" alt="" width="10%"></i>
				</div>
			</div>
		</div>
	</div>
</div>			
<script src="<?=$this->config->config['base_url']?>assets/js/jquery-3.5.1.min.js"></script> 
	<script>
		function logout(){
			location.href="<?php echo $this->config->config['base_url']?>logout";
		}
	</script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/main.min.js"></script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/script.js"></script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/map-init.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>	
</html>