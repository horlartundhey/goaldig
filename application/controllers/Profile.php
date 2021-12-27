<?php
    class Profile extends CI_controller{

        function __construct(){
            parent::__construct();

            $this->load->database();
			$this->load->library('session');
			$this->load->model('goal_model');
			$this->load->library('form_validation');		
			$this->load->model('model_users');

        }

        public function index(){
			$data = array();            
            $data["title"] = "Set Goals For 2022";
            //to fetch goals
            $data['user'] =$this->model_users->get($this->session->userdata('user_id'));

            //to route the goals page
			$this->load->view('users/profile', $data);
            
				
        }

        public function update(){

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
		
    public function delete($id){

		$data['goal'] =  $this->goal_model->get_goals(array('id'=>$id,'user_id'=>$this->session->userdata('user_id')));
		if($data['goal']!=null){
			$this->goal_model->delete_goal($id);
		}
		$this->loadUrl('goals');
		
    }
		
		
    }