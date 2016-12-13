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
			
			
			
		}
    
//     public function upload_form()
//     { 
//         $this->load->model('Property');

//         $data['name'] = $this->Property->get();
//     		$this->load->view('properties/upload_form', $data);
// 		}
	
//      public function thank()
//     {
// 				$error = ['error'=> ''];   
// 				$data = [];
// 				$config['upload_path'] = './uploads/';
//         $config['allowed_types']  = 'gif|jpg|png';
       
              

//         $this->load->library('upload', $config);
				
			
// 				if($this->input->method() == 'post'){

// 					if ( ! $this->upload->do_upload('uploadFile'))
// 					 {
// 						$error = array('error' => $this->upload->display_errors());

// 					 }
// 					else
// 					{
// 						$data['uploadedImage'] = $this->upload->data();
// 					}
// 				}
				
//         $this->load->helper(array('form', 'url'));
// 				$this->load->model('Property');
// 				$this->load->view('layouts/header');
// 				$data['name'] = $this->Property->get();
// //        	$this->load->view('properties/uploadPreview', $error);
//         $this->load->view('properties/thank', $data);
			
			
			

//     }
    
    
//     public function db_test()
//    {
//       $this->load->model('Property');
//       $this->Property->connection_test();
//    }
}

