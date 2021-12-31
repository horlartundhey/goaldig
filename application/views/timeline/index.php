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
				<a href="<?php echo $this->config->config['base_url']?>home" title=""><img src="<?php echo $this->config->config['base_url']?>social/images/goaldig1.png" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search" />
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
		<nav id="menu" class="res-menu">
			<ul>
				<li>
					<ul>
						<li><a href="#" title="">Home Social</a></li>
						<li><a href="#" title="">Home Social 2</a></li>
						<li><a href="#" title="">Home Company</a></li>
						<li><a href="#" title="">Login page</a></li>
						<li><a href="<?php echo $this->config->config['base_url']?>auth/logout" title="">Logout Page</a></li>
						<li><a href="#l" title="">news feed</a></li>
					</ul>
				</li>
				
			</ul>
		</nav>
		
	</div><!-- responsive header -->
	
	<div class="topbar stick">
		<div class="logo">
			<a title="" href="<?php echo $this->config->config['base_url']?>home"><img src="<?php echo $this->config->config['base_url']?>social/images/goaldig1.png" width="15%" alt=""></a>
		</div>
		
		<div class="top-area">
			<div class="top-search">
				<form method="post" class="">
					<input type="text" placeholder="Search Friend">
					<button data-ripple><i class="ti-search"></i></button>
				</form>
			</div>
			<ul class="setting-area">
				<!-- <li><a href="index.html" title="Home" data-ripple=""><i class="ti-home"></i></a></li> -->			
				
				<!-- <li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
					<div class="dropdowns languages">
						<a href="#" title=""><i class="ti-check"></i>English</a>
						<a href="#" title="">Arabic</a>
						<a href="#" title="">Dutch</a>
						<a href="#" title="">French</a>
					</div>
				</li> -->
			</ul>
			<div class="user-img">
			<?php if(isset($user['profile_picture']) && $user['profile_picture']!="" &&
file_exists("resources/profile/_profiles/".$user['profile_picture'])){?>
								<img src="
resources/profile/_profiles/<?=$user['profile_picture']?>?v=<?=time()?>" alt="" style="width:60%;">
								<?php }else{ ?>
								<img src="<?php echo $this->config->config['base_url']?>social/images/resources/noimage.jpg"  style="width:40%;" alt="">
								<?php } ?>
				<span class="status f-online"></span>
				<div class="user-setting">					
					<a href="<?php echo $this->config->config['base_url']?>Profile" title=""><i class="ti-user"></i> view profile</a>
					<a href="#" onclick="logout()" title=""><i class="ti-power-off"></i>log out</a>
				</div>
			</div>			
		</div>
	</div><!-- topbar -->
	<div class="fixed-sidebar left">
		<div class="menu-left">
			<ul class="left-menu">
				<!-- <li><a href="./social/insights.html" title="Dashboard" data-toggle="tooltip" data-placement="right"><i class="ti-magnet"></i></a></li>				 -->
				<li><a href="<?php echo $this->config->config['base_url']?>home" title="News feed" data-toggle="tooltip" data-placement="right"><i class="fa fa-star-o"></i></a></li>
				<li><a href="./social/forums-category.html" title="Resources Center" data-toggle="tooltip" data-placement="right"><i class="ti-stats-up"></i></a></li>
				<li><a href="<?php echo $this->config->config['base_url']?>goals" title="Set Goals" data-toggle="tooltip" data-placement="right"><i class="ti-import"></i></a></li>
				<!-- <li><a href="./social/forum-create-topic.html" title="Mentoring Session" data-toggle="tooltip" data-placement="right"><i class="ti-comment-alt"></i></a></li> -->
				<li><a href="<?php echo $this->config->config['base_url']?>Profile" title="Profile Setting" data-toggle="tooltip" data-placement="right"><i class="ti-panel"></i></a></li>
				<!-- <li><a href="faq.html" title="Faq's" data-toggle="tooltip" data-placement="right"><i class="ti-light-bulb"></i></a></li>
				<li><a href="timeline-friends.html" title="Friends" data-toggle="tooltip" data-placement="right"><i class="ti-themify-favicon"></i></a></li>
				<li><a href="widgets.html" title="Widgets" data-toggle="tooltip" data-placement="right"><i class="ti-eraser"></i></a></li>
				<li><a href="notifications.html" title="Notification" data-toggle="tooltip" data-placement="right"><i class="ti-bookmark-alt"></i></a></li>
			</ul> -->
		</div>
	</div>	
	<section>
		<div class="gap2 gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static left">									
									<div class="widget">
										<h4 class="widget-title">Recent Activity</h4>
										<ul class="activitiez">
											<?php if(!empty($activities)){
												foreach($activities as $activity){
											?>
											<li>
												<div class="activity-meta">
													<i><?=$activity['date']?></i>
													<span><a title=""><?=$activity['line']?> </a></span>
													<h6><a><?=$activity['name']?>.</a></h6>
												</div>
											</li>
										<?php }} ?>
											
										</ul>
									</div><!-- recent activites -->
									
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="new-postbox">
										<figure>
										<?php if(isset($user['profile_picture']) && $user['profile_picture']!="" &&
file_exists("resources/profile/_profiles/".$user['profile_picture'])){?>
								<img src="
resources/profile/_profiles/<?=$user['profile_picture']?>?v=<?=time()?>" alt="">
								<?php }else{ ?>
								<img src="<?php echo $this->config->config['base_url']?>social/images/resources/noimage.jpg" alt="">
								<?php } ?>
										</figure>
										<div class="newpst-input">
											<form method="post" id="createForm"  enctype="multipart/form-data" action="<?=$this->config->config['base_url']?>Messaging/create">
											<input type="hidden" name="post" value="yes" />
												<textarea rows="2" name="content" id="content" placeholder="write something"></textarea>
												<div class="attachments">
													<ul>
														<li>
															<i class="fa fa-music"></i>
															<label class="fileContainer">
																<input id= "music_file" name="music" type="file">
															</label>
														</li>
														<li>
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input id= "image_file" name="image" type="file">
															</label>
														</li>
														<!--
														<li>
															<i class="fa fa-video-camera"></i>
															<label class="fileContainer">
																<input type="file">
															</label>
														</li>
														<li>
															<i class="fa fa-camera"></i>
															<label class="fileContainer">
																<input type="file">
															</label>
														</li>
														-->
														<li>
															<button type="submit">Post</button>
														</li>
													</ul>
												</div>
											</form>
										</div>
									</div>
								</div><!-- add post new box -->
								<div class="loadMore">
								
								
								
								<?php if(isset($posts) && !empty($posts)){
										foreach($posts as $post){
									?>
								<div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
										  
											<figure>
											<?php if(isset($users[$post['user_id']]
['profile_picture']) && $users[$post['user_id']]
['profile_picture']!="" &&
file_exists("resources/profile/_profiles/".$users[$post['user_id']]
['profile_picture'])){?>
								<img src="
resources/profile/_profiles/<?=$users[$post['user_id']]
['profile_picture']?>?v=<?=time()?>" alt="">
								<?php }else{ ?>
								<img src="<?php echo $this->config->config['base_url']?>social/images/resources/noimage.jpg" alt="">
								<?php } ?>
											</figure>
											<div class="friend-name">
												<ins><a href="<?php echo $this->config->config['base_url']?>Profile" title="">
												<?=isset($users[$post['user_id']])?$users[$post['user_id']]['name']:""?>
												
												</a></ins>
												<span>published: <?=$post['date_created']?></span>
											</div>
											<div class="post-meta">
												<?php if($post['type']=="image"){?>
												<img src="<?php echo $this->config->config['base_url']?>resources/image/_images/<?=$post['file']?>" alt="">
												<?php } ?>
												<?php if($post['type']=="video"){?>
												<iframe width="" height="315" src="https://www.youtube.com/embed/5JJ_jqqpTMY" allow="autoplay;" allowfullscreen></iframe>
												<?php } ?>
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" data-toggle="tooltip" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<span class="comment" data-toggle="tooltip" title="Comments">
																<i class="fa fa-comments-o"></i>
																<ins>52</ins>
															</span>
														</li>
														<li>
															<span class="like" data-toggle="tooltip" title="like">
																<i class="ti-heart"></i>
																<ins>2.2k</ins>
															</span>
														</li>
														
														</li>
													</ul>
												</div>
												<div class="description">
													
													<p>
													<?=$post['content']?>	
													</p>
												</div>
											</div>
										</div>
										<div class="coment-area">
											<ul class="we-comet">
											<?php 
											if(isset($post['comments']) && !empty($post['comments'])){
												foreach($post['comments'] as $comment){
											?>
												<li>
													<div class="comet-avatar">
														<img src="<?php echo $this->config->config['base_url']?>social/images/resources/comet-1.jpg" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="<?php echo $this->config->config['base_url']?>Profile" title="">
															<?=isset($users[$post['user_id']])?$users[$post['user_id']]['name']:""?>
												
															</a></h5>
															<span><?=$comment['date_created']?></span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
														</div>
														<p><?=$comment['content']?></p>
													</div>

												</li>
											<?php }} ?>
												
												<li>
													<a href="#" title="" class="showmore underline">more comments</a>
												</li>
												<li class="post-comment">
													<div class="comet-avatar">
														<img src="<?php echo $this->config->config['base_url']?>social/images/resources/comet-2.jpg" alt="">
													</div>
													<div class="post-comt-box">
														<form  name="form_<?=$post['post_id']?>" name="form_<?=$post['post_id']?>" action="<?php echo $this->config->config['base_url']?>Messaging/createcomment/<?=$post['post_id']?>" method="post">
															<textarea id="<?=$post['post_id']?>" name="comment" placeholder="Post your comment"></textarea>
															<!-- <div class="add-smiles">
																<span class="em em-expressionless" title="add icon"></span>
															</div>
															<div class="smiles-bunch">
																<i class="em em---1"></i>
																<i class="em em-smiley"></i>
																<i class="em em-anguished"></i>
																<i class="em em-laughing"></i>
																<i class="em em-angry"></i>
																<i class="em em-astonished"></i>
																<i class="em em-blush"></i>
																<i class="em em-disappointed"></i>
																<i class="em em-worried"></i>
																<i class="em em-kissing_heart"></i>
																<i class="em em-rage"></i>
																<i class="em em-stuck_out_tongue"></i>
															</div> -->
															<button type="submit"></button>
														</form>	
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								
								<?php } } ?>
								</div>
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static right">
									<div class="widget">
										<h4 class="widget-title">Edit Profile</h4>	
										<div class="your-page">
											<figure>
												<a href="<?php echo $this->config->config['base_url']?>Profile" title="">
												<?php if(isset($user['profile_picture']) && $user['profile_picture']!="" &&
file_exists("resources/profile/_profiles/".$user['profile_picture'])){?>
								<img src="
resources/profile/_profiles/<?=$user['profile_picture']?>?v=<?=time()?>" alt="">
								<?php }else{ ?>
								<img src="<?php echo $this->config->config['base_url']?>social/images/resources/noimage.jpg" alt="">
								<?php } ?>
											</a>
											</figure>
											<div class="page-meta">
												<a href="<?php echo $this->config->config['base_url']?>Profile" title="" class="underline">My Profile</a>												
											</div>
											<div class="page-likes">
												
												<!-- Tab panes -->
												
											</div>
										</div>
									</div><!-- page like widget -->
									<div class="widget">
										<div class="banner medium-opacity bluesh">
											<div class="bg-image" style="background-image: url(<?php echo $this->config->config['base_url']?>social/images/resources/baner-widgetbg.jpg)"></div>
											<div class="baner-top">
												<span><img alt="" src="<?php echo $this->config->config['base_url']?>social/images/book-icon.png"></span>
												<i class="fa fa-ellipsis-h"></i>
											</div>
											<div class="banermeta">
												<p>
													Helping You Grow 
												</p>
																								
											</div>
										</div>											
									</div>
									<div class="widget stick-widget">
										<h4 class="widget-title">Profile intro</h4>
										<ul class="short-profile">
											<li>
												<span>about</span>
												<p><?php if(isset($user['about']) && $user['about']!="")
												{echo $user['about'];}?></p>
											</li>											
											<!-- <li>
												<span>favourit Book</span>
												<p>personal growth</p>
											</li> -->
										</ul>
									</div>
								</aside>
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
	

<!-- remove brand modal -->
<div class="modal fade " tabindex="-1" role="dialog" id="removeModal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Remove Post</h4>
      </div>

      <form role="form" action="<?php echo $this->config->config['base_url']?>Messaging/delete" method="post" id="removeForm">
        <div class="modal-body">
          <p>Do you really want to remove?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">

$(document).ready(function() {

  // submit the create from 
  $("#createForm").unbind('submit').on('submit', function() {
    var form = $(this);

    // remove the text-danger
    $(".text-danger").remove();
	
	var image_data = $('#image_file').prop('files')[0];
    //var form_data = new FormData();
    form.append('file', image_data);
	form_data.append('content', $("#content").val());
    $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: form.serialize(), // /converting the form data into array and sending it to server
      dataType: 'json',
      success:function(response) {

        //manageTable.ajax.reload(null, false); 

        if(response.success === true) {
          $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
            '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
          '</div>');


          // hide the modal
          //$("#addModal").modal('hide');
		  this.location.reload()

          // reset the form
          $("#createForm")[0].reset();
          $("#createForm .form-group").removeClass('has-error').removeClass('has-success');

        } else {

          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
              var id = $("#"+index);

              id.closest('.form-group')
              .removeClass('has-error')
              .removeClass('has-success')
              .addClass(value.length > 0 ? 'has-error' : 'has-success');
              
              id.after(value);

            });
          } else {
            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>');
          }
        }
      }
    }); 

    return false;
  });

});

// edit function
function editFunc(id)
{ 
  $.ajax({
    url: 'fetchCategoryDataById/'+id,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#edit_category_name").val(response.name);
      $("#edit_active").val(response.active);
      $("#edit_online_discount").val(response.online_discount);
      $("#edit_type").val(response.type);

      // submit the edit from 
      $("#updateForm").unbind('submit').bind('submit', function() {
        var form = $(this);

        // remove the text-danger
        $(".text-danger").remove();

        $.ajax({
          url: form.attr('action') + '/' + id,
          type: form.attr('method'),
          data: form.serialize(), // /converting the form data into array and sending it to server
          dataType: 'json',
          success:function(response) {

            manageTable.ajax.reload(null, false); 

            if(response.success === true) {
              $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
              '</div>');


              // hide the modal
              $("#editModal").modal('hide');
              // reset the form 
              $("#updateForm .form-group").removeClass('has-error').removeClass('has-success');

            } else {

              if(response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {
                  var id = $("#"+index);

                  id.closest('.form-group')
                  .removeClass('has-error')
                  .removeClass('has-success')
                  .addClass(value.length > 0 ? 'has-error' : 'has-success');
                  
                  id.after(value);

                });
              } else {
                $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                '</div>');
              }
            }
          }
        }); 

        return false;
      });

    }
  });
}

// remove functions 
function removeFunc(id)
{
  if(id) {
    $("#removeForm").on('submit', function() {

      var form = $(this);

      // remove the text-danger
      $(".text-danger").remove();

      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { category_id:id }, 
        dataType: 'json',
        success:function(response) {

          manageTable.ajax.reload(null, false); 

          if(response.success === true) {
            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
            '</div>');

            // hide the modal
            //$("#removeModal").modal('hide');
			location.reload();
          } else {

            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>'); 
          }
        }
      }); 

      return false;
    });
  }
}

</script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/main.min.js"></script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/script.js?v=8"></script>
	<script src="<?php echo $this->config->config['base_url']?>social/js/map-init.js"></script>

</body>	
</html>