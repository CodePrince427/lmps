<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Listings extends CI_CONTROLLER{
		
		function __construct(){
			parent::__construct();
			$this->load->model('admin/listings_model');
			$this->load->model('admin/users_model');
			$this->load->model('admin/status_model');
			$this->load->model('admin/steps_model');
		}
		
		function index(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				//Listings List
				$result = $this->listings_model->list_listings();
				$data['listing_list'] = $result;
				
				//Views
				$this->load->view('admin/common/header');
				$this->load->view('admin/listings',$data);
				$this->load->view('admin/common/footer');
			}
		}
		
		//Listing View/Edit
		function edit_listing(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$listing_id = $this->uri->segment(3);
				
				//Listing Info
				$result1 = $this->listings_model->get_listing($listing_id);
				$data['listing'] = $result1;
				
				//Listing Steps Info
				$step_id1 = $data['listing'][0]['step_id'];
				$result2 = $this->steps_model->get_listing_step($step_id1);
				$data['listing_step'] = $result2;
				
				$result3 = $this->steps_model->listing_steps();
				$data['listing_steps'] = $result3;
				$data['steps_counter1'] = count($result3);
				
				//Closing Steps Info
				$step_id2 = $data['listing'][0]['step_id'];
				$result4 = $this->steps_model->get_closing_step($step_id2);
				$data['closing_step'] = $result4;
				
				$result5 = $this->steps_model->closing_steps();
				$data['closing_steps'] = $result5;
				$data['steps_counter2'] = count($result5);
				
				//Listing Pic
				$result6 = $this->listings_model->get_listing_pic($listing_id);
				$data['listing_pic'] = $result6;
				
				//Agents List
				$result7 = $this->users_model->list_agents();
				$data['agent_list'] = $result7;
				
				//Agent Info
				$agent_id = $data['listing'][0]['agent_id'];
				$result8 = $this->users_model->get_agent($agent_id);
				$data['agent'] = $result8;
				//Agent Email
				$result9 = $this->users_model->get_agent_email($agent_id);
				$data['agent_email'] = $result9;
				
				//Seller Info
				$seller_id = $data['listing'][0]['seller_id'];
				$result10 = $this->users_model->get_seller($seller_id);
				$data['seller'] = $result10;
				//Seller Email
				$result11 = $this->users_model->get_seller_email($seller_id);
				$data['seller_email'] = $result11;
				
				//PDFs
				$result12 = $this->status_model->get_pdf($listing_id);
				$data['listing_pdf'] = $result12;
				$data['pdf_counter'] = count($result12);
				
				//Gallery
				$result13 = $this->status_model->get_listing_gallery($listing_id);
				$data['listing_gallery'] = $result13;
				$data['pic_counter'] = count($result13);
				
				//Slider
				$result14 = $this->status_model->get_listing_slider($listing_id);
				$data['listing_slider'] = $result14;
				$data['slider_counter'] = count($result14);
				
				//Views
				$this->load->view('admin/common/header');
				$this->load->view('admin/view-listing',$data);
				$this->load->view('admin/common/footer');
			}
		}
		
		//Listing Add
		function add_listing(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$result1 = $this->users_model->list_agents();
				$data['agent_list'] = $result1;
				$data['listing_code'] = strtoupper(substr(sha1(rand(000,9999)),0,7));
				
				//Listing Steps
				$result2 = $this->steps_model->listing_steps();
				$data['listing_steps'] = $result2;
				$data['steps_counter'] = count($result2);
				
				$this->load->view('admin/common/header');
				$this->load->view('admin/add-listing',$data);
				$this->load->view('admin/common/footer');
			}
		}
		
		function insert_listing(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$pass = rand(0,999);
				//User Table Data
				$data_seller_1 = array(
					'email'		=>	$this->input->post('email'),
					'pass'		=>	MD5($pass),
					'status'	=>	'seller',
					'last_date'	=>	date('Y-m-d')
				);
				
				//Seller Table Data
				$data_seller_2 = array(
					'seller_name'		=>	$this->input->post('name'),
					'seller_cell'		=>	str_replace(array('(',')', '-'), '' ,$this->input->post('cell')),
					'seller_sms'		=>	$this->input->post('sms')
				);
				
				//Users Query
				$result1 = $this->users_model->add_seller($data_seller_1);
				$seller_id = $result1['id'];
				
				//Sellers Query
				$data_seller_2['seller_id'] = $seller_id;
				$result2 = $this->users_model->add_seller_info($data_seller_2);
				
				$data_listing = array(
					'code'		=>	$this->input->post('code'),
					'address'	=>	$this->input->post('address'),
					'city'		=>	$this->input->post('city'),
					'state'		=>	$this->input->post('state'),
					'zipcode'	=>	$this->input->post('zipcode'),
					'process'	=>	$this->input->post('process'),
					'step_id'	=>	$this->input->post('step'),
					'price'		=>	str_replace(array('$','.00', ','), '' ,$this->input->post('price')),
					'agent_id'	=>	$this->input->post('agent'),
					'seller_id'	=>	$seller_id
				);
				$result3 = $this->listings_model->add_listing($data_listing);
				
				if($result3){
					$this->session->set_flashdata('success','Listing Added Successfully');
				}else{
					$this->session->set_flashdata('error','Listing Already Exists !');
				}
				
				//Without Dropzone - Pic
				$listing_id = $result3['id'];
				if(!empty($_FILES['pic']['name'])){
					$tempFile1 = $_FILES['pic']['tmp_name'];
					$origFile1 = $_FILES['pic']['name'];
					
					$ext = pathinfo($origFile1, PATHINFO_EXTENSION);
					if($ext == 'png'){
						$fileName1 = substr(sha1(rand(000,9999)),0,7).$_FILES['pic']['name'];
						$targetPath1 = getcwd().'/assets/admin/img/gallery/';
						$targetFile1 = $targetPath1.$fileName1;
						move_uploaded_file($tempFile1,$targetFile1);
						
						$data_listing_pic['listing_id'] = $listing_id;
						$data_listing_pic['pics'] = $fileName1;
						$result4 = $this->listings_model->add_listing_pic($data_listing_pic);
					}else{
						$image = imagecreatefromjpeg($tempFile1);
						$fileName1 = substr(sha1(rand(000,9999)),0,7).$_FILES['pic']['name'];
						$targetPath1 = getcwd().'/assets/admin/img/gallery/';
						$CompressedFile1 = $targetPath1.$fileName1;
						move_uploaded_file($tempFile1,$CompressedFile1);
						
						$data_listing_pic['listing_id'] = $listing_id;
						$data_listing_pic['pics'] = $fileName1;
						$result4 = $this->listings_model->add_listing_pic($data_listing_pic);						
					}
				}else{
					echo "empty pic";
				}
				
				redirect('admin/add_files/'.$listing_id.'');
			}
		}
		
		//Listing Update
		function update_listing(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				//echo "<pre>";print_r($_POST);exit;
				$listing_id = $this->uri->segment(3);
				$seller_id = $this->input->post('seller_id');
				
				$data_new_seller = array(
					'seller_id'		=>	$seller_id,
					'seller_name'	=>	$this->input->post('name'),
					'seller_cell'	=>	str_replace(array('(',')', '-'), '' ,$this->input->post('cell')),
					'seller_sms'	=>	$this->input->post('sms')
				);
				$result1 = $this->users_model->add_seller_info($data_new_seller);
				
				//Checking Process Step Change
				$listing_step = $this->input->post('listing_step');
				$closing_step = $this->input->post('closing_step');
				if($listing_step == '' && $closing_step == ''){
					$data_new_listing = array(
						'address'	=>	$this->input->post('address'),
						'city'		=>	$this->input->post('city'),
						'state'		=>	$this->input->post('state'),
						'zipcode'	=>	$this->input->post('zipcode'),
						'process'	=>	$this->input->post('process'),
						'step_id'	=>	$this->input->post('step'),
						'price'		=>	str_replace(array('$','.00', ','), '' ,$this->input->post('price')),
						'agent_id'	=>	$this->input->post('agent'),
						'seller_id'	=>	$seller_id
					);
				}elseif($listing_step == '' && $closing_step != ''){
					$data_new_listing = array(
						'address'	=>	$this->input->post('address'),
						'city'		=>	$this->input->post('city'),
						'state'		=>	$this->input->post('state'),
						'zipcode'	=>	$this->input->post('zipcode'),
						'process'	=>	$this->input->post('process'),
						'step_id'	=>	$closing_step,
						'price'		=>	str_replace(array('$','.00', ','), '' ,$this->input->post('price')),
						'agent_id'	=>	$this->input->post('agent'),
						'seller_id'	=>	$seller_id
					);
				}else{
					$data_new_listing = array(
						'address'	=>	$this->input->post('address'),
						'city'		=>	$this->input->post('city'),
						'state'		=>	$this->input->post('state'),
						'zipcode'	=>	$this->input->post('zipcode'),
						'process'	=>	$this->input->post('process'),
						'step_id'	=>	$listing_step,
						'price'		=>	str_replace(array('$','.00', ','), '' ,$this->input->post('price')),
						'agent_id'	=>	$this->input->post('agent'),
						'seller_id'	=>	$seller_id
					);
				}
				
				//echo "<pre>";print_r($data_new_listing);exit;
				$result2 = $this->listings_model->edit_listing($listing_id,$data_new_listing);
				
				//Without Dropzone - Pic
				if(!empty($_FILES['pic']['name'])){
					//Pic
					$tempFile1 = $_FILES['pic']['tmp_name'];
					$origFile1 = $_FILES['pic']['name'];
					
					$ext = pathinfo($origFile1, PATHINFO_EXTENSION);
					if($ext == 'png'){
						$fileName1 = substr(sha1(rand(000,9999)),0,7).$_FILES['pic']['name'];
						$targetPath1 = getcwd().'/assets/admin/img/gallery/';
						$targetFile1 = $targetPath1.$fileName1;
						move_uploaded_file($tempFile1,$targetFile1);
						
						$result3 = $this->listings_model->get_listing_pic($listing_id);
						$pic = $result3[0]['pic'];
						$path = getcwd().'/assets/admin/img/gallery/'.$pic;
						unlink($path);
						
						$data_listing_pic['pics'] = $fileName1;
						$result4 = $this->listings_model->edit_listing_pic($listing_id,$data_listing_pic);
					}else{
						$image = imagecreatefromjpeg($tempFile1);
						$fileName1 = substr(sha1(rand(000,9999)),0,7).$_FILES['pic']['name'];
						$targetPath1 = getcwd().'/assets/admin/img/gallery/';
						$CompressedFile1 = $targetPath1.$fileName1;
						move_uploaded_file($tempFile1,$CompressedFile1);
						
						$result3 = $this->listings_model->get_listing_pic($listing_id);
						$pic = $result3[0]['pic'];
						$path = getcwd().'/assets/admin/img/gallery/'.$pic;
						unlink($path);
						
						$data_listing_pic['pics'] = $fileName1;
						$result4 = $this->listings_model->edit_listing_pic($listing_id,$data_listing_pic);
					}
				}
				redirect('admin/edit_listing/'.$listing_id.'');				
			}
		}
		
		function add_listing_files(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$listing_id = $this->uri->segment(3);
				
				//Listing Info
				$result1 = $this->listings_model->get_listing($listing_id);
				$data['listing'] = $result1;
				
				//Views
				$this->load->view('admin/common/header');
				$this->load->view('admin/add-files',$data);
				$this->load->view('admin/common/footer');
			}
		}
		
		//PDFs - For Loop Not Needed :)
		function listing_pdf(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$listing_id = $this->uri->segment(3);
				
				//Dropzone - PDF
				if(!empty($_FILES)){
					$tempFile = $_FILES['file']['tmp_name'];
					$fileName = $_FILES['file']['name'];
					$targetPath = getcwd().'/assets/admin/files/';
					$targetFile = $targetPath.$fileName;
					move_uploaded_file($tempFile,$targetFile);
					
					$data_listing_pdf['listing_id'] = $listing_id;
					$data_listing_pdf['pdf'] = $fileName;
					
					$this->load->database(); // load database
					$this->db->insert('listing_pdfs',array('listing_id' => $listing_id,'pdf' => $fileName));
					
				}
				redirect('admin/edit_listing/'.$listing_id.'');
			}
		}
		
		//Gallery - For Loop Not Needed :)
		function listing_gallery(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$listing_id = $this->uri->segment(3);
				
				//Dropzone - Gallery
				if(!empty($_FILES)){
					$tempFile1 = $_FILES['file']['tmp_name'];
					$origFile1 = $_FILES['file']['name'];
					
					$ext = pathinfo($origFile1, PATHINFO_EXTENSION);
					if($ext == 'png'){
						$fileName1 = substr(sha1(rand(000,9999)),0,7).$_FILES['file']['name'];
						$targetPath1 = getcwd().'/assets/admin/img/gallery/';
						$targetFile1 = $targetPath1.$fileName1;
						move_uploaded_file($tempFile1,$targetFile1);
						
						$data_listing_gallery['listing_id'] = $listing_id;
						$data_listing_gallery['pic'] = $fileName1;
						
						$this->load->database(); // load database
						$this->db->insert('listing_gallery',array('listing_id' => $listing_id,'pic' => $fileName1));						
					}else{
						$image = imagecreatefromjpeg($tempFile1);
						$fileName1 = substr(sha1(rand(000,9999)),0,7).$_FILES['file']['name'];
						$targetPath1 = getcwd().'/assets/admin/img/gallery/';
						$CompressedFile1 = $targetPath1.$fileName1;
						move_uploaded_file($tempFile1,$CompressedFile1);
						
						$data_listing_gallery['listing_id'] = $listing_id;
						$data_listing_gallery['pic'] = $fileName1;
						
						$this->load->database(); // load database
						$this->db->insert('listing_gallery',array('listing_id' => $listing_id,'pic' => $fileName1));
					}
				}
				redirect('admin/edit_listing/'.$listing_id.'');
			}
		}
		
		//Slider - For Loop Not Needed :)
		function listing_slider(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$listing_id = $this->uri->segment(3);
				
				//Dropzone - Slider
				if(!empty($_FILES)){
					$tempFile1 = $_FILES['file']['tmp_name'];
					$origFile1 = $_FILES['file']['name'];
					
					$ext = pathinfo($origFile1, PATHINFO_EXTENSION);
					if($ext == 'png'){
						$fileName1 = substr(sha1(rand(000,9999)),0,7).$_FILES['file']['name'];
						$targetPath1 = getcwd().'/assets/admin/img/sliders/';
						$targetFile1 = $targetPath1.$fileName1;
						move_uploaded_file($tempFile1,$targetFile1);
						
						$data_listing_gallery['listing_id'] = $listing_id;
						$data_listing_gallery['pic'] = $fileName1;
						
						$this->load->database(); // load database
						$this->db->insert('listing_slider',array('listing_id' => $listing_id,'pic' => $fileName1));						
					}else{
						$image = imagecreatefromjpeg($tempFile1);
						$fileName1 = substr(sha1(rand(000,9999)),0,7).$_FILES['file']['name'];
						$targetPath1 = getcwd().'/assets/admin/img/sliders/';
						$CompressedFile1 = $targetPath1.$fileName1;
						move_uploaded_file($tempFile1,$CompressedFile1);
						
						$data_listing_gallery['listing_id'] = $listing_id;
						$data_listing_gallery['pic'] = $fileName1;
						
						$this->load->database(); // load database
						$this->db->insert('listing_slider',array('listing_id' => $listing_id,'pic' => $fileName1));
					}
				}
				redirect('admin/edit_listing/'.$listing_id.'');
			}
		}
		
		//Listing PDF Rename
		function rename_listing_pdf(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$pdf_id = $this->uri->segment(3);
				$listing_id = $this->uri->segment(4);
				$pdf_name = array(
					'pdf'	=>	$this->input->post('pdf')
				);
				
				//Get Pdf Name
				$result1 = $this->listings_model->get_listing_pdf($pdf_id);
	
				//Update Record
				$result2 = $this->listings_model->edit_listing_pdf($pdf_id,$pdf_name);

				//Get New Pdf Name
				$result3 = $this->listings_model->get_listing_pdf($pdf_id);
				
				//Rename PDF
				$old_pdf = $result1[0]['pdf'];
				$new_pdf = $result3[0]['pdf'];
				$old_name = getcwd().'/assets/admin/files/'.$old_pdf;
				$new_name = getcwd().'/assets/admin/files/'.$new_pdf;
				rename($old_name,$new_name);
				
				redirect('admin/edit_listing/'.$listing_id);
			}
		}
		
		//Listing PDF Delete
		function delete_listing_pdf(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$pdf_id = $this->uri->segment(3);
				$listing_id = $this->uri->segment(4);
				//Pdf
				$result1 = $this->listings_model->get_listing_pdf($pdf_id);
				$pdf = $result1[0]['pdf'];
				$path = getcwd().'/assets/admin/files/'.$pdf;
				unlink($path);
				//Record
				$result2 = $this->listings_model->delete_listing_pdf($pdf_id);
				redirect('admin/edit_listing/'.$listing_id);
			}
		}
		
		//Listing Gallery Delete
		function delete_listing_gallery(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$gallery_id = $this->uri->segment(3);
				$listing_id = $this->uri->segment(4);
				//Gallery
				$result1 = $this->listings_model->get_listing_gallery($gallery_id);
				$gallery = $result1[0]['pic'];
				$path = getcwd().'/assets/admin/img/gallery/'.$gallery;
				unlink($path);
				//Record
				$result2 = $this->listings_model->delete_listing_gallery($gallery_id);
				redirect('admin/edit_listing/'.$listing_id);
			}
		}
		
		//Listing Slider Delete
		function delete_listing_slider(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$slider_id = $this->uri->segment(3);
				$listing_id = $this->uri->segment(4);
				//Slider
				$result1 = $this->listings_model->get_listing_slider($slider_id);
				$slider = $result1[0]['pic'];
				$path = getcwd().'/assets/admin/img/sliders/'.$slider;
				unlink($path);
				//Record
				$result2 = $this->listings_model->delete_listing_slider($slider_id);
				redirect('admin/edit_listing/'.$listing_id);
			}
		}
		
		//Listing Delete
		function delete_listing(){
			if($this->session->userdata('log_in') == ''){
				redirect('admin');
			}else{
				$listing_id = $this->uri->segment(3);
				
				//Pic
				$result1 = $this->listings_model->get_listing_pic($listing_id);
				$pic = $result1[0]['pics'];
				$path1 = getcwd().'/assets/admin/img/gallery/'.$pic;
				unlink($path1);
				
				//Gallery
				$result2 = $this->listings_model->listing_gallery_counter($listing_id);
				$gallery_counter = $result2;
				$result3 = $this->listings_model->delete_listing_galleries($listing_id,$gallery_counter);
				
				//Slider
				$result4 = $this->listings_model->listing_slider_counter($listing_id);
				$slider_counter = $result4;
				$result5 = $this->listings_model->delete_listing_sliders($listing_id,$slider_counter);
				
				//Pdf
				$result6 = $this->listings_model->listing_pdf_counter($listing_id);
				$pdf_counter = $result6;
				$result7 = $this->listings_model->delete_listing_pdfs($listing_id,$pdf_counter);
				
				//Record
				$result8 = $this->listings_model->delete_listing($listing_id);
				redirect('admin/listings');
			}
		}
	}
?>