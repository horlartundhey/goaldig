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
					<?php if(isset($users) && !empty($users)){
										foreach($users as $user){
									?>
									
						<div class="col-lg-4 col-md-4">
							<br><br>
							<div class="knowldeg-box">
                            <div class="nearly-pepls">
                              
								<a href="time-line.html" title="">
									
								<?php if(isset($user['profile_picture']) && $user['profile_picture']!="" &&file_exists("resources/profile/_profiles/".$user['profile_picture'])){?>
									<img src="<?php echo $this->config->config['base_url']?>resources/profile/_profiles/<?=$user['profile_picture']?>?v=<?=time()?>" alt="" style="width:47%;">
											<?php }else{ ?>
												<img src="<?php echo $this->config->config['base_url']?>social/images/resources/noimage.jpg" alt="">
											<?php } 
											// var_dump($users)
											
											?>
								
								</a>							  
                            </div>								
								<span><?=$user['name']?></span>
								<p><?=$user['about']?></p>
								<!-- <a href="#" title="" class="underline btn btn-primary">View Profile</a> -->
                                <button type="button" onclick="loadDetaill('<?=$user['id']?>')" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">View Profile</button>                               

                                <a href="#" title="" class="underline btn btn-warning text-light" onclick="sendDetaillMail('<?=$user['username']?>')" data-toggle="modal" data-target="#exampleModal1Center">Send a Message!</a>
							</div>
						</div>
						<?php }} ?>

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
                                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <section>
                                    <div class="about">
										<div class="personal">											
											<p id="about"><span id="about" >
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
											</p>
										</div>
										<div class="d-flex flex-row mt-2">
											<ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" >
												<li class="nav-item">
													<a href="#basic" class="nav-link active" data-toggle="tab" >Basic info</a>
												</li>											
												<li class="nav-item">
													<a href="#work" class="nav-link" data-toggle="tab" >Career</a>
												</li>																								
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="basic" >
													<ul class="basics">
														<li><i class="ti-user"></i><span id="name">sarah grey</span></li>
														<li><i class="ti-map-alt"></i><span id="city" >live in Dubai</span></li>
														<li><i class="ti-mobile"></i><span id="phone_number" >+1-234-345675</span></li>
														<li><i class="ti-email"></i><a href="" class="__cf_email__" data-cfemail=""><span id="email" >[email&#160;protected]</span></a></li>
														
													</ul>
												</div>
												<div class="tab-pane fade" id="location" role="tabpanel">
													<div class="location-map">
														<div id="map-canvas"></div>
													</div>
												</div>
												<div class="tab-pane fade" id="work" role="tabpanel">
													<div>
														
														<a href="#" title="">Career</a>
														<p><span id="career" >work as autohr in envato themeforest from 2013</span></p> 
														
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

								<!-- Modal2 -->
                                <div class="modal fade" id="exampleModal1Center" tabindex="-1" role="dialog" aria-labelledby="exampleModal1CenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
									<form method="post" action="<?php echo $this->config->config['base_url']?>users/sendemailer">
									<div class="form-group">
												
												<input type="text" id="user_email" name="email">
											</div>
										<div class="form-group">
												<label for="exampleFormControlTextarea1">Send a Message</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
											</div>
											<button type="submit" class="btn btn-success" >Submit</button>
										</form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <!-- end Modal2 -->
	
	
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

		function loadDetaill(id){
			$.ajax({
				url : "<?php echo $this->config->config['base_url']?>users/singleUser/"+id, // give complete url here
				type : 'post',
				success : function(data){
					//alert('success');
					console.log(data);
					data = JSON.parse(data);
					$("#name").html(data.name),
					$("#city").html(data.city),
					$("#phone_number").html(data.phone),
					$("#email").html(data.username),
					$("#about").html(data.about),
					$("#career").html(data.career)
				}
			});
		}

		function sendDetaillMail(username){
			$("#user_email").val(username);
		}

	</script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/main.min.js"></script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/script.js"></script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/map-init.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>


</body>	
</html>