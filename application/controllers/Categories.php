<?php
	class Categories extends CI_Controller{
		var $resource = "resource/user/";
		public function index(){
			if(!$this->session->userdata('logged_in')){
				redirect('admin/login');
			}
			$data['title'] = 'Categories';

			$data['categories'] = $this->category_model->get_categories();
			$this->load->view('templates/header',['res'=>$this->resource]);
			$this->load->view('categories/index', $data);
			$this->load->view('templates/footer');
		}
		public function create(){
			if(!$this->session->userdata('logged_in')){
				redirect('admin/login');
			}
			$data['title'] = 'Create Category';

			$this->form_validation->set_rules('name', 'Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header',['res'=>$this->resource]);
				$this->load->view('categories/create', $data);
				$this->load->view('templates/footer');
			} else {
				$config['upload_path'] = 'C:/xampp/htdocs/gds/resource/images/categories/'; // PAKEK BASE URL ?
				$config['allowed_types'] = 'png|jpg';
				$config['max_size'] = '0';
				$config['max_width'] = '0';
				$config['max_height'] = '0';
				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
				}

				$this->category_model->create_category($post_image);
				redirect('categories');
			}
		}
		public function posts($id){
			if(!$this->session->userdata('logged_in')){
				redirect('admin/login');
			}
			$data['title'] = $this->category_model->get_category($id)->name;

			$data['posts'] = $this->post_model->get_posts_by_category($id);
			$this->load->view('templates/header',['res'=>$this->resource]);
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}

		public function edit($id) {
			if(!$this->session->userdata('logged_in')){
				redirect('admin/login');
			}
			$data['category'] = $this->category_model->get_categories($id);

			if(empty($data['category'])){
				show_404();
			}

			$data['title'] = 'Edit Category';
			$this->load->view('templates/header',['res'=>$this->resource]);
			$this->load->view('categories/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update($id){
			if(!$this->session->userdata('logged_in')){
				redirect('admin/login');
			}

			$config['upload_path'] = 'C:/xampp/htdocs/gds/resource/images/categories/'; // PAKEK BASE URL ?
			$config['allowed_types'] = 'png|jpg';
			$config['max_size'] = '0';
			$config['max_width'] = '0';
			$config['max_height'] = '0';
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				$category_image = 'noimage.jpg';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$category_image = $_FILES['userfile']['name'];
			}
				

			$this->category_model->update_category($id, $category_image);	
			redirect('categories');	
		}

		public function delete($id) {
			if(!$this->session->userdata('logged_in')){
				redirect('admin/login');
			}
			$this->category_model->delete_category($id);
			redirect('categories');
		}
	}
