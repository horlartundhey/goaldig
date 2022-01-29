<?php

class Users extends CI_Controller {


		function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->model('crud_model');
				$this->load->model('model_users');
				$this->load->model('model_transaction');
				
				$this->load->model('model_email');
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
              $this->loadUrl('index');

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
				$this->load->view('index', $data);
				
        }
		
		public function membership(){
			$data = array();
			$data["title"] = "Welcome to the Membership Plans we have";
			$data['plans'] = $this->db->get("plans")->result_array();
			$this->load->view('membership',$data);
		}
		
		public function network(){
			$data = array();
			$data["title"] = "Networking is as Important to us as our Goals";
			$data['users'] = $this->model_users->getArray(array('status'=>'active'));
			// var_dump($data['users']);
			$this->load->view('network/index', $data);
		}
		

		public function singleUser($id){
			//$data = array();
			//$data["title"] = "Networking is as Important to us as our Goals";
			$user = $this->model_users->getArray(array('id'=>$id));
			if(!empty($user))
				echo json_encode($user[0]);
			else
				echo json_encode(array());
			 
		}


		public function sendemailer(){
			//$data = array();
			// var_dump($_POST);
			// exit
			$email = $_POST['email'];
			$message = $_POST['message'];
			$subject="";
		
			$this->model_email->send_report($subject,$message,$email);
			//$data["title"] = "Networking is as Important to us as our Goals";
			// $user = $this->model_users->getArray(array('id'=>$id));

			// if(!empty($user))
			// 	echo json_encode($user[0]);
			// else
			// 	echo json_encode(array());
			 
		}

		public function completed(){
			if($this->session->flashdata('completed_message')==null || $this->session->flashdata('completed_message')==""){
				 $this->loadUrl('index');
			}
			$data = array();
			$data["title"] = "Transaction completed";
		
			$this->load->view('completed',$data);
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
		
		
			
		public function complete_flutter_transaction($action=''){
				//var_dump($_GET); exit;
				if($action=="pay" && isset($_GET['tx_ref']) ){											
					$tid = $_GET['tx_ref'];				
					if($tid!=""){
							$curl = curl_init();
							$reference = isset($_GET['transaction_id']) ? $_GET['transaction_id'] : '';
							if(!$reference){
							  //die('No reference supplied');
							  $this->loadUrl("checkout");
							}

							$curl = curl_init();
							curl_setopt_array($curl, array(
							  CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/".$reference."/verify" ,
							  CURLOPT_RETURNTRANSFER => true,
							  CURLOPT_ENCODING => "",
							  CURLOPT_MAXREDIRS => 10,
							  CURLOPT_TIMEOUT => 0,
							  CURLOPT_FOLLOWLOCATION => true,
							  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							  CURLOPT_CUSTOMREQUEST => "GET",
							  CURLOPT_HTTPHEADER => array(
								"Content-Type: application/json",
								"Authorization: Bearer ".FLUTTER_SEC_KEY
							  ),
							));

							$response = curl_exec($curl);
							$err = curl_error($curl);
														
							//var_dump($response);exit;
							if($err){
								$this->session->set_flashdata('error_message', "Transaction error!");
								$this->loadUrl(""); 
							}

							$tranx = json_decode($response,true);
							
							if(!$tranx['status'] || $tranx['status']!="success"){							
									$this->session->set_flashdata('error_message', "Invalid transaction");
									$this->loadUrl("");														
							}
							
							
							$addition = '';
							if('successful' == $tranx['data']['status']){
									$data =  $tranx['data']['meta'];
									$ex = $this->model_transaction->getByParam(array('transaction_key'=>$reference));
									 if($ex!=null){
										$this->session->set_flashdata('error_message', "Already paid");
										$this->loadUrl("");		
									 }	
									 
									//var_dump($data);exit;
									if($data['type']=="subscription"){
												$dt = $data;
												unset($dt["__CheckoutInitAddress"]);
												$dt['plan_id'] = $dt['plan'];
												$dt['username'] = $dt['email'];
												unset($dt["plan"]);
												unset($dt["type"]);
												unset($dt["amount"]);
												unset($dt["email"]);
												$created = $this->db->insert("users",$dt);
												$user_id = $this->db->insert_id();
												$data['transaction_key'] = $tranx['data']["id"];
												$transa = array(
													'email'=>$data['email'],
													'date'=>date("d/m/Y"),
													'amount'=>$data['amount'],
													'transaction_key'=>$reference,
													'user_id'=>$user_id,
													'type'=>$data['type'],
													'description'=>"Membership plan subscription",
													'quantity'=>"1",
													'payment_method'=>"online",
													'plan_id'=>$data['plan'],
													'status'=>'success');
													
													$this->model_transaction->create($transa);//db->insert("transaction",$transa);
										
													$this->session->set_flashdata('completed_message', "yes");
													$this->loadUrl("users/completed");
												
											}else{
												$this->session->set_flashdata('error_message', "Invalid operation");
												$this->loadUrl("");
												
											}
													
							}
						
					}else{
						$this->session->set_flashdata('error_message', "Invalid transaction");
						$this->loadUrl("success"); 
					}
				}else{
					$this->loadUrl("");
				}
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
