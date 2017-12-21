<?php
	class Tanah_model extends CI_Model{
        var $id;
        var $nama;
        var $banner;
        var $body;

        public function setId($newId){
            $this->id= $newId;
        }

        public function setNama($newNama){
            $this->nama= $newNama;
        }

        public function setBanner($newBanner){
            $this->banner= $newBanner;
        }

        public function setBody($newBody){
            $this->body = $newBody;
        }
	}