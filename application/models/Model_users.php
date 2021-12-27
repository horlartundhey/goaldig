<?php 

class Model_users extends CI_Model
{
	public function __construct()
	{
		
		parent::__construct();
			$this->load->database();
	}

	/* get the brand data */
	public function getArray($data)
	{

			$query = $this->db->get_where("users", $data);
			return $query->result_array();
		
	}
	
	/* get the brand data */
	public function get($id)
	{
		$data = array('id'=>$id);
		$query = $this->db->get_where("users", $data);
		return $query->row_array();
			
	}



	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('users', $data);
			return ($insert == true) ? true : false;
		}
	}

	public function update($id,$data)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('users', $data);
			return ($update == true) ? true : false;
		}
	}

	public function remove($id)
	{
		if($id) {
			$this->db->where('id', $id);
			$delete = $this->db->delete('users');
			return ($delete == true) ? true : false;
		}
	}



}