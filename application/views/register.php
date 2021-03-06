<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Goal Digger Network</title>
    <link rel="icon" href="<?php echo $this->config->config['base_url']?>social/images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>social/css/main.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>social/css/style.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>social/css/color.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>social/css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">						
						
						<div class="friend-logo">
							<span><img src="<?php echo $this->config->config['base_url']?>social/images/goaldig2.png" alt=""></span>
						</div>						
					</div>	
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					
					<div class="log-reg-area regg">
						<h2 class="log-title">Register</h2>
						<div id="error-box2"></div>
						<form  method="post" id="registerform"> 
							<div class="form-group">	
							  <input type="text" required="required" name="name" id="name" />
							  <label class="control-label" for="input">First & Last Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" required="required" name="username" id="username1" />
							  <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name="password" id="password1"/>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name="confirmpassword" id="confirm-password"/>
							  <label class="control-label" for="input">Confirm Password</label><i class="mtrl-select"></i>
							</div>
							<div class="form-radio">
							  <div class="radio">
								<label>
								  <input type="radio" name="gender" value="male" checked="checked"/><i class="check-box"></i>Male
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio"  name="gender" value="female"  /><i class="check-box"></i>Female
								</label>
							  </div>
							</div>
							
							<div class="checkbox">
							  <label>
								<input type="hidden" name="plan" id="plan" value="<?=$plan_id?>" />
								<!-- <input type="checkbox" checked="checked"/><i class="check-box"></i>Accept Terms & Conditions ? -->
							  </label>
							</div>
							<a href="<?=$this->config->config['base_url']?>login" title="" class="text-success">Already have an account?</a>
							<div class="submit-btns">
								<button class="mtr-btn" type="submit"><span>Register</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<script src="<?php echo $this->config->config['base_url']?>social/js/main.min.js"></script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/script.js"></script>
	
	
	 <script src="<?php echo $this->config->config['base_url']?>backend/assets/js/vendor-all.min.js"></script>
     <script src="<?php echo $this->config->config['base_url']?>backend/assets/js/bootstrap.min.js"></script>
     <script src="<?php echo $this->config->config['base_url']?>backend/assets/js/pcoded.min.js"></script>
     <script src="<?php echo $this->config->config['base_url']?>backend/assets/js/sweetalert.min.js"></script>
     
	<script type="text/javascript" src="<?= $this->config->config['base_url']?>js/login.js?v=649"></script>
</body>	

</html>