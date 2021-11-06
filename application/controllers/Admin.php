<?php 

    class Admin extends CI_Controller{
        
        // Account 
        
        public function login(){
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
          
            $form_valid = $this->form_validation->run();
            $submit_btn = $this->input->post('login');
            
            if($form_valid == FALSE){
                $this->load->view('admin/account/login');
            }else if(isset($submit_btn)){
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                
                $query = $this->db->query("SELECT email, status FROM users WHERE email = '$email'")->result();
                foreach($query as $qry){
                    $query_email = $qry->email;
                    $query_status = $qry->status;
                }
                
                $uresult = $this->Admin_model->validate($email, $password);
                if(count($uresult) > 0 && $query_status == "Active"){
                  $sess_data = array(
                  'login' => TRUE,
                  'uid' => $uresult[0]->id,
                  'uemail' => $uresult[0]->email,
                  'ufirstname' => $uresult[0]->firstname,
                  'ulastname' => $uresult[0]->lastname,
                  'urole' => $uresult[0]->role,
                  'ustatus' => $uresult[0]->status
                 );
        
                  $this->session->set_userdata($sess_data);
                  $status = $this->session->userdata('ustatus'); ?>
                  <script>
                      alert('Login successfully');
                      window.location.href="<?php echo site_url('admin/dashboard'); ?>";
                  </script> 
                  <?php
                  /*if(isset($_SERVER['HTTP_REFERER'])){
                    redirect($_SERVER['HTTP_REFERER']);
                  }*/
              }else if(empty($query_email) || empty($query_status) || $query_status == "Blocked"){
                $statusMsg = '<span class="text-danger">Email does not exist or account has been blocked!</span>';
                $this->session->set_flashdata('msgError', $statusMsg);
                $this->load->view('admin/account/login');  
              }else{
                $statusMsg = '<span class="text-danger">Wrong Email-ID or Password!</span>';
                $this->session->set_flashdata('msgError', $statusMsg);
                $this->load->view('admin/account/login', $data);
               }
            }
        }
        
        public function register(){
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
          
            $form_valid = $this->form_validation->run();
            $submit_btn = $this->input->post('register');
            
            if($form_valid == FALSE){
                $this->load->view('admin/account/register');
            }else if(isset($submit_btn)){
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $hashed_password = $this->bcrypt->hash_password($password);
                $role = "Admin";
                $status = "Active";
                $time = time();
                $date = date('Y-m-d H:i:s');
                
                $register_array = array(
                    'email' => $email,
                    'password' => $hashed_password,
                    'role' => $role,
                    'status' => $status,
                    'telephone' => "000",
                    'address' => "none",
                    'zipcode' => "none",
                    'town' => "none",
                    'state' => "none",
                    'image' => "original.jpg",
                    'created_time' => $time,
                    'created_date' => $date
                );
                
                $add_user = $this->Admin_model->create_user($register_array);
                
                if($add_user){ ?>
                    <script>
                        alert('Account has been created successfully');
                        window.location.href="<?php echo site_url('admin/login'); ?>";
                    </script>
          <?php }else{ ?>
                   <script>
                        alert('Account has not been created');
                    </script> 
          <?php }
            }
        }
        
        public function forgot_password(){
            $session_email = $this->session->userdata('uemail');
        
            $email = $this->input->post('email');
            $submit = $this->input->post('forgot');
            
            $query = $this->db->query("SELECT email FROM users WHERE email = '$email' ")->result();
          foreach($query as $qry){
              $query_email = $qry->email;
          }
            
            $this->load->view('admin/account/forgot_password');
            
            if(isset($submit) && $email == $query_email){
                  $code = str_shuffle("ABCDEFXJKZAG");
                  $subject = "Reset Password";
                  $body = "
                    The reset code - $code
                    
                    Upon clicking the link, put your reset code and new password in the reset page. If you want to reset your password, please click the link to reset the password - https://scottnnaghor.com/drplist/admin/reset_password";
                  $time = time();
                  $date = date('Y-m-d H:i:s');
        
                  $config = Array(
                 'protocol' => 'smtp',
                 'smtp_host' => 'smtp.scottnnaghor.com',
                 'smtp_port' => 25,
                 'smtp_user' => 'admin@scottnnaghor.com', // change it to account email
                 'smtp_pass' => 'TigerPhenix100', // change it to account email password
                 'mailtype' => 'html',
                 'charset' => 'iso-8859-1',
                 'wordwrap' => TRUE
                 );
        
                 $this->load->library('email', $config);
                 //$this->load->library('encrypt');
                 $this->email->from('admin@scottnnaghor.com', "DRPLIST Team");
                 $this->email->to("$email");
                 //$this->email->cc("testcc@domainname.com");
                 $this->email->subject("$subject");
                 $this->email->message("$body");
        
                  /*$add_mail_array = array(
                    'subject' => $subject,
                    'body' => $body,
                    'type' => $type,
                    'sender' => $email,
                    'created_time' => $time,
                    'created_date' => $date
                  );
        
                  $add_mail = $this->Data_model->send_forgot_mail($add_mail_array); */
        
                if($this->email->send()){ ?>
                <script>
                    alert('Mail sent successfully!! Check your inbox');
                    window.location.href="<?php echo base_url('admin/forgot_password'); ?>";
                  </script>    
                <?php }else{ ?>
                    <script>
                        alert("Email does not exist ");
                        window.location.href="<?php echo site_url('admin/login'); ?>";
                    </script>
           <?php }
               }
            
        }
        
        public function reset_password(){
          $submit_code = $this->input->post('code');
          $email = $this->input->post('email');
          $submit = $this->input->post('reset');
          
          $query = $this->db->query("SELECT email FROM users WHERE email = '$email' ")->result();
          foreach($query as $qry){
              $query_email = $qry->email;
          }
       
          $this->load->view('admin/account/reset_password');
          
          if(isset($submit)){
            if(!empty($query_email) && $query_email == $email){
            $password = $this->input->post('password');
            $hashed_password = $this->bcrypt->hash_password($password);
            
            $update_detail = $this->Admin_model->update_user_password($query_email, $hashed_password);
    
            if($update_detail){ ?>
            <script>
                alert('Password changed Successfully');
                window.location.href="<?php echo site_url('admin/login'); ?>";
            </script>
      <?php }else{ ?>
              <script>
                  alert('Password failed');
                  window.location.href="<?php echo site_url('admin/forgot_password'); ?>";
              </script>
      <?php }
           }
          }
        }
        
        public function logout(){
          // destroy session
          $data = array('login' => '', 'uid' => '', 'ufirstname' => '', 'ulastname' => '', 'uemail' => '', 'urole' => '');
          $this->session->unset_userdata($data);
          $this->session->sess_destroy();
          #delete_cookie('remember_me_token', 'http://localhost/ClientProjects/Soup', '/');
          redirect('admin/login');
        }
        
        // End of Account
        
        public function dashboard(){
            $session_role = $this->session->userdata('urole');
            $session_email = $this->session->userdata('uemail');
            $data['user_profile'] = $this->Admin_model->display_user_profile($session_email);
            $data['transaction'] = $this->Admin_model->display_transaction_history();
            $data['payment'] = $this->Admin_model->display_payments();
            $data['users'] = $this->Admin_model->display_users();
            
            $data['user_percent'] = $this->Admin_model->display_user_count_percentage();
            $data['location_percent'] = $this->Admin_model->display_location_count_percentage();
            $data['posting_percent'] = $this->Admin_model->display_posting_count_percentage();
            
            $data['posting'] = $this->Admin_model->display_postings();
            
            $data['payment_count'] = $this->Admin_model->display_payment_count();
            $data['user_count'] = $this->Admin_model->display_user_count();
            $data['posting_count'] = $this->Admin_model->display_posting_count();

            if($session_role == "Admin"){
                $this->load->view('admin/dashboard/view', $data);
            }else{ ?>
            <script>
                window.location.href="https://scottnnaghor.com/drplist";
            </script>
     <?php }
        }
        
        // Profile 
        
        public function profile(){
            $session_role = $this->session->userdata('urole');
            $session_email = $this->session->userdata('uemail');
            
            $data['user_profile'] = $this->Admin_model->display_user_profile($session_email);
            $data['country'] = $this->Admin_model->display_countries();
            $data['state'] = $this->Admin_model->display_states();
            $data['town'] = $this->Admin_model->display_towns();
        
           if($session_role == "Admin"){
            $submit = $this->input->post('save');

            $this->load->view('admin/dashboard/profile', $data);
            
            if(isset($submit)){
                $firstname = $this->input->post('firstname');
                $lastname = $this->input->post('lastname');
                $telephone = $this->input->post('telephone');
                $address = $this->input->post('address');
                $zipcode = $this->input->post('zipcode');
                $town = $this->input->post('town');
                $state = $this->input->post('state');
                
                $update_array = array(
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'telephone' => $telephone,
                    'address' => $address,
                    'zipcode' => $zipcode,
                    'town' => $town,
                    'state' => $state
                );
                
                $update_user = $this->Admin_model->update_user_profile($session_email, $update_array);
                
                if($update_user){ ?>
                    <script>
                        alert('Updated successfully');
                        window.location.href="<?php echo site_url('admin/profile'); ?>";
                    </script>
          <?php }else{ ?>
                   <script>
                        alert('Update Failed');
                    </script> 
          <?php }
            }
        }else{ ?>
            <script>
                window.location.href="https://scottnnaghor.com/drplist";
            </script>
     <?php }
        }
        
        public function update_profile_image(){
            $session_email = $this->session->userdata('uemail');
            $submit_image = $this->input->post('btn_image');
    
             if(isset($submit_image)){
    
               $files = $_FILES;
               $cpt1 = count($_FILES['fileToUpload']['name']);
    
                for($i=0; $i<$cpt1; $i++){
                  $_FILES['fileToUpload']['name']= $files['fileToUpload']['name'][$i];
                  $_FILES['fileToUpload']['type']= $files['fileToUpload']['type'][$i];
                  $_FILES['fileToUpload']['tmp_name']= $files['fileToUpload']['tmp_name'][$i];
                  $_FILES['fileToUpload']['error']= $files['fileToUpload']['error'][$i];
                  $_FILES['fileToUpload']['size']= $files['fileToUpload']['size'][$i];
    
                  $path = $_FILES['fileToUpload']['name'];
                  $newName = "drplist".time().".".pathinfo($path, PATHINFO_EXTENSION);
    
                  $config1 = array(
                      'upload_path'   => "./uploads/profile/",
                      'allowed_types' => "gif|jpg|png|jpeg",
                      'overwrite'     => TRUE,
                      'file_name'     => $newName,
                      'encrypt_name'  => FALSE,
                      'max_size'      => "7000"  // Can be set to particular file size
                      //'max_height'    => "768",
                      //'max_width'     => "1024"
                  );
    
                  $this->load->library('upload', $config1);
                  $this->upload->initialize($config1);
    
                  $this->upload->do_upload('fileToUpload');
                  //$images[] = $fileName1;
                }
                
                $image_array = array('image' => $newName);
                
                $edit_new_image = $this->Admin_model->update_profile_image($session_email, $image_array); 
                
                
                if($edit_new_image){ 
                   
                ?>
                  <script>
                    alert('Updated Successfully');
                    window.location.href="<?php echo site_url('admin/profile'); ?>";
                  </script>
            <?php }else{ ?>
                  <script>
                    alert('Update Failed');
                    window.location.href="<?php echo site_url('admin/profile'); ?>";
                  </script>
                <?php }
    
           }
         }
         
         public function select_location(){
             $country_id = $this->input->post('country_id');
             $state_id = $this->input->post('state_id');
             
            if(isset($country_id)){
                //Get all state data
            	$country_id= $_POST['country_id'];
            	$query = $this->db->query("SELECT * FROM states WHERE country_id = '$country_id' 
            	ORDER BY state_name ASC")->result();
    
                //Display states list
                    echo '<option value="">Select state</option>';
                    foreach($query as $qry){
            		$state_id = $qry->state_id;
            		$state_name = $qry->state_name;
                    echo "<option value='$state_id'>$state_name</option>";
                }
            }
            
            if(isset($state_id)){
                //Get all city data
                $sequel = $this->db->query("SELECT * FROM cities WHERE state_id = '$state_id' 
            	ORDER BY city_name ASC")->result();
            	
                //Display cities list
                    echo '<option value="">Select city</option>';
                    foreach($sequel as $sql){
            		$city_id = $sql->city_id;
            		$city_name= $sql->city_name; 
                    echo "<option value='$city_id'>$city_name</option>";
                    }
                } 
          }
        
        // End of Profile 
        
        // Options
        
        public function options(){
            $session_role = $this->session->userdata('urole');
            $session_email = $this->session->userdata('uemail');
            $data['user_profile'] = $this->Admin_model->display_user_profile($session_email);
            $data['option_category'] = $this->Admin_model->display_option_category();

            if($session_role == "Admin"){
                $this->load->view('admin/option/view', $data);
            }else{ ?>
            <script>
                window.location.href="https://scottnnaghor.com/drplist";
            </script>
     <?php }
        }
        
        public function add_options(){
            $session_role = $this->session->userdata('urole');
            $session_email = $this->session->userdata('uemail');
            $data['user_profile'] = $this->Admin_model->display_user_profile($session_email);
            $data['option_category'] = $this->Admin_model->display_option_category();
            
            $data['country'] = $this->Admin_model->display_countries();
            $data['state'] = $this->Admin_model->display_states();
            $data['town'] = $this->Admin_model->display_towns();

            $submit_category = $this->input->post('btn_category');
            $submit_town = $this->input->post('btn_town');

            if($session_role == "Admin"){
                $this->load->view('admin/option/add', $data);
                
                if(isset($submit_category)){
                    $category = $this->input->post('category');

                    $category_array = array('category' => $category);
                
                    $add_category = $this->Admin_model->add_category_option($category_array);
                
                if($add_category){ ?>
                    <script>
                        alert('Category Option has been added successfully');
                        window.location.href="<?php echo site_url('admin/options'); ?>";
                    </script>
          <?php }else{ ?>
                   <script>
                        alert('Category Option has not been added');
                    </script> 
          <?php   }
                }
                
                if(isset($submit_town)){
                    $town = $this->input->post('town');
                    
                    $town_array = array('town' => $town);
                
                    $add_town = $this->Admin_model->add_town_option($town_array);
                
                    if($add_town){ ?>
                        <script>
                            alert('Town Option has been added successfully');
                            window.location.href="<?php echo site_url('admin/options'); ?>";
                        </script>
              <?php }else{ ?>
                       <script>
                            alert('Town Option has not been added');
                        </script> 
              <?php }
                }
                
            }else{ ?>
            <script>
                window.location.href="https://scottnnaghor.com/drplist";
            </script>
     <?php }
        }
        
        public function edit_options($id){
            $session_role = $this->session->userdata('urole');
            $session_email = $this->session->userdata('uemail');
            $data['user_profile'] = $this->Admin_model->display_user_profile($session_email);
            $data['edit_option_category'] = $this->Admin_model->display_option_category_by_id($id);
            
            $submit_category = $this->input->post('btn_category');
            $submit_town = $this->input->post('btn_town');
            
            if($session_role == "Admin"){
                $this->load->view('admin/option/edit', $data);
                
                if(isset($submit_category)){
                   $category = $this->input->post('category');

                    $category_array = array('category' => $category);
                
                    $update_category = $this->Admin_model->update_category_option($id, $category_array);
                
                if($update_category){ ?>
                    <script>
                        alert('Category Option has been updated successfully');
                        window.location.href="<?php echo site_url('admin/options'); ?>";
                    </script>
          <?php }else{ ?>
                   <script>
                        alert('Category Option has not been updated');
                    </script> 
          <?php   } 
                }
                
                if(isset($submit_town)){
                   $town = $this->input->post('town');

                    $town_array = array('town' => $town);
                
                    $update_town = $this->Admin_model->update_town_option($id, $town_array);
                
                if($update_town){ ?>
                    <script>
                        alert('Town Option has been updated successfully');
                        window.location.href="<?php echo site_url('admin/options'); ?>";
                    </script>
          <?php }else{ ?>
                   <script>
                        alert('Town Option has not been updated');
                    </script> 
          <?php   } 
                }
                
            }else{ ?>
            <script>
                window.location.href="https://scottnnaghor.com/drplist";
            </script>
     <?php }
        }
        
        public function delete_category(){
          $pid = $this->input->post('del_id');
          $this->Admin_model->delete_category($pid);
        }
        
        public function delete_town(){
          $pid = $this->input->post('del_id');
          $this->Admin_model->delete_town($pid);
        }
        
        // End of Options
        
        // Users 
        
        public function users(){
            $session_role = $this->session->userdata('urole');
            $session_email = $this->session->userdata('uemail');
            
            $data['user_profile'] = $this->Admin_model->display_user_profile($session_email);
            $data['users'] = $this->Admin_model->display_users();
            
            $data['country'] = $this->Admin_model->display_countries();
            $data['state'] = $this->Admin_model->display_states();
            $data['town'] = $this->Admin_model->display_towns();
        
           if($session_role == "Admin"){
                $this->load->view('admin/dashboard/users', $data);
           }else{ ?>
            <script>
                window.location.href="https://scottnnaghor.com/drplist";
            </script>
     <?php }
        }
        
        public function activate_user(){
          $pid = $this->input->post('user_id');
          $status = "Active";
          $this->Admin_model->activate_user($pid, $status);
        }
    
        public function deactivate_user(){
          $pid = $this->input->post('user_id');
          $status = "Blocked";
          $this->Admin_model->deactivate_user($pid, $status);
        }
        
        public function delete_user(){
          $pid = $this->input->post('user_id');
          $this->Admin_model->delete_user($pid);
        }
        
        // End of Users 
        
        // Posting 
        
        public function posting(){
            $session_role = $this->session->userdata('urole');
            $session_email = $this->session->userdata('uemail');
            
            $data['user_profile'] = $this->Admin_model->display_user_profile($session_email);
            $data['posting'] = $this->Admin_model->display_postings();
        
           if($session_role == "Admin"){
                $this->load->view('admin/posting/view', $data);
           }else{ ?>
            <script>
                window.location.href="https://scottnnaghor.com/drplist";
            </script>
     <?php }
        }
        
        public function detail_posting($id){
            $session_role = $this->session->userdata('urole');
            $session_email = $this->session->userdata('uemail');
            
            $data['user_profile'] = $this->Admin_model->display_user_profile($session_email);
            $data['posting'] = $this->Admin_model->display_posting_by_id($id);
        
           if($session_role == "Admin"){
                $this->load->view('admin/posting/detail', $data);
           }else{ ?>
            <script>
                window.location.href="https://scottnnaghor.com/drplist";
            </script>
     <?php }
        }
        
        public function add_posting(){
            $session_role = $this->session->userdata('urole');
            $session_email = $this->session->userdata('uemail');
            
            $data['user_profile'] = $this->Admin_model->display_user_profile($session_email);
            $data['option_category'] = $this->Admin_model->display_option_category();

           if($session_role == "Admin"){
                $this->load->view('admin/posting/add', $data);
                
                $submit = $this->input->post('btn_add');
                
                if(isset($submit)){
                    $title = $this->input->post('title');
                    $str_title = str_replace(' ', '-', $title);
                    $description = $this->input->post('description');
                    $category = $this->input->post('category');
                    $str_category = str_replace(' ', '-', $category);
                    $town = $this->input->post('town');
                    $price = $this->input->post('price');
                    $state = $this->input->post('state');
                    $status = "Approved";
                    $time = time();
                    $date = date('Y-m-d H:i:s');
            
                    $files = $_FILES;
                    $cpt1 = count($_FILES['fileToUpload']['name']);
                    
                    for($i=0; $i<$cpt1; $i++){
                      $_FILES['fileToUpload']['name']= $files['fileToUpload']['name'][$i];
                      $_FILES['fileToUpload']['type']= $files['fileToUpload']['type'][$i];
                      $_FILES['fileToUpload']['tmp_name']= $files['fileToUpload']['tmp_name'][$i];
                      $_FILES['fileToUpload']['error']= $files['fileToUpload']['error'][$i];
                      $_FILES['fileToUpload']['size']= $files['fileToUpload']['size'][$i];
                      
                      $allowedExts = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
                      $extension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
            
                      $path = $_FILES['fileToUpload']['name'];
                      if(!isset($_FILES['fileToUpload'])){
                          $newName = "Community.jpg";
                      }else{
                          $newName = "drplist".time().".".pathinfo($path, PATHINFO_EXTENSION);
                          //$newName =  $_FILES['fileToUpload']['name'];
                      }
                      
                      $config1 = array(
                          'upload_path'   => "./uploads/posting/",
                          'allowed_types' => "jpg|png|jpeg",
                          'overwrite'     => TRUE,
                          'file_name'     => $newName,
                          'encrypt_name'  => FALSE,
                          'max_size'      => "7000",
                          'image_library'   => 'gd2',
                          'source_image'    =>  isset($image_data['full_path']) ? $image_data['full_path'] : '',
                          'maintain_ratio'  =>  TRUE,
                          'width'           =>  250,
                          'height'          =>  250,
                          // Can be set to particular file size
                          //'max_height'    => "768",
                          //'max_width'     => "1024"
                      );
            
                      $this->load->library('upload', $config1);
                      $this->load->library('image_lib');
                      $this->upload->initialize($config1);
                      $this->image_lib->clear();
                      $this->image_lib->initialize($config1);
                      $this->image_lib->resize();
            
                      $var = 1;
                      
                      /*if(!in_array($extension, $allowedExts)){ ?>
                          <script>
                            alert('Invalid Image Format | No Image Selected');
                        </script>
                <?php }else if(in_array($extension, $allowedExts)){ 
                        $this->upload->do_upload('fileToUpload');
                      }*/
                      
                      $this->upload->do_upload('fileToUpload');
                    
                    }
                    
                    if(in_array($extension, $allowedExts)){
                      if(isset($_FILES['fileToUpload'])){
                          $add_array = array(
                            'title' => $str_title,
                            'description' => $description,
                            'price' => $price,
                            'posted_by' => $session_email,
                            'category' => $str_category,
                            'status' => $status,
                            'town' => $town,
                            'state' => $state,
                            'image' => $newName,
                            'created_time' => $time,
                            'created_date' => $date
                          );
                      }else{
                          $add_array = array(
                            'title' => $str_title,
                            'description' => $description,
                            'price' => $price,
                            'posted_by' => $session_email,
                            'category' => $str_category,
                            'image' => 'Community.jpg',
                            'status' => $status,
                            'town' => $town,
                            'state' => $state,
                            'created_time' => $time,
                            'created_date' => $date
                          );
                      }
                      
                      $add_post = $this->Admin_model->add_posting($add_array);
                      $last_id = $this->db->insert_id();
                    }
                    
                if($add_post && in_array($extension, $allowedExts)){ 
                    ?>
                      <script>
                        alert('Uploaded Posting');
                        window.location.href="<?php echo base_url('admin/detail_posting/'.$last_id); ?>";
                      </script>
              <?php }else{ ?>
                      <script>
                        alert('Upload Failed');
                        window.location.href="<?php echo site_url('admin/posting'); ?>";
                      </script>
                   <?php }    
                }
                
           }else{ ?>
            <script>
                window.location.href="https://scottnnaghor.com/drplist";
            </script>
     <?php }
        }
        
        public function edit_posting($id){
            $session_role = $this->session->userdata('urole');
            $session_email = $this->session->userdata('uemail');
            
            $data['user_profile'] = $this->Admin_model->display_user_profile($session_email);
            $data['edit_posting'] = $this->Admin_model->display_posting_by_id($id);
            $data['option_category'] = $this->Admin_model->display_option_category();
            
            $data['country'] = $this->Admin_model->display_countries();
            $data['state'] = $this->Admin_model->display_states();
            $data['town'] = $this->Admin_model->display_towns();
        
           if($session_role == "Admin"){
                $submit = $this->input->post('btn_edit');
               
                $this->load->view('admin/posting/edit', $data);
                
                if(isset($submit)){
                    $title = $this->input->post('title');
                    $str_title = str_replace(' ', '-', $title);
                    $description = $this->input->post('description');
                    $category = $this->input->post('category');
                    $str_category = str_replace(' ', '-', $category);
                    $town = $this->input->post('town');
                    $price = $this->input->post('price');
                    $state = $this->input->post('state');
                    $status = "Pending";
                    $time = time();
                    $date = date('Y-m-d H:i:s');
                    
                      $update_array = array(
                        'title' => $str_title,
                        'description' => $description,
                        'price' => $price,
                        'posted_by' => $session_email,
                        'category' => $str_category,
                        'status' => $status,
                        'town' => $town,
                        'state' => $state,
                        'created_time' => $time,
                        'created_date' => $date
                      );
                  
                  $updated_post = $this->Admin_model->updated_posting($id, $update_array);
                    
                if($updated_post){ 
                    ?>
                      <script>
                        alert('Updated Posting');
                        window.location.href="<?php echo base_url('admin/posting'); ?>";
                      </script>
              <?php }else{ ?>
                      <script>
                        alert('Updating Failed');
                        window.location.href="<?php echo site_url('admin/posting'); ?>";
                      </script>
                   <?php }    
                }
           }else{ ?>
            <script>
                window.location.href="https://scottnnaghor.com/drplist";
            </script>
     <?php }
        }
        
        public function update_image($id){
            $session_email = $this->session->userdata('uemail');
            $submit_image = $this->input->post('btn_image');
    
             if(isset($submit_image)){
    
               $files = $_FILES;
               $cpt1 = count($_FILES['fileToUpload']['name']);
    
                for($i=0; $i<$cpt1; $i++){
                  $_FILES['fileToUpload']['name']= $files['fileToUpload']['name'][$i];
                  $_FILES['fileToUpload']['type']= $files['fileToUpload']['type'][$i];
                  $_FILES['fileToUpload']['tmp_name']= $files['fileToUpload']['tmp_name'][$i];
                  $_FILES['fileToUpload']['error']= $files['fileToUpload']['error'][$i];
                  $_FILES['fileToUpload']['size']= $files['fileToUpload']['size'][$i];
    
                  $path = $_FILES['fileToUpload']['name'];
                  $newName = "drplist".time().".".pathinfo($path, PATHINFO_EXTENSION);
    
                  $config1 = array(
                      'upload_path'   => "./uploads/posting/",
                      'allowed_types' => "gif|jpg|png|jpeg",
                      'overwrite'     => TRUE,
                      'file_name'     => $newName,
                      'encrypt_name'  => FALSE,
                      'max_size'      => "7000"  // Can be set to particular file size
                      //'max_height'    => "768",
                      //'max_width'     => "1024"
                  );
    
                  $this->load->library('upload', $config1);
                  $this->upload->initialize($config1);
    
                  $this->upload->do_upload('fileToUpload');
                  //$images[] = $fileName1;
                }
                
                $image_array = array('image' => $newName);
                
                $edit_new_image = $this->Admin_model->updated_posting_image($id, $image_array); 
                
                
                if($edit_new_image){ 
                   
                ?>
                  <script>
                    alert('Updated Successfully');
                    window.location.href="<?php echo site_url('admin/posting'); ?>";
                  </script>
            <?php }else{ ?>
                  <script>
                    alert('Update Failed');
                    window.location.href="<?php echo site_url('admin/posting'); ?>";
                  </script>
                <?php }
    
           }
         }
         
         public function reject_post(){
          $pid = $this->input->post('order_id');
          $status = "Rejected";
          $this->Admin_model->reject_post($pid, $status);
        }
        
        public function send_payment(){
            $pid = $this->input->post('order_id');
            
            $query = $this->db->query("SELECT * FROM posting WHERE id = '$pid' ")->result();
            foreach($query as $qry){
                $posted_email = $qry->posted_by;
                $post_title = $qry->title;
            }
            
            $subject = "Payment Request for Posting";
            $body = "
                Hi member, please find the request to make payment for this post - $post_title
                Payment can be made either through CashApp or Zelle.
                Please use this tag reference - #princess";
              
            $config = Array(
             'protocol' => 'smtp',
             'smtp_host' => 'smtp.scottnnaghor.com',
             'smtp_port' => 25,
             'smtp_user' => 'admin@scottnnaghor.com', // change it to account email
             'smtp_pass' => 'TigerPhenix100', // change it to account email password
             'mailtype' => 'html',
             'charset' => 'iso-8859-1',
             'wordwrap' => TRUE
             );
    
            $this->load->library('email', $config);
             //$this->load->library('encrypt');
            $this->email->from('admin@scottnnaghor.com', "DRPLIST Team");
            $this->email->to("$posted_email");
             //$this->email->cc("testcc@domainname.com");
            $this->email->subject("$subject");
            $this->email->message("$body");
            $this->email->send();
        }
        
        public function delete_post(){
          $pid = $this->input->post('order_id');
          $this->Admin_model->delete_post($pid);
        }
        
        // End of Posting 
        
        // Personalised Ads
        
        public function personalised_ad(){
            $this->load->view('admin/ads/view');
        }
        
        public function detail_personalised_ad(){
            $this->load->view('admin/ads/detail');
        }
        
        public function add_personalised_ad(){
            $this->load->view('admin/ads/add');
        }
        
        public function edit_personalised_ad(){
            $this->load->view('admin/ads/edit');
        }
        
        // End of Personalised ads
        
        // Payments 
        
        public function payments(){
            $session_role = $this->session->userdata('urole');
            $session_email = $this->session->userdata('uemail');
            
            $data['user_profile'] = $this->Admin_model->display_user_profile($session_email);
            $data['payment'] = $this->Admin_model->display_payments();
        
           if($session_role == "Admin"){
                $this->load->view('admin/dashboard/payments', $data);
           }else{ ?>
            <script>
                window.location.href="https://scottnnaghor.com/drplist";
            </script>
     <?php }
        }
        
        public function approve_payment(){
          $pid = $this->input->post('order_id');
          $status = "Approved";
          $this->Admin_model->approve_payment($pid, $status);
        }
    
        public function cancel_payment(){
          $pid = $this->input->post('order_id');
          $status = "Cancelled";
          $this->Admin_model->cancel_payment($pid, $status);
        }
        
        public function delete_payment(){
          $pid = $this->input->post('order_id');
          $this->Admin_model->delete_payment($pid);
        }
        
        // End of Payments
        
    }

?>