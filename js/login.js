$("#error-box").hide();//css("display","none");
$("#error-box1").hide();//css("display","none");


$('#form_login').submit( function(e) {

	var username =  $("input#username").val();
	var pass = $("input#password").val();
	//var type = $("#type").val();
	
	$.ajax({
		        url: 'auth/login',
				method:'POST',
				dataType: 'json',
				data: {
						username: username,
						password: pass,
						//type:type,
						//p:$("input#p").val(),
						//id:$("input#id").val()
						},
				error: function(response){
							$('#error-box').html("Error loggin in");
							return false;
						},
				success: function(response){
						var statuss = response.login_status;
						
						if(statuss=="invalid"){
							var msg = '<div class="alert alert-danger alert-dismissible" id="error-box" >';
								msg+='<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
								msg+='<span aria-hidden="true">×</span></button>';
								msg+='<i class="fa fa-warning"></i><b> Invalid login detail</b></div>';
								
							$('#error-box').html(msg);
							$("#error-box").show();//css("display","true");
							return false;
						}else{
							//toastr.success('Login successfull!','Success');
							location.href=response.redirect_url;
						}
						return false;
		        }
    });
	
	return false;
	
});


$('#form_reset').submit( function(e) {
	
	var email =  $("input#email").val();
	var id =  $("input#membership_number").val();
	
	$.ajax({
		        url: baseurl+'auth/resetpass',
				method:'POST',
				dataType: 'json',
				data: {
						email: email,
						membership_number:id,
						},
				error: function(response){
							$('#error-box').html("Email Error");
							return false;
						},
				success: function(response){
						var statuss = response.login_status;
						if(statuss=="invalid"){
							//console.log(response);
							var msg = '<div class="alert alert-danger alert-dismissible" id="error-box" >';
								msg+='<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
								msg+='<span aria-hidden="true">×</span></button>';
								msg+='<i class="fa fa-warning"></i><b> Invalid email or membership number</b></div>';
								
							$('#error-box').html(msg);
							$("#error-box").show();//css("display","true");
							return false;
						}else{
							$('#error-box').html("");
							toastr.success('Password reset successfull!','Success');
							$("#reset-success").html(" <h3 style='text-align:center'>Password reset email has been sent.</h3><p style='text-align:center'>Please check your email inbox, to check reset instruction!</p>");
						}
						return false;
		        }
    });
	
	return false;
	
});



/* Registration form processor */
$('#registerform').submit( function(e) {

	/*
	var queryStringToHash = $('#registerform').serialize();
	
	 query_to_hash = function(queryString) {
	  var j, q;
	  q = queryString.replace(/\?/, "").split("&");
	  j = {};
	  $.each(q, function(i, arr) {
				arr = arr.split('=');
				return j[arr[0]] = arr[1];
			  });
			  return j;
		}

	//var queryStringToHash = "";
	var data = JSON.stringify(query_to_hash(queryStringToHash));
	
	var data = new FormData();
	jQuery.each(jQuery('#file')[0].files, function(i, file) {
		data.append('file-'+i, file);
	});
	
	
	*/
	
	 e.preventDefault();    
    var formData = new FormData(this);
	var pass = $("#password1").val();
	var conf = $("#confirm-password").val();
	
	if(pass!=conf){
				var msg = '<div class="alert alert-danger alert-dismissible" id="error-box2" >';
								msg+='<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
								msg+='<span aria-hidden="true">×</span></button>';
								msg+='<i class="fa fa-warning"></i><b> Password does not match</b></div>';
								
									
								$('#error-box2').html(msg);
								$("#error-box2").show();//css("display","true");
		return false;
	}
	
	$.ajax({
		        url: 'auth/register',
				method:'POST',
				type: 'POST',
				data: formData,
				error: function(response){
							$('#error-box2').html("Error registering");
							console.log(response);
							return false;
						},
				success: function(response){
					response = JSON.parse(response);
					console.log(response);
						var statuss = response.status;
						//var statuss = response.login_status;
						if(statuss!="success"){
							
								var msg = '<div class="alert alert-danger alert-dismissible" id="error-box2" >';
								msg+='<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
								msg+='<span aria-hidden="true">×</span></button>';
								msg+='<i class="fa fa-warning"></i><b> '+statuss+'</b></div>';
																
								$('#error-box2').html(msg);
								$("#error-box2").show();//css("display","true");
								location.href="#error-box1";
								return false;
						}else{
							//toastr.success('Registration successfull!','Success');
							//return false;
							var msg = '<div class="alert alert-success alert-dismissible" id="error-box2" >';
								msg+='<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
								msg+='<span aria-hidden="true">×</span></button>';
								msg+='<i class="fa fa-warning"></i><b> Registration successfull</b><br/><a href="'+response.url+'">Login to continue</a></div>';
																
								$('#error-box2').html(msg);
								$("#error-box2").show();//css("display","true");
							//location.href=response.url;
						}
						
		        },
				cache: false,
				contentType: false,
				processData: false
    });

	
	return false;
	
});


/* Changepassword form processor */
$('#password_form').submit( function(e) {
	
	var password = $("input#password").val();
	var confirmpass = $("input#password_confirm").val();
	
	if(password!=confirmpass){
		var msg = '<div class="alert alert-danger alert-dismissible" id="error-box" >';
			msg+='<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
			msg+='<span aria-hidden="true">×</span></button>';
			msg+='<i class="fa fa-warning"></i><b> New password does not match</b></div>';
								
			$('#error-box').html(msg);
			$("#error-box").show();
			return false;
	}
	
	$.ajax({
		        url: baseurl+'auth/verifypass',
				method:'POST',
				dataType: 'json',
				data: {
						oldpassword: $("input#old_pass").val(),
						password: password,
						member_id: $("input#member_id").val(),
						
						},
				error: function(response){
							$('#error-box').html("Error registering");
							console.log(response);
							return false;
						},
				success: function(response){
						console.log(response);
						var statuss = response.status;
						if(statuss!="success"){
							var msg = '<div class="alert alert-danger alert-dismissible" id="error-box" >';
								msg+='<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
								msg+='<span aria-hidden="true">×</span></button>';
								msg+='<i class="fa fa-warning"></i><b> '+statuss+'</b></div>';
								
							$('#error-box').html(msg);
							$("#error-box").show();
							return false;
						}else{
							location.href=baseurl+"profile";
							//$('#password_form').submit();
						}
						
		        }
    });

	
	return false;
	
});




