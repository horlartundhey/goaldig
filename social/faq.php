<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Goal Digger Network</title>
    <link rel="icon" href="<?php echo $this->config->config['base_url']?>social/<?php echo $this->config->config['base_url']?>social/images/fav.png" type="image/png" sizes="16x16"> 
    
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
							<h1>Knowledge Base</h1>
							<form method="post">
								<input type="text" placeholder="Find Help!">
								<button type="submit">search</button>
							</form>
						</div>
					</div>
					<div class="row know-box">
						<div class="col-lg-4 col-md-4">
							<div class="knowldeg-box">
								<i class="fa fa-file-o"></i>
								<span>Knowledge Base</span>
								<p>Guys! you may make your own social media website for their friends, or publically.</p>
								<a href="#" title="" class="underline">Read More</a>
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