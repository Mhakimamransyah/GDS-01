<?php
	class Perumahan_model extends CI_Model{

		var $id;
		var $nama;
		var $banner;
		var $umum;
		var $data_rumah = [];
        

		public function setId($newId){
            $this->id = $newId;
            $this->setRumah($this->rumah->getRumah($newId));
		}

		public function setNama($newNama){
			$this->nama= $newNama;
		}

		public function setBanner($newBanner){
			$this->banner= $newBanner;
		}

		public function setUmum($newUmum){
			$this->umum= $newUmum;
		}

		public function setRumah($data_rumah){
            $this->data_rumah = $data_rumah;
		}

	}