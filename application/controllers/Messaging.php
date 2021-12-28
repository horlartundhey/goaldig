<?php 

class Messaging extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		//$this->not_logged_in();
		$this->load->library('session');
		$this->load->library('form_validation');
		// $this->load->helper('url');
		
		$this->data['page_title'] = 'Timeline';
		$this->load->model('model_messaging');
		$this->load->model('model_users');
		$this->supportedMedia = array("image","video","audio");
	}

	
	public function index($type="")
	{
		if ($this->session->userdata('user_login') != 1)
             $this->loadUrl('login');
			  
		$user_id = $this->session->userdata('user_id');
		$data['title'] = "Timeline";
		$users = $this->model_users->getArray(array('status'=>'active'));
		$userarray = array();
		foreach($users as $user){
			$userarray[$user['id']] = $user;
		}
		
		$data['users'] = $userarray;
		$posts = $this->model_messaging->getArray(array('user_id'=>$this->session->userdata('user_id')));
		foreach($posts as $key=>$value){
			$posts[$key]['comments'] = $this->model_messaging->getCommentArray(array(
			'user_id'=>$this->session->userdata('user_id'),
			'post_id'=>$value['post_id']
			
			));
		}
		rsort($posts);
		
			$activities = $this->model_messaging->getRecentActivities();
			$users = $this->model_users->getArray(array('status'=>'active'));
			$userarray = array();
			foreach($users as $user){
				$userarray[$user['id']] = $user;
			}
			
			$activitylist = array();
			foreach($activities as $activity){
				if(isset($userarray[$activity['user_id']])){
					$user = $userarray[$activity['user_id']];
					$post = array(
						'name'=>$user['name'],
						'content'=>$activity['content'],
						'date'=>$activity['date_created']
						);
					if(isset($activity['type']) && $activity['type']=="text"){
						$post['line'] = "Posted your status. “".$activity['content']."”";
					}else if(isset($activity['type']) && $activity['type']=="image"){
						$post['line'] = "Shared image on timeline. ";
					}else if(isset($activity['type']) && $activity['type']=="video"){
						$post['line'] = "Shared video on timeline. ";
					}else{
						$post['line'] = "Commented on post";
					}
					$activitylist[] = $post;
				}
			}
			
			$data['activities'] = $activitylist;
		
		$data['posts']  = $posts;
		$this->load->view('timeline/index', $data);
	}


	/*
	* Its checks the company form validation 
	* and if the validation is successfully then it inserts the data into the database 
	* and returns the json format operation messages
	*/
	public function create()
	{


		$response = array();


		$this->form_validation->set_rules('content', 'Content', 'trim|required');
		
        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'content' => $this->input->post('content'),
				'user_id'=>$this->session->userdata('user_id'),
				'date_created'=>date("F, d Y h:i"),
				'type'=>'text'
        	);
			
			if(isset($_FILES["image"]) && !empty($_FILES["image"])){
				$data['file'] = $this->upload_file("image","image");
				$data['type'] = "image";
			}
			
        	$create = $this->model_messaging->create($data);
			
			if($create == true) {
        		$this->session->set_flashdata('success', 'Successfully created');
        		$this->loadUrl('Messaging');
        	}else {
        		$this->session->set_flashdata('errors', 'Error occurred!!');
        		$this->loadUrl('Messaging');
        	}
			/*
			if($create == true) {
        		$response['success'] = true;
        		$response['messages'] = 'Succesfully created';
        	}
        	else {
        		$response['success'] = false;
        		$response['messages'] = 'Error in the database while creating the brand information';			
        	}
        	*/
        }else {
			$response['success'] = false;
        	foreach ($_POST as $key => $value) {
        		$response['messages'][$key] = form_error($key);
        	}
        }
		
		$this->loadUrl('Messaging');
        //echo json_encode($response);
	}
	/*
	* Its checks the company form validation 
	* and if the validation is successfully then it inserts the data into the database 
	* and returns the json format operation messages
	*/
	public function createcomment($id)
	{


		$response = array();


		$this->form_validation->set_rules('comment', 'Content', 'trim|required');
		
        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'content' => $this->input->post('comment'),
				'user_id'=>$this->session->userdata('user_id'),
				'post_id'=>$id,
				'date_created'=>date("F, d Y h:i"),
        	);
			
        	$create = $this->model_messaging->createcomment($data);
			
			if($create == true) {
        		$this->session->set_flashdata('success', 'Successfully created');
        		$this->loadUrl('Messaging');
        	}else {
        		$this->session->set_flashdata('errors', 'Error occurred!!');
        		$this->loadUrl('Messaging');
        	}
			
        }else {
			$response['success'] = false;
        	foreach ($_POST as $key => $value) {
        		$response['messages'][$key] = form_error($key);
        	}
        }
		
		$this->loadUrl('Messaging');
        //echo json_encode($response);
	}
	

	/*
	* It checks if it gets the group id and retreives
	* the group information from the group model and 
	* returns the data into json format. 
	* This function is invoked from the view page.
	*/
	public function fetch($id) 
	{
		if($id) {
			$data = $this->model_media->getMediaData($id);
			$group = $this->model_media->getMediaGroup($id);
			$data['groups'] = $group['id'];
			echo json_encode($data);
		}

		return false;
	}

	   /*
    * This function is invoked from another function to upload the image into the assets folder
    * and returns the image path
    */
	
	
		public function upload_file($type,$key){	
		//$key = 'media_data';
        $config['upload_path'] = '/goaldiga/resources/'.$type;
        
		if($type=="image"){
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '1000';
		}else if($type=="music"){
			$config['allowed_types'] = 'mp3|ogg';
			$config['max_size'] = '1000000';
		}
		
		
		//$count = count($_FILES[$key]["name"]);
		$output = '';
		$name = uniqid();
		
		$bulky = array();
		$config['file_name'] =  $name;
				
				
				
				$this->load->library('upload', $config);
				//var_dump($this->upload->do_upload('file'));
				if ( ! $this->upload->do_upload($key)){
					$error = $this->upload->display_errors();
					return $error;
				}else{
					
					//$data = array('upload_data' => $this->upload->data());
					$type = explode('.', $_FILES[$key]['name']);
					$type = $type[count($type) - 1];
					$path = $config['file_name'].'.'.$type;//$config['upload_path'].'/'.$config['file_name'].'.'.$type;
					
					$output.=$path.',';
					
					//}        
				}
		/*		
		  for($i=0;$i<$count;$i++){
			
			if(!empty($_FILES[$key]['name'][$i])){
				$config['file_name'] = null;
				$_FILES['file']['name'] = $_FILES[$key]['name'][$i];
				$_FILES['file']['type'] = $_FILES[$key]['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES[$key]['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES[$key]['error'][$i];
				$_FILES['file']['size'] = $_FILES[$key]['size'][$i];
				
				$config['file_name'] =  $name."-".$i;
				
				
				
				$this->load->library('upload', $config);
				//var_dump($this->upload->do_upload('file'));
				if ( ! $this->upload->do_upload('file')){
					$error = $this->upload->display_errors();
					return $error;
				}else{
					
					//$data = array('upload_data' => $this->upload->data());
					$type = explode('.', $_FILES['file']['name']);
					$type = $type[count($type) - 1];
					
					
					if($i==0){
						$path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
						
					}else if($i>0 && isset($bulky[0])){
						$nm = explode(".",$bulky[0]);
						$path = $nm[0]."".$i.".".$nm[1];
					}
					
					$output.=$path.',';
					$bulky[] = $path;
					//}        
				}
			}
		  }
		  */
		  
		  return trim($output,",");
    }

	function keyValueMap($data){
		$result = array();
		foreach($data as $key=>$value){
			$result[$value['id']] = $value;
		}
		return $result;
	}
		
		
	function   loadUrl($url){
			header('location:'.$this->config->config['base_url'].$url);
			exit;
			
	}
		

}