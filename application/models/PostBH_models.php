<?php
	class PostBH_models extends CI_Model {
		
		protected $primary_key= 'id';
		protected $table_name="post_bh";
	
		public function __construct()
		{
			$this->load->database();
		}
		
		public function get_post($slug = FALSE)
		{
			if ($slug === FALSE){
				$this->db->order_by($this->primary_key,'desc');
				$query = $this->db->get('post_bh');
				return $query->result_array();
			}
			
			$query = $this->db->get_where('post_bh', array('slug' => $slug));
			return $query->row_array();
		
		}
		
		public function create_post(){
			$slug = url_title($this->input->post('title'));
			
			$data = array(
				'category' => $this->input->post('category'),
				'creat_name' => $this->input->post('creat_name'),
				'slug' => $slug,
				'title' => $this->input->post('title'),
				'short_post' => $this->input->post('short_post'),
				'body' => $this->input->post('body')
			);
			
			return $this->db->insert('post_bh', $data);
		}
		
		
		public function hapus_post($id){
				$this->db->where('id', $id);
				$this->db->delete('post_bh');
				return true;
		}
		
		public function update_post(){
			$slug = url_title($this->input->post('title'));
			
			$data = array(
				'category' => $this->input->post('category'),
				'creat_name' => $this->input->post('creat_name'),
				'slug' => $slug,
				'title' => $this->input->post('title'),
				'short_post' => $this->input->post('short_post'),
				'body' => $this->input->post('body')
			);
			
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('post_bh', $data);
		}
	}

?>