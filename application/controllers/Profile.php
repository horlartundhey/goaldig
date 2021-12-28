<?php
    class Profile extends CI_controller{

        function __construct(){
            parent::__construct();

            $this->load->database();
			$this->load->library('session');
			$this->load->model('goal_model');
			$this->load->library('form_validation');		
			$this->load->model('model_users');
			$this->load->model('model_messaging');

        }

        public function index(){
			if ($this->session->userdata('user_login') != 1)
             $this->loadUrl('login');
			 
			$data = array();            
            $data["title"] = "Set Goals For 2022";
            //to fetch goals
            $data['user'] =$this->model_users->get($this->session->userdata('user_id'));
			
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
            //to route the goals page
			$this->load->view('users/profile', $data);
            
				
        }

        public function update(){
			if ($this->session->userdata('user_login') != 1)
             $this->loadUrl('login');
			 
            $data = array();
          
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			
			if ($this->form_validation->run() == TRUE) {
				$data = array(
					'name' => $this->input->post('name'),
					'gender'=>$this->input->post('gender'),
					'about'=>$this->input->post('about'),
					'city'=>$this->input->post('city'),
					'phone'=>$this->input->post('phone'),
					'country'=>$this->input->post('country'),
				);
				
				$create = $this->model_users->update($this->session->userdata('user_id'),$data);
				
				if($create == true) {
					$this->session->set_flashdata('success', 'Successfully created');
					$this->loadUrl('Profile');
				}else {
					$this->session->set_flashdata('errors', 'Error occurred!!');
					$this->loadUrl('Profile');
				}
				
				
			}else {
				$errors =array();
				foreach ($_POST as $key => $value) {
					$errors[] = form_error($key);
				}
				$data['errors'] = implode(",",$errors);
			}
            $this->load->view('users/profile', $data);
        }
		
				
		
	function   loadUrl($url){
			header('location:'.$this->config->config['base_url'].$url);
			exit;
			
	}

    public function edit($id){
			if ($this->session->userdata('user_login') != 1)
             $this->loadUrl('login');
			 
			$data = array();
            $data["title"] = "Edit this Goal";

			
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'user_id'=>$this->session->userdata('user_id'),
					'date_created'=>date("Y-m-d"),
				);
				
				$update = $this->goal_model->update_goal($id,$data);
				
				if($update == true) {
					$this->session->set_flashdata('success', 'Successfully created');
					$this->loadUrl('goals');
				}else {
					$this->session->set_flashdata('errors', 'Error occurred!!');
					$this->loadUrl('goals');
				}
				
				
			}else {
				$errors =array();
				foreach ($_POST as $key => $value) {
					$errors[] = form_error($key);
				}
				$data['errors'] = implode(",",$errors);
			}
			$data['goal'] =  $this->goal_model->get_goals(array('id'=>$id,'user_id'=>$this->session->userdata('user_id')));
			if($data['goal']==null){
				$this->loadUrl('goals');
			}
            $this->load->view('goals/edit', $data);
    }
	
	public function changePassword(){
			if ($this->session->userdata('user_login') != 1)
				$this->loadUrl('login');
			 
			$data = array();
            $data["title"] = "Edit this Goal";

			
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('retype-password', 'Confirm Password', 'trim|required');
			$this->form_validation->set_rules('current-password', 'Current Password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'user_id'=>$this->session->userdata('user_id'),
					'date_created'=>date("Y-m-d"),
				);
				
				$update = $this->goal_model->update_goal($id,$data);
				
				if($update == true) {
					$this->session->set_flashdata('success', 'Successfully created');
					$this->loadUrl('goals');
				}else {
					$this->session->set_flashdata('errors', 'Error occurred!!');
					$this->loadUrl('goals');
				}
				
				
			}else {
				$errors =array();
				foreach ($_POST as $key => $value) {
					$errors[] = form_error($key);
				}
				$data['errors'] = implode(",",$errors);
			}
			
			$data['handle'] = $this;
			$data['user'] =  $this->model_users->get($this->session->userdata('user_id'));
			//var_dump($this->session->userdata); exit;
			if($data['user']==null){
				$this->loadUrl('Profile');
			}
            $this->load->view('users/edit-password', $data);
    }
		
    public function delete($id){
		if ($this->session->userdata('user_login') != 1)
             $this->loadUrl('login');
			 
		$data['goal'] =  $this->goal_model->get_goals(array('id'=>$id,'user_id'=>$this->session->userdata('user_id')));
		if($data['goal']!=null){
			$this->goal_model->delete_goal($id);
		}
		$this->loadUrl('goals');
		
    }
	
	   public function recentactivities(){
			
			$data = array();            
            
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
            //to route the goals page
			$this->load->view('users/template/activities', $data);
            
				
        }
		
		
    }