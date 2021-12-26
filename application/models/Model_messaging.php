<?php 

class Model_messaging extends CI_Model
{
	public function __construct()
	{
		
		parent::__construct();
			$this->load->database();
	}

	/* get the brand data */
	public function getArray($data)
	{

			$query = $this->db->get_where("post", $data);
			return $query->result_array();
		
	}
	
	/* get the brand data */
	public function get($id)
	{
		$data = array('id'=>$id);
		$query = $this->db->get_where("post", $data);
		return $query->row_array();
			
	}



	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('post', $data);
			return ($insert == true) ? true : false;
		}
	}

	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('media', $data);
			return ($update == true) ? true : false;
		}
	}

	public function remove($id)
	{
		if($id) {
			$this->db->where('id', $id);
			$delete = $this->db->delete('media');
			return ($delete == true) ? true : false;
		}
	}

	public function countTotalmedia()
	{
		$sql = "SELECT * FROM media";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

}