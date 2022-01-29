<?php
    class Goals extends CI_controller{

        function __construct(){
            parent::__construct();

            $this->load->database();
			$this->load->library('session');
			$this->load->model('Goal_model');
			$this->load->library('form_validation');

        }

        public function index(){
			$data = array();            
            $data["title"] = "Set Goals For 2022";
            //to fetch goals
			// $data['goals'] =$this->Goal_model->get($this->session->userdata('user_id'));

            $data['goals'] =$this->Goal_model->get_goals();

            //to route the goals page
			$this->load->view('goals/index', $data);
            
				
        }

        public function create(){

            $data = array();
            $data["title"] = "Add a New Goal For 2022";

			
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
			
			if ($this->form_validation->run() == TRUE) {
				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'user_id'=>$this->session->userdata('user_id'),
					'date_created'=>date("Y-m-d"),
				);
				
				$create = $this->Goal_model->create_goal($data);
				
				if($create == true) {
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
            $this->load->view('goals/create', $data);
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
				
				$update = $this->Goal_model->update_goal($id,$data);
				
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
			$data['goal'] =  $this->Goal_model->get_goals(array('id'=>$id,'user_id'=>$this->session->userdata('user_id')));
			if($data['goal']==null){
				$this->loadUrl('goals');
			}
            $this->load->view('goals/edit', $data);
    }
		
    public function delete($id){

		$data['goal'] =  $this->Goal_model->get_goals(array('id'=>$id,'user_id'=>$this->session->userdata('user_id')));
		if($data['goal']!=null){
			$this->Goal_model->delete_goal($id);
		}
		$this->loadUrl('goals');
		
    }
		
		
    }