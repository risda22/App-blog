<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('postBH_models');
			$this->load->model('postTL_models');
			$this->load->model('postPT_models');
		}

	
	public function view_bh ($slug = NULL){
		$data['post'] = $this->postBH_models->get_post($slug);
		
		if(empty($data['post'])){
			show_404;
		}
		
		$data['title'] = 'Beauty & Healthy';
		$data['con'] = 'blog_BH';
		
		$this->load->view('templates/header');
		$this->load->view('post/view', $data);
		$this->load->view('templates/footer');
	}
	
	public function view_tl ($slug = NULL){
		$data['post'] = $this->postTL_models->get_post($slug);
		
		if(empty($data['post'])){
			show_404;
		}
		
		$data['title'] = 'Think & Love';
		$data['con'] = 'blog_TL';
		
		$this->load->view('templates/header');
		$this->load->view('post/view', $data);
		$this->load->view('templates/footer');
	}
	
	public function view_pt ($slug = NULL){
		$data['post'] = $this->postPT_models->get_post($slug);
		
		if(empty($data['post'])){
			show_404;
		}
		
		$data['title'] = 'Place & Travel';
		$data['con'] = 'blog_PT';
		
		$this->load->view('templates/header');
		$this->load->view('post/view', $data);
		$this->load->view('templates/footer');
	}
	
}