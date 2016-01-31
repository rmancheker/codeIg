<?php

if(!defined('BASEPATH'))exit('No Access');
class crud extends CI_Controller{
	function index(){
		$this->load->view('register');
	}

	function register_action(){
		$result = $this->input->post();
		print_r($result);
	}

}

?>