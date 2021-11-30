<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* 	
 * 	@author : Adedayo Ayodele
 */

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->database();
        $this->load->library('session');
		
		$this->load->model('crud_model');
		
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }

    //Default function, redirects to logged in user area
    public function index() {
        if ($this->session->userdata('admin_login') == 1)
              $this->redirect($this->config->config['base_url'] . 'dashboard');

          $this->redirect($this->config->config['base_url'] . 'login');
    }
	

	
	/* Login page*/
	 public function login(){
		 
        if ($this->session->userdata('admin_login') == 1)
              $this->redirect($this->config->config['base_url'] . 'dashboard');

        $data = array();
		$data['p'] = isset($_GET["p"])?$_GET["p"]:"";
		$data['id'] = isset($_GET["id"])?$_GET["id"]:"";
	
		$this->load->view('admin/login', $data);
	 }
	

    //Ajax login function 
    function ajax_login(){		
        $response = array();
		if (!isset($_POST) || empty($_POST) )
            $this->redirect($this->config->config['base_url'] . 'login');

        //Recieving post input of email, password from ajax request	
        $email = isset($_POST["username"])?$_POST["username"]:"";
        $password = isset($_POST["password"])?$_POST["password"]:"";
		$item_id = isset($_POST["id"])?$_POST["id"]:"";
		$redirect = (isset($_POST["p"]) && $_POST["p"]!="" )?$_POST["p"]:"dashboard";
		$redirect = $this->config->config['base_url'].$redirect;
        $response['submitted_data'] = $_POST;

        //Validating login
        $login_status = $this->validate_login($email, $password);
        $response['login_status'] = $login_status;
        if ($login_status == 'success'){
            $response['redirect_url'] = $redirect;
			$response['id'] = $item_id;		
        }

        //Replying ajax request with validation response
        echo json_encode($response);
    }

	  //Ajax login function 
    function ajax_resetpass(){		
        $response = array();
		if (!isset($_POST) || empty($_POST) )
            $this->redirect($this->config->config['base_url'] . 'login');

        //Recieving post input of email, password from ajax request	
        $email = isset($_POST["email"])?$_POST["email"]:"";
		$mem_id = isset($_POST["adminship_number"])?$_POST["adminship_number"]:"";
        
        //$response['submitted_data'] = $_POST;
        
        $login_status = $this->validate_email($email,$mem_id);
        $response['login_status'] = $login_status;
		
        if ($login_status == 'success'){
			$new_password           =   substr( md5( rand(100000000,900000000) ) , 0,7);
			$this->db->where('email' ,$email);
            $this->db->update('admin' , array('password' => sha1(md5($new_password))));
			$this->email_model->password_reset_email($new_password, $mem_id, $email);
			$this->crud_model->log_it('requested_password_request');
            $response['redirect_url'] = "resetsuccess";	
        }

        //Replying ajax request with validation response
        echo json_encode($response);
    }
	
	
	    
	
	
	
	//Ajax register function 
    function verify_password(){	
        $response = array();
		$sub = array();
		//$post = $_POST;//file_get_contents('php://input');
		
		if (!isset($_POST["oldpassword"]))
            $this->redirect($this->config->config['base_url'] . 'login');
		
		$data = $_POST;//(json_decode($post, true));	
		$old= isset($data["oldpassword"])?$data["oldpassword"]:"";  
        $password = isset($data["password"])?$data["password"]:"";  

		$exist = $this->db->get_where("admin",array('password'=>sha1(md5($old))))->row_array();
		
		//var_dump($data); exit;
		if($exist==null){
			$response['status'] = "Old password is not correct";
		}else{

			$admin_id = $data["admin_id"];
			$this->db->where("admin_id",$admin_id);
			$this->db->update("admin",array('password'=>sha1(md5($password))));
			$this->session->set_flashdata('flash_message', "Password has been updated");				
			$response['status'] = "success";

        }
        //Replying ajax request with validation response
        echo json_encode($response); 
    }
	
	
	
    //Validating login from ajax request
    function validate_login($email = '', $password = '') {
		
        $credential = array('email' => $email, 'password' => sha1(md5($password)),'status'=>'active');

        // Checking login credential for admin
        $query = $this->db->get_where('admin', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
			
            $this->session->set_userdata('admin_login', '1');
            $this->session->set_userdata('admin_id', $row->admin_id);
            $this->session->set_userdata('name', $row->surname);
            $this->session->set_userdata('login_type', 'admin');
			$this->session->set_userdata('login_user_id', $row->admin_id);
			
			return 'success';
		
        }
		
        return 'invalid';
    }
	
	
	    //Validating login from ajax request
    function validate_email($email = '',$mem_id='') {
        $credential = array('email' => $email,'admin_number'=>$mem_id,'status'=>'active');

        // Checking login credential for admin
        $query = $this->db->get_where('admin', $credential);
        if ($query->num_rows() > 0) {
			return 'success';		
        }
		
        return 'invalid';
    }
	
    /*     * *DEFAULT NOR FOUND PAGE**** */
    function four_zero_four() {
        $this->load->view('four_zero_four');
    }

    // PASSWORD RESET BY EMAIL
    function forgot_password()
    {
        $this->load->view('backend/forgot_password');
    }


    /*     * *****LOGOUT FUNCTION ****** */
    function logout() {
		
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        $this->redirect($this->config->config['base_url'] . 'home');
    }

	function   redirect($url){
		header('location:'.$url);
		//location.href = $url;
	}
}
