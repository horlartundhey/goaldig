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
	<script src="http://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	
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
			<div class="user-img">
			<?php if(isset($user['profile_picture']) && $user['profile_picture']!="" &&
file_exists("resources/profile/_profiles/".$user['profile_picture'])){?>
								<img src="
resources/profile/_profiles/<?=$user['profile_picture']?>?v=<?=time()?>" alt="" style="width:48px">
								<?php }else{ ?>
								<img src="<?php echo $this->config->config['base_url']?>social/images/resources/noimage.jpg"  style="width:48px;" alt="">
								<?php } ?>
				<span class="status f-online"></span>
				<div class="user-setting">					
					
					<a href="#" onclick="logout()" title=""><i class="ti-power-off"></i>log out</a>
				</div>
			</div>			
		</div>
	</div><!-- topbar -->

	<section>
		<div class="gap color-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">						
                    <div class="central-meta">
										<div class="editing-info">
											<h5 class="f-title"><i class="fa fa-check"></i>Add a New Goal</h5>
											<p class="login-box-msg" style="color:red"><?=isset($errors)?$errors:""?></p>
											<form method="post" action="<?php echo $this->config->config['base_url']?>goals/create">
												<div class="form-group">	
												  <input type="text" id="input" name="title" required="required"/>
												  <label class="control-label" for="input">Title</label><i class="mtrl-select"></i>
												</div>
												<div class="form-group">	
												  <input type="text"   required="required" name="description"/>
												  <label class="control-label" for="input">Description</label><i class="mtrl-select"></i>
												</div>												
												<div class="submit-btns">													
													<button type="submit" class="mtr-btn"><span>Create</span></button>
												</div>
											</form>
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
					<span class="copyright"><a target="_blank" href="https://www.templateshub.net">Goal Digger</a></span>
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
	 <script>
                CKEDITOR.replace( 'editor1' );
            </script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/main.min.js"></script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/script.js"></script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/map-init.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>	
</html>