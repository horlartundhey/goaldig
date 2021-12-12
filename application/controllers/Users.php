<?php

class Users extends CI_Controller {


		function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->model('crud_model');
				$this->table_map = array(
					'voters'=>'voter',
					'elections'=>'election',
					'candidates'=>'candidate',
					'posts'=>'post',
					'settings'=>'setting',
				);
				
				
				$this->action_map = array(
					'voter'=>array('create','edit','delete','update'),
					'election'=>array('create','edit','delete','update','close'),
					'candidate'=>array('create','edit','delete','update'),
					'post'=>array('create','edit','delete','update'),
					'setting'=>array('update','update_logo'),
				);
				
				$this->attached_map = array(
					'candidate'=>array('election','post'),
					'candidates'=>array('election','post'),
					'voters2'=>array('voter'),
					'election'=>array('post'),
					'dashboard'=>array('post','candidate','voter','election'),
					'votingresults'=>array('election','post'),
					'profile'=>array('admin'),
				);
				
			   /*cache control*/
				$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
				$this->output->set_header('Pragma: no-cache');	
		}
		
        public function view($page = 'dashboard',$param2='',$param3=''){
			 if ($this->session->userdata('user_login') != 1)
              $this->loadUrl('home');

				$data = array('page'=>$page);
				
				if (! file_exists(APPPATH.'/views/users/'.$page.'.php') && ! file_exists(APPPATH.'/views/users/'.$page.'s.php') ){
						show_404();
				}
				
				
				if(isset($this->table_map[$page])){
					$data[$page.'_data'] = $this->load_data($this->table_map[$page]);
				}
				
				if(isset($this->attached_map[$page])){
					foreach($this->attached_map[$page] as $extra){
						$data[$extra.'s'] = $this->load_data($extra);
					}
				}
				
				if(isset($this->action_map[$page]) && in_array($param2,$this->action_map[$page])){
					$data[$page] = $this->do_action($page,$param2,$param3);
				}
				$data['settings'] = $this->db->get("setting")->result_array();
				
				
				$this->load->view('templates/header', $data);
				$this->load->view('users/'.$page, $data);
				$this->load->view('templates/footer', $data);
				
        }
		
        public function home(){
			$data = array();
			//var_dump("hello");exit;
			if ($this->session->userdata('user_login') != 1)
				$this->load->view('index', $data);
			else	
				$this->load->view('users/index', $data);
				
        }
		
		
		function load_data($table){			
			return $this->db->get($table)->result_array();
		}
		
		
		function do_action($table,$action,$param=''){
			
			if ($action == 'create') {
				foreach($_POST as $key=>$value){
					if(is_array($value))
						$value=implode(",",$value);
					
					$data[$key]=$value;
				}		

					
				$this->db->insert($table , $data);
				$id = $this->db->insert_id();
				if (!empty($_FILES)) {
					foreach($_FILES as $key=>$value){
							$name = $id;
							if(move_uploaded_file($_FILES[$key]['tmp_name'], "uploads/".$table.'_files/'.$id.'.png')){
								$data[$key] = $id.".png";
								$this->db->where($table."_id",$id);
								$this->db->update($table,$data);								
							}
					}
				}
					
				$this->session->set_flashdata('flash_message' , 'Data added successfully');
				$this->loadUrl($table.'s');
			}else if($action=='edit'){
				return $this->db->get_where($table,array($table.'_id'=>$param))->row_array();
			}else if ($action == 'update') {
				foreach($_POST as $key=>$value){
					if(is_array($value))
						$value=implode(",",$value);
					
					$data[$key]=$value;
				}	
				
		
				if (!empty($_FILES)) {
					foreach($_FILES as $key=>$value){
							$name = $param;
							if(move_uploaded_file($_FILES[$key]['tmp_name'], "uploads/".$table.'_files/'.$name.'.png')){
								$data[$key] = $name.".png";
							}
					}
				}
				$this->db->where($table.'_id' , $param);
				$this->db->update($table , $data);
				
				$this->session->set_flashdata('flash_message' , 'Data updated');
				$this->loadUrl($table.'s');
			}else if ($action == 'close') {
				
				$this->db->where($table.'_id' , $param);
				$this->db->update($table , array('status'=>'closed'));
				
				$this->session->set_flashdata('flash_message' , 'Data updated');
				$this->loadUrl($table.'s');
			}else if ($action == 'update_logo') {
				
				if (!empty($_FILES)) {
					foreach($_FILES as $key=>$value){
						
							$name = $param;
							if(move_uploaded_file($_FILES[$key]['tmp_name'], "uploads/".$table.'_files/'.$name.'.png')){
								$data[$key] = $name.".png";
								$this->db->where($table.'_id' , $param);
								$this->db->update($table , $data);
							}
					}
				}				
				
				$this->session->set_flashdata('flash_message' , 'Data updated');
				$this->loadUrl($table.'s');
			}else if ($action== 'delete') {
				$this->db->where($table.'_id' , $param);
				$this->db->delete($table);
				if(file_exists("uploads/".$table."_files/".$param.".png")){
					unlink("uploads/".$table."_files/".$param.".png");
				}
				$this->session->set_flashdata('flash_message' , 'data_deleted');
				$this->loadUrl($table.'s');
			}
        
		}
		
		function get_result(){
			if ($this->session->userdata('user_login') != 1)
              $this->loadUrl('login');
				
			  $election_id = $this->input->post('election_id');
			  $post_id = $this->input->post('post_id');
			  $results = array();
								$data['election'] = $election =  $this->db->get_where("election",array('election_id'=>$election_id))->row_array();
								$data['post'] =  $post = $this->db->get_where("post",array('post_id'=>$post_id))->row_array();
								$da = array();
								
								$candids = array();
								$candidates = $this->db->get_where("candidate",array('election_id'=>$election_id,'post_id'=>$post_id))->result_array();
								$highest = 0;
								foreach($candidates as $candidate){
									
									$votes = $this->db->query("SELECT sum(weight) as total FROM vote WHERE election_id='{$election_id}' AND candidate_id='{$candidate['candidate_id']}' AND post_id='{$post['post_id']}'")->row_array();
									$candidate['votes'] = isset($votes['total'])?$votes['total']:0;
									if($candidate['votes']>$highest){
										$highest =$candidate['votes'];
										$candidate['status'] = '<span style="color:green"><b>Winner</b></span>';
									}else{
										$candidate['status'] = '';
									}
									$candids[] = $candidate;
								}
								$data['candidates'] = $candids;
								$this->load->view('templates/breakdown.php', $data);
		}
		
		function   loadUrl($url){
			header('location:'.$this->config->config['base_url'].$url);
			exit;
			
		}
		
		
		function get_server_info(){
			return $_SERVER["SERVER_NAME"];
		}
		
		function validate_request(){		
			$referrer = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"";
			$url = explode("/",$referrer);
			$referer = isset($url[2])?$url[2]:"";
			$server = $this->get_server_info();
		
			if($server!=$referer){
				$this->loadUrl(""); 
			}
		}

}
