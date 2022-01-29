<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'vendor/autoload.php'; 

class Model_email extends CI_Model {
	
function __construct(){
        parent::__construct();
}

function send_report($subject,$message,$email,$to=array()){
	//$content = sprintf(file_get_contents(VIEWPATH	.'templates/mail_template.html'),"Goal Digger","Goal Digger",$content,"info@goaldiggernetwork.ng");
	$this->sendmail($subject,$message,$email,$to);
}
	
function sendmail($email,$subject,$message,$bbc = false,$copyemail=array(),$attachment=array()){
	
	$to = $email;
	$emailList = array(
		
	);
	

	
	$mail = new PHPMailer(true);

	$mail->SMTPDebug = 0;                                        
	$mail->isSMTP();                                                                 
	$mail->Host       = "mail.goaldiggernetwork.ng";                     
	$mail->SMTPAuth   = true;                              
	$mail->Username   = "info@goaldiggernetwork.ng";                  
	$mail->Password   = "48bNOCDm){Vg";                         
	$mail->SMTPSecure = ''; 


	$mail->SMTPOptions = array(
	  'ssl' => array(
		  'verify_peer' => false,
		  'verify_peer_name' => false,
		  'allow_self_signed' => true
	  )
	);



	$mail->Port       = "26";//"80";   
	$mail->isHTML(true);                                   
	$mail->addReplyTo("noreply@goaldiggernetwork.ng", "noreply");
	$mail->setFrom('info@goaldiggernetwork.ng');
	
	if(is_array($email)){
		$mail->addAddress('info@goaldiggernetwork.ng');      // Add a recipient
		foreach($email as $bcopy){
			$mail->addBcc($bcopy);           // Add a recipient
		}
	}else{
		$mail->addAddress($to);  
	}
	if($bbc){
		foreach($emailList as $bcopy){
			$mail->addBcc($bcopy);           // Add a recipient
		}
	}
	
	if(!empty($copyemail)){
		foreach($copyemail as $copy){
			$mail->addCC($copy);           // Add a recipient
		}
	}
	
	                                
	$mail->Subject = $subject;
	$mail->Body    = $message;
	$mail->AltBody = strip_tags($message);
	
	if(!empty($attachment)){
		$content = $attachment['content'];
		$name = $attachment['name'];
		$mail->addStringAttachment($content, $name);
	}
	
	var_dump($mail);exit;
	
	try{
		//$mail->send();
	}catch(Exception $e){
		echo $e; 
	}
	
}


	
}

