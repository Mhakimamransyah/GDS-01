<?php
	class Kawasan_tanah_model extends CI_Model{
       
       var $id;
       var $kawasan;
       var $banner;
       var $umum;
       var $data_tanah = [];

       public function setId($newId){
           $this->id = $newId;
       }

       public function setKawasan($newKawasan){
           $this->kawasan = $newKawasan;
       }

       public function setBanner($newBanner){
           $this->banner= $newBanner;
       }

       public function setUmum($newUmum){
           $this->umum= $newUmum;
       }

       public function setDataTanah($newDataTanah){
           $this->data_tanah= $newDataTanah;
       }
	}