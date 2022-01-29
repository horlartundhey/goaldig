<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Goal Digger Network</title>
    <link rel="icon" href="<?php echo $this->config->config['base_url']?>social/<?php echo $this->config->config['base_url']?>./social/images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>social/css/main.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>social/css/style.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>social/css/color.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>social/css/responsive.css">
	
	
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>assets/js/jquery-3.5.1.min.js">
	<script src="<?php echo $this->config->config['base_url']?>assets/js/jquery-3.5.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>var $j = jQuery.noConflict(true);</script>


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
				<li><a href="<?php echo $this->config->config['base_url']?>users/network" >Network</a></li>
				
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
				<li><a href="<?php echo $this->config->config['base_url']?>users/network" >Network</a></li>
				
			</ul>
			
		</div>
	</div><!-- topbar -->
	<section >
		<div class="feature-photo">
			<figure>
			<?php if(isset($user['header']) && $user['header']!="" && 
			file_exists("resources/cover/_covers/".$user['header'])){?>
					<img src="resources/cover/_covers/<?=$user['header']?>?v=<?=time()?>" alt="" style="height: 30%;">
								<?php }else{ ?>
								<img src="<?php echo $this->config->config['base_url']?>social/images/resources/breadcum.png" alt="">
								<?php } ?>
			</figure>
			<div class="add-btn">				
			</div>
			<form class="edit-phto" enctype="multipart/form-data"  name="cover_form" action="<?php echo $this->config->config['base_url']?>Profile/updatepic" id="cover_form" method="post">
								
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Edit Cover Photo
					<input type="file" name="cover" id="cover_pic" />
				</label>
			</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
							<?php if(isset($user['profile_picture']) && $user['profile_picture']!="" &&
file_exists("resources/profile/_profiles/".$user['profile_picture'])){?>
								<img src="
resources/profile/_profiles/<?=$user['profile_picture']?>?v=<?=time()?>" alt="">
								<?php }else{ ?>
								<img src="<?php echo $this->config->config['base_url']?>social/images/resources/noimage.jpg" alt="">
								<?php } ?>
								<form class="edit-phto" enctype="multipart/form-data"  name="picture_form" action="<?php echo $this->config->config['base_url']?>Profile/updatepic" id="picture_form" method="post">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Display Photo
										<input type="file" name="profile" id="profile_pic" />
										
									</label>
								</form>
								
							</figure>
							
						</div>
						<h5><?=$user['name']?></h5>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">						
							<ul>
								<li class="admin-name">
								  <!-- <h5><?=$user['name']?></h5> -->
								</li>
								<!-- <li>
									<h5><?=$user['name']?></h5>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->

	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									<!-- <div class="widget">
										<h4 class="widget-title">Recent Activity</h4>
										<?php echo $this->config->config['base_url']."Profile/recentactivities"?>
									</div> -->
									<div class="widget stick-widget">
										<h4 class="widget-title">Edit info</h4>
										<ul class="naves">
											<li>
												<i class="ti-info-alt"></i>
												<a href="<?php echo $this->config->config['base_url']?>Profile" title="">Basic info</a>
											</li>
											
											
											<!-- <li>
												<i class="ti-lock"></i>
												<a href="<?php echo $this->config->config['base_url']?>Profile/changePassword" title="">change password</a>
											</li> -->

											<li>
												<i class="ti-settings"></i>
												<a href="#" onclick="logout()" title=""><i class="ti-power-off"></i>log out</a>
											</li>
											
										</ul>
									</div><!-- settings widget -->										
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
								    <?php if($this->session->flashdata('success')): ?>
								<div class="alert alert-success alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								  <?php echo $this->session->flashdata('success'); ?>
								</div>
							  <?php elseif($this->session->flashdata('error')): ?>
								<div class="alert alert-error alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								  <?php echo $this->session->flashdata('error'); ?>
								</div>
							  <?php endif; ?>
									<div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>
										<span style="color:red"><?=isset($errors)?$errors:""?></span>
										<form method="post" action="<?php echo $this->config->config['base_url']?>Profile/update">
											<div class="form-group">	
											  <input type="text" id="input" value="<?=$user['name']?>" name="name" required="required"/>
											  <label class="control-label" for="input">Name</label><i class="mtrl-select"></i>
											</div>
											
											<div class="form-group">	
											  <input type="text" name="email" disabled value="<?=$user['username']?>" required="required"/>
											  <label class="control-label" for="input"><?=$user['username']?>
											  </label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
											  <input type="text" required="required" value="<?=$user['phone']?>" name="phone" />
											  <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
											</div>
											
											<!-- <div class="form-group">	
											  <input type="text" required="required" value="<?=$user['career']?>" name="career" />
											  <label class="control-label" for="input">Career</label><i class="mtrl-select"></i>
											</div> -->
											
											<div class="form-radio">
											  <div class="radio">
												<label>
												  <input type="radio" value="male" <?=($user['gender']=="male")?"checked":""?> checked="checked" name="gender"><i class="check-box"></i>Male
												</label>
											  </div>
											  <div class="radio">
												<label>
												  <input type="radio" <?=($user['gender']=="female")?"checked":""?> value="female" name="gender"><i class="check-box"></i>Female
												</label>
											  </div>
											</div>
											<div class="form-group">	
											  <input type="text" value="<?=$user['city']?>" name="city" required="required"/>
											  <label class="control-label" for="input">City</label><i class="mtrl-select"></i>
											</div>

											<div class="form-group">	
											  <input type="text" value="<?=$user['career']?>" name="career" required="required"/>
											  <label class="control-label" for="input">Career</label><i class="mtrl-select"></i>
											</div>
											
											<div class="form-group">	
											  <select name="country">
												<option value="">Country</option>
												  
												  <option <?=($user['country']=="Nigeria")?"selected":""?> value="Nigeria">Nigeria</option>
												  <option <?=($user['country']=="Ghana")?"selected":""?> value="Ghana">Ghana</option>
												  <option <?=($user['country']=="Germany")?"selected":""?> value="Germany">Germany</option>
												  <option <?=($user['country']=="Italy")?"selected":""?> value="Italy">Italy</option>
												  <option <?=($user['country']=="Ivory Coast")?"selected":""?> value="Ivory Coast">Ivory Coast</option>
												  <option <?=($user['country']=="Japan")?"selected":""?> value="Japan">Japan</option>
												  <option <?=($user['country']=="South Africa")?"selected":""?> value="South Africa">South Africa</option>
												  <option <?=($user['country']=="United States of America")?"selected":""?> value="United States of America">United States of America</option>
												  <option <?=($user['country']=="United Kingdom")?"selected":""?> value="United Kingdom">United Kingdom</option>
												  
											  </select>
											</div>
											<div class="form-group">	
											  <textarea rows="4" id="textarea"  name="about" required="required"><?=$user['about']?></textarea>
											  <label class="control-label" for="textarea">About Me / Motivation </label><i class="mtrl-select"></i>
											</div>
											<div class="submit-btns">
												<button type="button" class="mtr-btn"><span>Cancel</span></button>
												<button type="submit" class="mtr-btn"><span>Update</span></button>
											</div>
										</form>
										
									</div>
								</div>	
							</div><!-- centerl meta -->
							<div class="col-lg-3">								
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

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
	<script type="text/javascript">

$(document).ready(function() {

  // submit the create from 
  $("#profile_pic").on('change', function() {
    $("#picture_form").submit();

  });

  // submit the create from 
  $("#cover_pic").on('change', function() {
    $("#cover_form").submit();

  });

});


</script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/main.min.js"></script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/script.js"></script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/map-init.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>	
</html>