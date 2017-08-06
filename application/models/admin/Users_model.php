<?php
	class Users_model extends CI_MODEL{
		
		function __construct(){
			parent::__construct();
			$this->table = 'users';
			$this->agents_table = 'agents';
			$this->sellers_table = 'sellers';
		}
		
		//Login
		function login($email, $pass){
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->where('email', $email);
			$this->db->where('pass', MD5($pass));
			$this->db->limit(1);
			
			$query = $this->db->get();
			if($query->num_rows() == 1){
				$this->db->where('email', $email);
				$this->db->where('pass', MD5($pass));
				$this->db->update($this->table, array('last_date' => date('Y-m-d')));
				return $query->result();
			}else{
				return false;
			}
		}
		
		
		
		/*
		/*******
		**AGENT
		********
		*/
		//Agent Add
		function add_agent($data_user,$data_agent){
			//Check Duplicate
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->where('email',$data_user['email']);
			
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return false;
			}else{
				//INSERT Agent (Users Table)
				$result1 = $this->db->insert($this->table,$data_user);
				//GET Last Inserted ID
				$agent_id = $this->db->insert_id();
				//Store ID in Array
				$data_agent['agent_id'] = $agent_id;
				//INSERT Agent (Agents Table)
				$result2 = $this->db->insert($this->agents_table,$data_agent);
				return $result2;
			}
		}
		
		//Agents List
		function list_agents(){
			$this->db->select('*');
			$this->db->from('agents a');
			$this->db->join('users b','a.agent_id = b.id','left');
			$this->db->order_by('agent_name','asc');
			
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->result_array();	//normal array
			}else{
				return false;
			}
		}
		
		//Agent Get Profile
		function get_agent($agent_id){
			$this->db->select('*');
			$this->db->from($this->agents_table);
			$this->db->where('agent_id',$agent_id);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		//Agent Get E-Mail
		function get_agent_email($agent_id){
			$this->db->select('email');
			$this->db->from($this->table);
			$this->db->where('id',$agent_id);
			$this->db->where('status','agent');
			
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		//Agent Update (Agents Table)
		function edit_agent($data_new_agent,$agent_id){
			$this->db->where('agent_id',$agent_id);
			$result = $this->db->update($this->agents_table,$data_new_agent);
		}
		
		//Agent Update (Users Table)
		function edit_user($data_new_user,$agent_id){
			$this->db->where('id',$agent_id);
			$result = $this->db->update($this->table,$data_new_user);
		}
		
		//Agent Delete
		function delete_agent($agent_id){
			//Agents Table
			$this->db->where('agent_id',$agent_id);
			$result1 = $this->db->delete($this->agents_table);
			
			//Users Table
			$this->db->where('id',$agent_id);
			$result2 = $this->db->delete($this->table);
			return $result2;
		}
		
		
		
		/*
		/*******
		**SELLER
		********
		*/
		//Seller Add
		function add_seller($data_seller_1){
			//Check Duplicate
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->where('email',$data_seller_1['email']);
			
			$query = $this->db->get();
			if($query->num_rows() > 0){
				$seller_id = $query->result_array();
				$data_seller_1['id'] = $seller_id[0]['id'];
				//Update User Table Info
				$this->db->where('email',$data_seller_1['email']);
				$this->db->update($this->table,$data_seller_1);
				return $data_seller_1;
			}else{
				//INSERT Seller (Users Table)
				$result = $this->db->insert($this->table,$data_seller_1);
				//GET Last Inserted ID
				$seller_id = $this->db->insert_id();
				//Store ID in Array
				$data_seller_1['id'] = $seller_id;
				return $data_seller_1;
			}
		}
		
		//Seller Info Add
		function add_seller_info($data_seller_2){
			//Check Duplicate
			$this->db->select('*');
			$this->db->from($this->sellers_table);
			$this->db->where('seller_id',$data_seller_2['seller_id']);
			
			$query = $this->db->get();
			if($query->num_rows() > 0){
				//Update Seller Table Info
				$this->db->where('seller_id',$data_seller_2['seller_id']);
				$this->db->update($this->sellers_table,$data_seller_2);
			}else{
				//INSERT Seller (Sellers Table)
				$result = $this->db->insert($this->sellers_table,$data_seller_2);
			}
		}
		
		//Seller Get Profile
		function get_seller($seller_id){
			$this->db->select('*');
			$this->db->from($this->sellers_table);
			$this->db->where('seller_id',$seller_id);
			
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		//Seller Get E-Mail
		function get_seller_email($seller_id){
			$this->db->select('email');
			$this->db->from($this->table);
			$this->db->where('id',$seller_id);
			$this->db->where('status','seller');
			
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
	}
?>