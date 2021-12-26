<?php
    class Goals extends CI_controller{

        function __construct(){
            parent::__construct();

            $this->load->database();
			$this->load->library('session');
			$this->load->model('goal_model');

        }

        public function index(){
			$data = array();            
            $data["title"] = "Set Goals For 2022";
            //to fetch goals
            $data['goals'] =$this->goal_model->get_goals();

            //to route the goals page
			$this->load->view('goals/index', $data);
            
				
        }

        public function create(){

            $data = array();
            $data["title"] = "Add a New Goal For 2022";


            $this->load->view('goals/create', $data);
        }
    }