<?php 

class Messaging extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		//$this->not_logged_in();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url');
		
		$this->data['page_title'] = 'Timeline';
		$this->load->model('model_messaging');
		$this->supportedMedia = array("image","video","audio");
	}

	
	public function index($type="")
	{
		if ($this->session->userdata('user_login') != 1)
             $this->loadUrl('login');
			  
		$user_id = $this->session->userdata('user_id');
		$data['title'] = "Timeline";
		$data['posts'] = $this->model_messaging->getArray(array('user_id'=>$this->session->userdata('user_id')));
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
				'date_created'=>date("Y-m-d"),
				'type'=>'text'
        	);
			
        	$create = $this->model_messaging->create($data);
			/*
			if($create == true) {
        		$this->session->set_flashdata('success', 'Successfully created');
        		$this->loadUrl('Messaging');
        	}else {
        		$this->session->set_flashdata('errors', 'Error occurred!!');
        		$this->loadUrl('Messaging');
        	}
			*/
			if($create == true) {
        		$response['success'] = true;
        		$response['messages'] = 'Succesfully created';
        	}
        	else {
        		$response['success'] = false;
        		$response['messages'] = 'Error in the database while creating the brand information';			
        	}
        	
        }else {
			$response['success'] = false;
        	foreach ($_POST as $key => $value) {
        		$response['messages'][$key] = form_error($key);
        	}
        }

        echo json_encode($response);
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
	
	
		public function upload_file($type)
    {	
		$key = 'media_data';
        $config['upload_path'] = 'resources/'.$type;
        
		if($type=="slides"){
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '1000';
		}else if($type=="sounds"){
			$config['allowed_types'] = 'mp3|ogg';
			$config['max_size'] = '1000000';
		}else if($type=="videos"){
			$config['allowed_types'] = 'mp4|wav';
			$config['max_size'] = '10000000';
		}
		
		
		$count = count($_FILES[$key]["name"]);
		$output = '';
		$name = uniqid();
		
		$bulky = array();	
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