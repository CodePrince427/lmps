<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Agents extends CI_CONTROLLER{
		
		function __construct(){
			parent::__construct();
			$this->load->model('admin/users_model');
		}
		
		function index(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$result1 = $this->users_model->list_agents();
				$data['agent_list'] = $result1;
				
				//Views
				$this->load->view('admin/common/header');
				$this->load->view('admin/agents',$data);
				$this->load->view('admin/common/footer');
			}
		}
		
		//Agent View/Edit
		function edit_agent(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$agent_id = $this->uri->segment(3);
				$result1 = $this->users_model->get_agent_email($agent_id);
				$result2 = $this->users_model->get_agent($agent_id);
				$data['agent_email'] = $result1;
				$data['agent'] = $result2;
				
				$_FILES = array();
				
				$this->load->view('admin/common/header');
				$this->load->view('admin/view-agent',$data);
				$this->load->view('admin/common/footer');
			}
		}
		
		//Agent Add
		function add_agent(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$this->load->view('admin/common/header');
				$this->load->view('admin/add-agent');
				$this->load->view('admin/common/footer');
			}
		}
		
		function insert_agent(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$pass = rand(0,999);
				$data_user = array(
					'email'		=>	$this->input->post('email'),
					'pass'		=>	MD5($pass),
					'status'	=>	'agent',
					'last_date'	=>	date('Y-m-d')
				);
				
				$data_agent = array(
					'agent_name'	=>	$this->input->post('name'),
					'agent_cell'	=>	$this->input->post('cell'),
					'agent_sms'		=>	$this->input->post('sms')
				);
				
				//Dropzone OR Simple Pic Code
				if(!empty($_FILES)){
					$tempFile1 = $_FILES['pic']['tmp_name'];
					$origFile1 = $_FILES['pic']['name'];
					
					$ext = pathinfo($origFile1, PATHINFO_EXTENSION);
					if($ext == 'png'){
						$fileName1 = substr(sha1(rand(000,9999)),0,7).$_FILES['pic']['name'];
						$targetPath1 = getcwd().'/assets/admin/img/agents/';
						$targetFile1 = $targetPath1.$fileName1;
						
						$data_agent['agent_pic'] = $fileName1;						
						$result1 = $this->users_model->add_agent($data_user,$data_agent);
						
						if($result1){
							//Upload Pic
							move_uploaded_file($tempFile1,$targetFile1);
							$this->session->set_flashdata('success','Agent Added Successfully');
							redirect('admin/agents');
						}else{
							$this->session->set_flashdata('error','Agent Already Exists !');
							$this->load->view('admin/common/header');
							$this->load->view('admin/add-agent');
							$this->load->view('admin/common/footer');
						}
					}else{
						$image = imagecreatefromjpeg($tempFile1);
						$fileName1 = substr(sha1(rand(000,9999)),0,7).$_FILES['pic']['name'];
						$targetPath1 = getcwd().'/assets/admin/img/agents/';
						$CompressedFile1 = $targetPath1.$fileName1;
						
						$data_agent['agent_pic'] = $fileName1;
						$result1 = $this->users_model->add_agent($data_user,$data_agent);

						if($result1){
							//Upload Pic
							move_uploaded_file($tempFile1,$CompressedFile1);
							$this->session->set_flashdata('success','Agent Added Successfully');
							redirect('admin/agents');
						}else{
							$this->session->set_flashdata('error','Agent Already Exists !');
							$this->load->view('admin/common/header');
							$this->load->view('admin/add-agent');
							$this->load->view('admin/common/footer');
						}
					}
				}else{
					$result2 = $this->users_model->add_agent($data_user,$data_agent);
					if($result2){
						$this->session->set_flashdata('success','Agent Added Successfully');
						redirect('admin/agents');
					}else{
						$this->session->set_flashdata('error','Agent Already Exists !');
					}
				}
			}
		}
		
		//Agent Update
		function update_agent(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$agent_id = $this->uri->segment(3);
				$data_new_user = array(
					'email' => $this->input->post('email')
				);
				
				$data_new_agent = array(
					'agent_name' => $this->input->post('name'),
					'agent_cell' => $this->input->post('cell'),
					'agent_sms'	 => $this->input->post('sms')
				);
				
				/*print_r($_FILES['pic']['name']);exit;
				if(empty($_FILES['pic']['name'])){
					echo "Empty";
				}else{
					echo "Not Empty";
				}
				;exit;
				*/
				
				//Dropzone OR Simple Pic
				if(!empty($_FILES['pic']['name'])){
					$tempFile1 = $_FILES['pic']['tmp_name'];
					$origFile1 = $_FILES['pic']['name'];
					
					$ext = pathinfo($origFile1, PATHINFO_EXTENSION);
					if($ext == 'png'){
						$fileName1 = substr(sha1(rand(000,9999)),0,7).$_FILES['pic']['name'];
						$targetPath1 = getcwd().'/assets/admin/img/agents/';
						$targetFile1 = $targetPath1.$fileName1;
						move_uploaded_file($tempFile1,$targetFile1);
					}else{
						$image = imagecreatefromjpeg($tempFile1);
						$fileName1 = substr(sha1(rand(000,9999)),0,7).$_FILES['pic']['name'];
						$targetPath1 = getcwd().'/assets/admin/img/agents/';
						$CompressedFile1 = $targetPath1.$fileName1;
						move_uploaded_file($tempFile1,$CompressedFile1);					}
					
					//Unlink Pic
					$result1 = $this->users_model->get_agent($agent_id);
					$pic = $result1[0]['agent_pic'];
					$path = getcwd().'/assets/admin/img/agents/'.$pic;
					unlink($path);
					
					//Update Agent Record
					$data_new_agent['agent_pic'] =  $fileName1;
					$result2 = $this->users_model->edit_agent($data_new_agent,$agent_id);
					
					//Update User Record
					$result3 = $this->users_model->edit_user($data_new_user,$agent_id);
					redirect('admin/edit_agent/'.$agent_id.'');
				}else{
					//Update Agent Record
					$result1 = $this->users_model->edit_agent($data_new_agent,$agent_id);
					
					//Update User Record
					$result2 = $this->users_model->edit_user($data_new_user,$agent_id);
					
					redirect('admin/edit_agent/'.$agent_id.'');				
				}
			}
		}
		
		//Agent Delete
		function delete_agent(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$agent_id = $this->uri->segment(3);
				//Pic
				$result1 = $this->users_model->get_agent($agent_id);
				$pic = $result1[0]['agent_pic'];
				$path = getcwd().'/assets/admin/img/agents/'.$pic;
				unlink($path);
				
				//Record
				$result2 = $this->users_model->delete_agent($agent_id);
				redirect('admin/agents');
			}
		}
	}
?>