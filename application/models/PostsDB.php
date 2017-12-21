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

        public function getKawasanTanahDB(){
            $sql = 'SELECT id as id_kawasan_tanah,name as kawasan,image as banner, umum  as umum FROM `categories`WHERE jenis=2';
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function getTanahDB($id_kawasan){
             $sql = 'SELECT id as id_tanah,title as nama,body as umum,post_image as banner FROM `posts` WHERE category_id ='.$id_kawasan;
            $query = $this->db->query($sql);
            return $query->result();
        }

	}