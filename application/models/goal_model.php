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
	
	 public function create_goal($data){
        $created = $this->db->insert('goals',$data);
        return $created?true:false;
    } 
	
	public function update_goal($id,$data){
		$this->db->where("id",$id);
        $updated = $this->db->update('goals',$data);
        return $updated?true:false;
    }
}