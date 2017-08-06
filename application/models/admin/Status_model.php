<?php
	class Status_model extends CI_MODEL{
		
		function __construct(){
			parent::__construct();
			$this->listings_table = 'listings';
			$this->agents_table = 'agents';
			$this->sellers_table = 'sellers';
			$this->pdfs_table = 'listing_pdfs';
			$this->pics_table = 'listing_pics';
			$this->gallery_table = 'listing_gallery';
		}
		
		function get_listing($listing_code){
			$this->db->select('*');
			$this->db->from($this->listings_table);
			$this->db->where('code',$listing_code);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;			
		}
		
		function get_listing_slider($listing_id){
			$this->db->select('*');
			$this->db->from($this->gallery_table);
			$this->db->where('listing_id',$listing_id);
			$this->db->order_by('id','RANDOM');
			$this->db->limit(3);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		function get_listing_gallery($listing_id){
			$this->db->select('*');
			$this->db->from($this->gallery_table);
			$this->db->where('listing_id',$listing_id);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		function get_pdf($listing_id){
			$this->db->select('*');
			$this->db->from($this->pdfs_table);
			$this->db->where('listing_id',$listing_id);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		function get_agent($agent_id){
			$this->db->select('*');
			$this->db->from($this->agents_table);
			$this->db->where('agent_id',$agent_id);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		function get_seller($seller_id){
			$this->db->select('*');
			$this->db->from($this->sellers_table);
			$this->db->where('seller_id',$seller_id);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
	}
?>