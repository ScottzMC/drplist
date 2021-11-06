<?php 

    class Data_model extends CI_Model{
        
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
        
        // Home 
        
        public function display_states_in_home(){
            $this->db->where('country_id', '224');
            $query = $this->db->get('states')->result();
            return $query;
        }
        
        // End of Home 
    }

?>