<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Code extends CI_CONTROLLER{
		
		function __construct(){
			parent::__construct();
			$this->load->model('admin/code_model');
		}
		
		//Code Section
		public function index(){
			$this->load->helper(array('form'));
			$this->load->view('admin/common/header');
			$this->load->view('admin/code');
			$this->load->view('admin/common/footer');
		}
		
	}
?>