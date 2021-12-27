<?php
class goal_model extends CI_Model{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_goals($param = array()){
		if(!empty($param)){
			return $this->db->get_where("goals",$param)->row_array();
		}
		
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('goals');
        return $query->result_array();
    }
	
	 public function create_goal($data){
        $created = $this->db->insert('goals',$data);
        return $created?true:false;
    } 
	
	public function delete_goal($id){
        $this->db->where('id',$id);
		$deleted = $this->db->delete('goals');
        return $deleted?true:false;
    } 
	
	public function update_goal($id,$data){
		$this->db->where("id",$id);
        $updated = $this->db->update('goals',$data);
        return $updated?true:false;
    }
}