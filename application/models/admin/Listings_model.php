<?php
	class Listings_model extends CI_MODEL{
		
		function __construct(){
			parent::__construct();
			$this->table = 'listings';
			$this->users_table = 'users';
			$this->pdfs_table = 'listing_pdfs';
			$this->pics_table = 'listing_pics';
			$this->sliders_table = 'listing_slider';
			$this->gallery_table = 'listing_gallery';
		}
		
		
		
		/*
		/*******
		**LISTING
		********
		*/
		//Listing Add
		function add_listing($data_listing){
			$result = $this->db->insert($this->table,$data_listing);
			//GET Last Inserted ID
			$listing_id = $this->db->insert_id();
			$data_listing['id'] = $listing_id;
			return $data_listing;
		}
		
		//Listings List
		function list_listings(){
			$this->db->select('*');
			$this->db->from('listings a');
			$this->db->join('agents b','a.agent_id = b.agent_id','left');
			$this->db->join('sellers c','a.seller_id = c.seller_id','left');
			$this->db->join('listing_pics d','a.id = d.listing_id','left');
			$this->db->order_by('a.address','asc');
			
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->result_array();	//normal array
			}else{
				return false;
			}
		}
		
		//Listing Get Info
		function get_listing($listing_id){
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->where('id',$listing_id);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		//Listing Update
		function edit_listing($listing_id,$data_new_listing){
			$this->db->where('id',$listing_id);
			$result = $this->db->update($this->table,$data_new_listing);
		}
		
		//Listing Delete
		function delete_listing($listing_id){
			$this->db->where('id',$listing_id);
			$result1 = $this->db->delete($this->table);
			//Pic
			$this->db->where('listing_id',$listing_id);
			$result2 = $this->db->delete($this->pics_table);
			return $result1;
		}
		
		
		
		/*
		/*******
		**PHOTO
		********
		*/
		//Listing Pic Add
		function add_listing_pic($data_listing_pic){
			$result = $this->db->insert($this->pics_table,$data_listing_pic);
			return $result;
		}
		
		//Listing Get Pic
		function get_listing_pic($listing_id){
			$this->db->select('*');
			$this->db->from($this->pics_table);
			$this->db->where('listing_id',$listing_id);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		//Listing Pic Update
		function edit_listing_pic($listing_id,$pic){
			$this->db->where('listing_id',$listing_id);
			$this->db->update($this->pics_table,$pic);
		}
		
		
		
		/*
		/*******
		**PDFs
		********
		*/
		//Listing PDF Add
		function add_listing_pdf($data_listing_pdf){
			$result = $this->db->insert($this->pdfs_table,$data_listing_pdf);
			return $result;
		}
		
		//Listing Get PDF
		function get_listing_pdf($pdf_id){
			$this->db->select('*');
			$this->db->from($this->pdfs_table);
			$this->db->where('id',$pdf_id);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		//Listing PDF Update (Rename)
		function edit_listing_pdf($pdf_id,$pdf_name){
			$this->db->where('id',$pdf_id);
			$this->db->update($this->pdfs_table,$pdf_name);
		}
		
		//Listing PDF Counter
		function listing_pdf_counter($listing_id){
			$this->db->select('*');
			$this->db->from($this->pdfs_table);
			$this->db->where('listing_id',$listing_id);
			$query = $this->db->get();
			$result = $query->num_rows();
			return $result;
		}
		
		//Listing PDF Single Delete
		function delete_listing_pdf($pdf_id){
			$this->db->where('id',$pdf_id);
			$result = $this->db->delete($this->pdfs_table);
			return $result;
		}
		
		//Listing PDF Full Delete
		function delete_listing_pdfs($listing_id,$counter){
			$this->db->select('pdf');
			$this->db->from($this->pdfs_table);
			$this->db->where('listing_id',$listing_id);
			$query = $this->db->get();
			$result1 = $query->result_array();
			
			for($i=0;$i<$counter;$i++){
				$pdf = $result1[$i]['pdf'];
				$path = getcwd().'/assets/admin/files/'.$pdf;
				unlink($path);
			}
			
			$this->db->where('listing_id',$listing_id);
			$result2 = $this->db->delete($this->pdfs_table);
		}
		
		
		
		/*
		/*******
		**GALLERY
		********
		*/
		//Listing Get Gallery
		function get_listing_gallery($gallery_id){
			$this->db->select('*');
			$this->db->from($this->gallery_table);
			$this->db->where('id',$gallery_id);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		//Listing Gallery Counter
		function listing_gallery_counter($listing_id){
			$this->db->select('*');
			$this->db->from($this->gallery_table);
			$this->db->where('listing_id',$listing_id);
			$query = $this->db->get();
			$result = $query->num_rows();
			return $result;
		}
		
		//Listing Gallery Single Delete
		function delete_listing_gallery($gallery_id){
			$this->db->where('id',$gallery_id);
			$result = $this->db->delete($this->gallery_table);
			return $result;
		}
		
		//Listing Gallery Full Delete
		function delete_listing_galleries($listing_id,$counter){
			$this->db->select('pic');
			$this->db->from($this->gallery_table);
			$this->db->where('listing_id',$listing_id);
			$query = $this->db->get();
			$result1 = $query->result_array();
			
			for($i=0;$i<$counter;$i++){
				$gallery = $result1[$i]['pic'];
				$path = getcwd().'/assets/admin/img/gallery/'.$gallery;
				unlink($path);
			}
			
			$this->db->where('listing_id',$listing_id);
			$result2 = $this->db->delete($this->gallery_table);
		}
		
		
		
		/*
		/*******
		**SLIDER
		********
		*/
		//Listing Get Slider
		function get_listing_slider($slider_id){
			$this->db->select('*');
			$this->db->from($this->sliders_table);
			$this->db->where('id',$slider_id);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		//Listing Slider Counter
		function listing_slider_counter($listing_id){
			$this->db->select('*');
			$this->db->from($this->sliders_table);
			$this->db->where('listing_id',$listing_id);
			$query = $this->db->get();
			$result = $query->num_rows();
			return $result;
		}
		
		//Listing Slider Single Delete
		function delete_listing_slider($slider_id){
			$this->db->where('id',$slider_id);
			$result = $this->db->delete($this->sliders_table);
			return $result;
		}
		
		//Listing Slider Full Delete
		function delete_listing_sliders($listing_id,$counter){
			$this->db->select('pic');
			$this->db->from($this->sliders_table);
			$this->db->where('listing_id',$listing_id);
			$query = $this->db->get();
			$result1 = $query->result_array();
			
			for($i=0;$i<$counter;$i++){
				$slider = $result1[$i]['pic'];
				$path = getcwd().'/assets/admin/img/sliders/'.$slider;
				unlink($path);
			}
			
			$this->db->where('listing_id',$listing_id);
			$result2 = $this->db->delete($this->sliders_table);
		}
		
	}
?>