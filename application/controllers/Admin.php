<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('postBH_models');
			$this->load->model('postTL_models');
			$this->load->model('postPT_models');
			
		}

	public function view($page = 'dashboard')
	{
		if (!file_exists(APPPATH.'views/admin/'.$page.'.php')){
			show_404();
		}
        $data['title'] = ucfirst($page);
		
		$this->load->view('templates/header_adm');
		$this->load->view('templates/left_adm');
		$this->load->view('templates/right_adm');
		$this->load->view('admin/'.$page, $data);
		$this->load->view('templates/footer_adm');
	}
	
	public function create (){
		
		$data['title'] = 'Creat Post';
		
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('body','body','required');
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header_adm');
			$this->load->view('templates/left_adm');
			$this->load->view('templates/right_adm');
			$this->load->view('post/table_post', $data);
			$this->load->view('templates/footer');
		}else{
			$this->postBH_models->create_post();
			redirect('home2');
		}
		
	
	}
}


