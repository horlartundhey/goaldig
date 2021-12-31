<?php 

class ResourceCenter extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		//$this->not_logged_in();
		$this->load->library('session');
		$this->load->library('form_validation');
		// $this->load->helper('url');
		
		$this->data['page_title'] = 'Resource Center';
		$this->load->model('model_resources');
		$this->load->model('model_users');
	}

	
	public function index($type="")
	{
		if ($this->session->userdata('user_login') != 1)
             $this->loadUrl('login');
			  
		$user_id = $this->session->userdata('user_id');
		$data['user'] =$this->model_users->get($this->session->userdata('user_id'));
			
		$data['title'] = "Timeline";
		$users = $this->model_users->getArray(array('status'=>'active'));
		$userarray = array();
		foreach($users as $user){
			$userarray[$user['id']] = $user;
		}
		
		$data['users'] = $userarray;
		$stats = array(
		'audio'=>0,
		'pdf'=>0,
		'image'=>0,
		'others'=>0
		);
		$posts = $this->model_resources->getArray(array());
		foreach($posts as $post){
			if($post['type']=="pdf"){
				$stats['pdf']+=1;
			}else if($post['type']=="jpg" || $post['type']=="png" || $post['type']=="gif" ||  $post['type']=="jpeg"){
				$stats['image']+=1;
			}else if($post['type']=="mp3" || $post['type']=="audio" || $post['type']=="ogg"){
				$stats['audio']+=1;
			}else{
				$stats['others']+=1;
			}
		}
		
		rsort($posts);
	
		$data['stats'] = $stats;
		$data['posts']  = $posts;
		$this->load->view('resources/index', $data);
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
        		'title' => $this->input->post('content'),
				'user_id'=>$this->session->userdata('user_id'),
				'date_created'=>date("F, d Y h:i"),
				'type'=>'text'
        	);
			
			//var_dump($_FILES); exit;
			if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"]!=""){
				$data['file'] = $this->upload_file("imageres","image");
				$data['type'] = pathinfo($_FILES["image"]['name'], PATHINFO_EXTENSION);//"image";
			}else if(isset($_FILES["document"]["name"]) && $_FILES["document"]["name"]!=""){
				//var_dump($_FILES);exit;
				$data['file'] = $this->upload_file("documentres","document");
				$data['type'] = pathinfo($_FILES["document"]['name'], PATHINFO_EXTENSION);//"document";
			}
			
        	$create = $this->model_resources->create($data);	
			
			if($create == true) {
        		$this->session->set_flashdata('success', 'Successfully created');
        		$this->loadUrl('ResourceCenter');
        	}else {
        		$this->session->set_flashdata('errors', 'Error occurred!!');
        		$this->loadUrl('ResourceCenter');
        	}
        }else {
			$response['success'] = false;
			$errors = "";
        	foreach ($_POST as $key => $value) {
        		$response['errors'][$key] = form_error($key);
				$errors.=form_error($key).",";
        	}

			$this->session->set_flashdata('errors', $errors);
        }
		
		$this->loadUrl('ResourceCenter');
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
			
        	$create = $this->model_resources->createcomment($data);
			
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
        $config['upload_path'] = '/goaldig/resources/'.$type;
        
		if($type=="imageres"){
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '1000';
		}else if($type=="documentres"){
			$config['allowed_types'] = 'mp3|ogg|pdf|doc|docx|';
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