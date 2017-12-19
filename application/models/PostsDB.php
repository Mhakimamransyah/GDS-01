<?php
	class PostsDB extends CI_Model{
        
        public function getPerumahanDB(){
           $sql = 'SELECT id as id_perumahan,name as perumahan,image as banner, umum  as umum FROM `categories`WHERE jenis=1';
           $query = $this->db->query($sql);
           return $query->result();
        }

        public function getRumahDB($id_perumahan){
           $sql = 'SELECT id as id_rumah,title as nama,body as umum,post_image as banner FROM `posts` WHERE category_id ='.$id_perumahan;
           $query = $this->db->query($sql);
           return $query->result();
        }

	}