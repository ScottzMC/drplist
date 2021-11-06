<?php

    class Home extends CI_Controller {

    	public function index(){
            $data['state'] = $this->Data_model->display_states_in_home();

    		$this->load->view('site/home', $data);
    	}

    }

?>
