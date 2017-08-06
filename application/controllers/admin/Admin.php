<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Admin extends CI_CONTROLLER{
		
		function __construct(){
			parent::__construct();
			$this->load->model('admin/users_model');
		}
		
		//Login Section
		public function index(){
			if($this->session->userdata('log_in') == ''){
				$this->load->helper(array('form'));
				$this->load->view('admin/common/header');
				$this->load->view('admin/sign-in');
				$this->load->view('admin/common/footer');
			}else{
					redirect('admin/listings');
			}
		}
		
		//TESTING API :)
		public function test(){
			// Authorisation details.
			$username = "umairtaj2012@gmail.com";
			$hash = "e94534d28e45c0594cee0d18c9450e6c34f5029af8cc8317249171b8ea98707e";

			// Config variables. Consult http://api.txtlocal.com/docs for more info.
			$test = "0";

			// Data for text message. This is the text message data.
			$sender = "CodePrince427"; // This is who the message appears to be from.
			//$numbers = "923156144290"; // A single number or a comma-seperated list of numbers
			$numbers = "923054146583"; // A single number or a comma-seperated list of numbers
			$message = "Hi CodePrince427 :) This is a test message from the PHP API script.";
			// 612 chars or less
			// A single number or a comma-seperated list of numbers
			$message = urlencode($message);
			$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
			$ch = curl_init('http://api.txtlocal.com/send/?');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch); // This is the result from the API
			curl_close($ch);

			echo "<pre>";print_r($result);exit;
			//
			
			/* Account details
			$apiKey = urlencode('2L1zgguh46I-8cx6HFF20p5uyN7xrndqPCGSqamhKi');
			
			// Message details
			$numbers = array(923054146583);
			$sender = urlencode('CodePrince427');
			$message = rawurlencode('Hi CodePrince427 :)');
		 
			$numbers = implode(',', $numbers);
		 
			// Prepare data for POST request
			$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
		 
			// Send the POST request with cURL
			$ch = curl_init('https://api.txtlocal.com/send/');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			curl_close($ch);
			
			// Process your response here
			echo $response;
			*/
		}
		
		//Logout Section
		public function logout(){
			unset($this->session->userdata);
			$this->session->userdata=array();
			$this->session->sess_destroy();
			redirect('admin', 'refresh');
		}
	}
?>