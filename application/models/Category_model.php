<?php
	class Category_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create_category($post_image){
			$data = array(
				'name' => $this->input->post('name'),
				'jenis' => $this->input->post('jenis'),
				'image' => $post_image,
				'umum' => $this->input->post('desc')
				);
			return $this->db->insert('categories', $data);
		}
		
		public function get_categories($id = FALSE){
			//$this->db->order_by('name')	;
			//$query = $this->db->get('categories');

			// return $query->result_array();
			if($id === FALSE){
				$this->db->order_by('categories.id','DESC');
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('categories');
				return $query->result_array();
			}

			$query = $this->db->get_where('categories', array('id' => $id));
			return $query->row_array();
		}

		public function get_category($id){
			$query = $this->db->get_where('categories', array('id' => $id));

			return $query->row();
		}

		public function delete_category($id) {
			$this->db->where('id', $id);
			$this->db->delete('categories');
			return true;
		}

		public function update_category($id, $category_image) {
			$slug = url_title($this->input->post('title'));
			$data = array(
				'name' => $this->input->post('name'),
				'jenis' => $this->input->post('jenis'),
				'image' => $category_image,
				'umum' => $this->input->post('desc'),

			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('categories', $data);
		}
		
	}