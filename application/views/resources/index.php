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
				<a href="index.html" title=""><img src="<?php echo $this->config->config['base_url']?>social/images/goaldig1.png" style="width:30%;" alt=""></a>
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
	
	<div class="topbar transparent">
		<div class="logo">
			<a title="" href="<?php echo $this->config->config['base_url']?>home"><img src="<?php echo $this->config->config['base_url']?>social/images/goaldig1.png" width="15%" alt=""></a>
		</div>			
	</div><!-- topbar transparent header -->
	
	<section>
		<div class="ext-gap bluesh high-opacity">
			<div class="content-bg-wrap" style="background: url(<?php echo $this->config->config['base_url']?>social/images/resources/animated-bg2.png)"></div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="top-banner">
							<h1>Resources Center</h1>
							<nav class="breadcrumb">							  
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area animated -->
	
	<section>
		<div class="gap100">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="forum-warper">
							<h5>Upload Resources PDF Materials Here:</h5>
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
							<form method="post" id="createForm"  enctype="multipart/form-data" action="<?=$this->config->config['base_url']?>ResourceCenter/create">
											<input type="hidden" name="post" value="yes" />
												<textarea rows="1" name="content" required id="content" placeholder="Share resources"></textarea>
												<div class="attachments">
													<ul>
														<li>
															<i class="fa fa-file"></i>
															<label class="fileContainer">
																<input  id= "music_file" name="document" type="file">
															</label>
														</li>
														
														
														<li>
															<button type="submit">Share</button>
														</li>
													</ul>
												</div>
											</form>
							
							<br><br>							
							<div class="post-filter-sec">
								<form method="post" class="filter-form">
									<input type="post" placeholder="Search Resources">
									<button><i class="ti-search"></i></button>
								</form>
								<div class="purify">																		
									<a href="#" title="">Search</a>
								</div>
							</div>
						</div>
						<div class="forum-list">
							<table class="table table-responsive">
								<thead>
									<tr>
										<th scope="col">Latest Post:</th>										
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
								<?php if(isset($posts) && !empty($posts)){
									foreach($posts as $post){
									?>
									<tr>
										<td>
											<i class="fa fa-comments"></i> 
											
											<?php if($post['file']!=""){?>
											<a target="_blank" href="<?php echo $this->config->config['base_url']?>resources/documentres/_documents/<?=$post['file']?>" title=""><?=$post['title']?></a>
											<?php }else{?>
											<a target="_blank" href="<?=$post['title']?>" title=""><?=$post['title']?></a>
											<?php } ?>
											<h6>Posted by by: <a href="#" title="">
											<?=isset($users[$post['user_id']])?$users[$post['user_id']]['name']:""?>
											</a></h6>
										
										</td>
										
									</tr>
								<?php }} ?>
									
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-lg-3">
						<aside class="sidebar full-style">
							<div class="widget">								
							</div>
							<div class="widget">
								<h4 class="widget-title">Resources Statistics</h4>
								<ul class="forum-static">	
									<?php if(isset($stats) && !empty($stats)){
										foreach($stats as $key=>$value){
										?>
									
									<li>
										<a href="#" title=""><?=ucwords($key)?>'s  Posted</a>
										<span><?=$value?></span>
									</li>
									<?php }}?>
									
								</ul>
							</div>
						</aside>	
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- <section>
		<div class="getquot-baner">
			<span>Want to join our awesome forum and start interacting with others?</span>
			<a href="#" title="">Sign up</a>
		</div>
	</section>
	 -->
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