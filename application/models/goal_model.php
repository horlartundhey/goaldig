<?php
class goal_model extends CI_Model{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_goals(){
        $query = $this->db->get('goals');
        return $query->result_array();
    }
}