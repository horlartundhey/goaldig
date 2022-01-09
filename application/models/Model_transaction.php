<?php
class Model_transaction extends CI_Model{
		
		public function __construct(){				
				date_default_timezone_set('Africa/Lagos');			
        }

		function getByParam($param,$bulk=false){
			if($bulk==TRUE){
				return $this->db->get_where("transaction",$param)->result_array();
			}
			
			return $this->db->get_where("transaction",$param)->row_array();
			
		}
		
		
		function create($detail){
			$inserted = $this->db->insert("transaction",$detail);
			return ($inserted)?$this->db->insert_id():false;			
		}
		
		       
}

