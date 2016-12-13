<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properties extends CI_Controller {

	
	//only this controller needed!!!! IMPORTANT
		public function index()
		{
					
				$error = ['error'=> ''];   
				$data = [];
				$config['upload_path'] = './uploads/';
        $config['allowed_types']  = 'gif|jpg|png';
              

        $this->load->library('upload', $config);
			
				if($this->input->method() == 'post'){

					if ( ! $this->upload->do_upload('uploadFile'))
					 {
						$error = array('error' => $this->upload->display_errors());

					 }
					else
					{
						$data['uploadedImage'] = $this->upload->data();
					}
				}
				
        $this->load->helper(array('form', 'url'));
				$this->load->model('Property');
				$this->load->view('layouts/header');
				$data['name'] = $this->Property->get();
        $this->load->view('properties/index', $data);
				$this->load->view('layouts/footer');
			
		}
 
}

