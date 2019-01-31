<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('postBH_models');
			$this->load->model('postTL_models');
			$this->load->model('postPT_models');
		}

	public function blog_BH()
	{
		
        $data['title'] = 'Beauty & Healthy';
		$data['quote'] = '" Its not selfish to love yourself, take care of yourself and to make your happiness a priority. its necessary "';
		$data['con'] = 'view_bh';
		$data['post'] = $this->postBH_models->get_post();
		
		
		$this->load->view('templates/header');
		$this->load->view('post/blog', $data);
		$this->load->view('templates/footer');
	}
	
	public function blog_TL()
	{
		
        $data['title'] = 'Think & Love';
		$data['quote'] = '" Live Simply, Love Generonsly, Learn Constantly "';
		$data['con'] = 'view_tl';
		$data['post'] = $this->postTL_models->get_post();
		
		
		$this->load->view('templates/header');
		$this->load->view('post/blog', $data);
		$this->load->view('templates/footer');
	}
	
	public function blog_PT()
	{
		
        $data['title'] = 'Place & Travel';
		$data['quote'] = '" Fill your life with adventure, not things. Have stories to tell, not stuff to show "';
		$data['con'] = 'view_pt';
		$data['post'] = $this->postPT_models->get_post();
		
		
		$this->load->view('templates/header');
		$this->load->view('post/blog', $data);
		$this->load->view('templates/footer');
	}
	
	
	public function create_BH (){
		
		$data['title'] = 'Buat Post Baru';
		$data['category1'] = 'Beauty';
		$data['category2'] = 'Healthy';
		$data['con']='create_BH';
		$data['con2']='hapus_BH';
		$data['con3']='view_bh';
		$data['con4']='edit_bh';
		$data['post'] = $this->postBH_models->get_post();
		
		$this->form_validation->set_rules('category','category','required');
		$this->form_validation->set_rules('creat_name','Nama Penulis','required');
		$this->form_validation->set_rules('title','Judul','required');
		$this->form_validation->set_rules('short_post','Intisari','required');
		$this->form_validation->set_rules('body','Deskripsi','required');
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header_adm');
			$this->load->view('templates/left_adm');
			$this->load->view('templates/right_adm');
			$this->load->view('post/create', $data);
			$this->load->view('templates/footer_adm');
		}else{
			$this->postBH_models->create_post();
			redirect('post/create_BH');
		}
		
		
		
	}
	
	public function create_TL (){
		
		$data['title'] = 'Buat Post Baru';
		$data['category1'] = 'Think';
		$data['category2'] = 'Love';
		$data['con']='create_TL';
		$data['con2']='hapus_TL';
		$data['con3'] = 'view_tl';
		$data['con4']='edit_TL';
		$data['post'] = $this->postTL_models->get_post();
		
		$this->form_validation->set_rules('category','category','required');
		$this->form_validation->set_rules('creat_name','Nama Penulis','required');
		$this->form_validation->set_rules('title','Judul','required');
		$this->form_validation->set_rules('short_post','Intisari','required');
		$this->form_validation->set_rules('body','Deskripsi','required');
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header_adm');
			$this->load->view('templates/left_adm');
			$this->load->view('templates/right_adm');
			$this->load->view('post/create', $data);
			$this->load->view('templates/footer_adm');
		}else{
			$this->postTL_models->create_post();
			redirect('post/create_TL');
		}
		
		
	}
	
	public function create_PT (){
		
		$data['title'] = 'Buat Post Baru';
		$data['category1'] = 'Place';
		$data['category2'] = 'Travel';
		$data['con']='create_PT';
		$data['con2']='hapus_PT';
		$data['con3'] = 'view_pt';
		$data['con4']='edit_PT';
		$data['post'] = $this->postPT_models->get_post();
		
		$this->form_validation->set_rules('category','category','required');
		$this->form_validation->set_rules('creat_name','Nama Penulis','required');
		$this->form_validation->set_rules('title','Judul','required');
		$this->form_validation->set_rules('short_post','Intisari','required');
		$this->form_validation->set_rules('body','Deskripsi','required');
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header_adm');
			$this->load->view('templates/left_adm');
			$this->load->view('templates/right_adm');
			$this->load->view('post/create', $data);
			$this->load->view('templates/footer_adm');
		}else{
			$this->postPT_models->create_post();
			redirect('post/create_PT');
		}
		
	
		
	}
	public function hapus_BH($id){
			
			$this->postBH_models->hapus_post($id);
			redirect('post/create_BH');
	}
	
	public function hapus_TL($id){
			
			$this->postTL_models->hapus_post($id);
			redirect('post/create_TL');
	}
	public function hapus_PT($id){
			
			$this->postPT_models->hapus_post($id);
			redirect('post/create_PT');
	}
	
	public function edit_BH($slug){
		$data['post'] = $this->postBH_models->get_post($slug);
		
		if(empty($data['post'])){
			show_404;
		}
		
		$data['title'] = 'Beauty & Healthy';
		$data['con'] = 'update_BH';
		$data['con2'] = 'create_BH';
		$data['category1'] = 'Beauty';
		$data['category2'] = 'Healthy';
		
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header_adm');
			$this->load->view('post/ubah', $data);
			$this->load->view('templates/footer_adm');
		}else{
			
			redirect('post/create_BH');
		}
			
		
	}
	
	public function edit_TL($slug){
		$data['post'] = $this->postTL_models->get_post($slug);
	
		if(empty($data['post'])){
			show_404;
		}
		
		$data['title2'] = 'Edit Post Think & Love';
		$data['con'] = 'edit_TL';
		
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header_adm');
			$this->load->view('post/edit', $data);
			$this->load->view('templates/footer_adm');
		}else{
			$this->postPT_models->create_post();
			redirect('post/create_TL');
			
		}
		
	}
	
	public function edit_PT($slug){
		$data['post'] = $this->postPT_models->get_post($slug);
	
		if(empty($data['post'])){
			show_404;
		}
		
		$data['title2'] = 'Edit Post Place & Travel';
		$data['con'] = 'edit_PT';
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header_adm');
			$this->load->view('post/edit', $data);
			$this->load->view('templates/footer_adm');
		}else{
			$this->postPT_models->create_post();
			redirect('post/create_PT');
		}
		
	}
	
	public function update_BH(){
		$this->postBH_models->update_post();
		redirect('post/create_BH');
		
	}
}