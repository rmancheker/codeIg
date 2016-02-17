<?php
if(!defined('BASEPATH'))exit('No Access');

class register_model extends CI_Model{
	function insert_data($data){
		return $this->db->insert('user',$data);
	}

	function showrecords(){
		$this->db->select('id,Name,mobile,email')->from('user');
		// $this->db->where("id",9)
		$records = $this->db->get();
		// pre($records);
		if($records->num_rows>0){
			return $records->result_array();
			//return $records->result();


		}else{
			return 0;
		}
	}

	function delrecord($data){
		$this->db->where('id',$data);
		return $this->db->delete('user');
	}

	function updatedetails($data,$id){
		//pre($data);
		$this->db->where('id',$id);
		return $this->db->update('user',$data);
	}

	function selectrecord($id){
		// $this->db->where('id', $id);
		// return $this->db->get("user")->result_array();
		return $this->db->get_where("user",array("id"=>$id))->result_array();

	}


}

?>
