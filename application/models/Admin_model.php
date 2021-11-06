<?php 

    class Admin_model extends CI_Model{
        
        // Account 
        
        public function create_user($data){
          $escape_data = $this->db->escape_str($data);
          $query = $this->db->insert('users', $escape_data);
          return $query;
        }
        
        public function validate($email, $password){
        	$escape_email = $this->db->escape_str($email);
            $escape_password = $this->db->escape_str($password);
    
    	  	$this->db->where('email', $escape_email);
        	$query = $this->db->get('users');
    
        	if($query->num_rows() > 0){
              	$result = $query->row_array();
              	if($this->bcrypt->check_password($escape_password, $result['password'])){
        		    	return $query->result();
              	}else{
            		return array();
              	}
    	    }else{
            	return NULL;
        	}
      	}
      	
      	public function update_user_password($email, $password){
            $query = $this->db->query("UPDATE users SET password = '$password' WHERE email = '$email' ");
            return $query;
        }
        
        // End of Account 
        
        // User Profile 
        
        public function display_user_profile($session_email){
            $this->db->where('email', $session_email);
            $query = $this->db->get('users')->result();
            return $query;
        }
        
        public function update_user_profile($session_email, $data){
            $this->db->where('email', $session_email);
            $query = $this->db->update('users', $data);
            return $query;
       }
       
       public function update_profile_image($session_email, $data){
            $this->db->where('email', $session_email);
            $query = $this->db->update('users', $data);
            return $query;
        }
        
        public function display_countries(){
            $this->db->where('country_name', 'United States');
            $query = $this->db->get('countries')->result();
            return $query;
        }
        
        public function display_states(){
            $query = $this->db->get('states')->result();
            return $query;
        }
        
        public function display_towns(){
            $query = $this->db->get('cities')->result();
            return $query;
        }
        
        // End of User Profile
        
        // User List 
        
        public function display_users(){
            $query = $this->db->get('users')->result();
            return $query;
        }
        
        public function activate_user($id, $status){
          $query = $this->db->query("UPDATE users SET status = '$status' WHERE id = '$id' ");
        }
    
        public function deactivate_user($id, $status){
          $query = $this->db->query("UPDATE users SET status = '$status' WHERE id = '$id' ");
        }
    
        public function delete_user($id){
          $query = $this->db->query("DELETE FROM users WHERE id = '$id' ");
        }
        
        // End of User List 
        
        // Payment 
        
        public function display_payments(){
            $query = $this->db->get('payment')->result();
            return $query;
        }
        
        public function approve_payment($id, $status){
          $query = $this->db->query("UPDATE payment SET payment_status = '$status' WHERE id = '$id' ");
        }
    
        public function cancel_payment($id, $status){
          $query = $this->db->query("UPDATE payment SET payment_status = '$status' WHERE id = '$id' ");
        }
    
        public function delete_payment($id){
          $query = $this->db->query("DELETE FROM payment WHERE id = '$id' ");
        }
        
        // End of Payment 
        
        // Options 
        
        public function display_option_category(){
            $query = $this->db->get('option_category')->result();
            return $query;
        }
        
        public function display_option_category_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('option_category')->result();
            return $query;
        }
        
        public function display_option_town_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('option_town')->result();
            return $query;
        }
        
        public function add_category_option($data){
          $escape_data = $this->db->escape_str($data);
          $query = $this->db->insert('option_category', $escape_data);
          return $query;
        }
        
        public function add_town_option($data){
          $escape_data = $this->db->escape_str($data);
          $query = $this->db->insert('option_town', $escape_data);
          return $query;
        }
        
        public function update_category_option($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('option_category', $data);
            return $query;
        }
        
        public function update_town_option($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('option_town', $data);
            return $query;
        }
        
        public function delete_category($id){
          $query = $this->db->query("DELETE FROM option_category WHERE id = '$id' ");
        }
        
        public function delete_town($id){
          $query = $this->db->query("DELETE FROM option_town WHERE id = '$id' ");
        }
        
        // End of Options 
        
        // Postings 
        
        public function display_postings(){
          $query = $this->db->get('posting')->result();
          return $query;  
        }
        
        public function display_posting_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('posting')->result();
            return $query;
        }
        
        public function add_posting($data){
          $escape_data = $this->db->escape_str($data);
          $query = $this->db->insert('posting', $escape_data);
          return $query;
        }
        
        public function updated_posting($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('posting', $data);
            return $query;
        }
        
        public function updated_posting_image($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('posting', $data);
            return $query;
        }
        
        public function reject_post($id, $status){
          $query = $this->db->query("UPDATE posting SET status = '$status' WHERE id = '$id' ");
        }
    
        public function delete_post($id){
          $query = $this->db->query("DELETE FROM posting WHERE id = '$id' ");
        }
        
        // End of Postings 
        
        // Dashboard 
        
        public function display_transaction_history(){
            $query = $this->db->get('payment')->result();
            return $query;
        }
        
        public function display_payment_count(){
          $query = $this->db->query("SELECT COUNT(*) AS payment_count FROM payment WHERE payment_type = 'Approved' ")->result();
          return $query;
        }
        
        public function display_user_count(){
          $query = $this->db->query("SELECT COUNT(*) AS user_count FROM users")->result();
          return $query;
        }
        
        public function display_user_count_percentage(){
          $query = $this->db->query("SELECT COUNT(*) AS user_percentage FROM users ")->result();
          return $query;
        }
        
        public function display_location_count_percentage(){
          $query = $this->db->query("SELECT COUNT(*) AS location_percentage FROM payment ")->result();
          return $query;
        }
        
        public function display_posting_count_percentage(){
          $query = $this->db->query("SELECT COUNT(*) AS posting_percentage FROM posting ")->result();
          return $query;
        }
        
        public function display_posting_count(){
          $query = $this->db->query("SELECT COUNT(*) AS posting_count FROM posting")->result();
          return $query;
        }
        
        // End of Dashboard 
        
    }

?>