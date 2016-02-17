<?php

if(!defined('BASEPATH'))exit('No Access');
class crud extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('register_model');
	}

	function index(){
		$this->load->view('register');
	}

	function register_action(){
		$result = $this->input->post();
		print_r($result);
	}

	function showrecords(){
		$records = $this->register_model->showrecords();
		// pre($records);
		$viewrecords["answer"] = $records;
		$this->load->view('viewrecords',$viewrecords);
	}

	function delData(){
		$result = $this->input->post("val");
		//echo $result;
		$val = $this->register_model->delrecord($result);
		echo $val;

	}

	function editData(){
		$result = $this->input->post("val");
		$val = $this->register_model->selectrecord($result);
		echo $val[0]['Name']."#".$val[0]['mobile'];
	}

	function userdata(){
		$dataarr = $this->input->post();
		$this->form_validation->set_rules('Name', 'Name', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('mobile','mobile','trim|integer|required|exact_length[10]');
		$this->form_validation->set_rules('email','email','trim|valid_email|required|is_unique[user.email]');
		$this->form_validation->set_rules('pwd', 'password', 'trim|required|min_length[5]|matches[cnfpwd]|alpha_numeric');

		if($this->form_validation->run()==false){
			echo validation_errors();
		}else{
			
			unset($dataarr['cnfpwd']);
			$dataarr['pwd'] = sha1($dataarr['pwd']);
			//pre($dataarr);
			//insert function
			$retval = $this->register_model->insert_data($dataarr);
			if($retval == 1){
				echo 1;
				// redirect(base_url().'index.php/crud/showrecords');
			}else{
				echo "Error while saving data!!!";
			}
		}	
	}

	function updatedata(){
		$dataarr = $this->input->post();
		//pre($dataarr);
		$this->form_validation->set_rules('Name','Name','trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('mobile','mobile','trim|integer|required|exact_length[10]');
		if($this->form_validation->run()==false){
			echo validation_errors();
		}else{
			$id =  $this->input->post('id');
			echo $this->register_model->updatedetails($dataarr,$id);

			}
	}

}

?>