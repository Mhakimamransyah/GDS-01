<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanah{

	var $dao;
	var $data_kawasan_tanah = [];
	var $data_tanah = [];

    public function __construct()
    {     
       $this->CI =& get_instance();
       $this->CI->load->model('PostsDB'); 
       // $this->CI->load->model('Perumahan_model'); 
       $this->dao = new PostsDB();
       
    }

	public function getKawasanTanah(){
	  $this->data_kawasan_tanah = [];
	  foreach ($this->dao->getKawasanTanahDB() as $kawasan_tanah_db) {
	  	 $kawasan_tanah = new Kawasan_tanah_model();
	  	 $kawasan_tanah->setId($kawasan_tanah_db->id_kawasan_tanah);
	  	 $kawasan_tanah->setDataTanah($this->getTanah($kawasan_tanah_db->id_kawasan_tanah));
	  	 $kawasan_tanah->setKawasan($kawasan_tanah_db->kawasan);
	  	 $kawasan_tanah->setBanner($kawasan_tanah_db->banner);
	  	 $kawasan_tanah->setUmum($kawasan_tanah_db->umum);
	  	 array_push($this->data_kawasan_tanah,$kawasan_tanah);
	  }
	  return $this->data_kawasan_tanah;
	}

	public function getTanah($id){
      $this->data_tanah = [];
      foreach ($this->dao->getTanahDB($id) as $tanahdb) {
      	$tanah = new Tanah_model();
      	$tanah->setId($tanahdb->id_tanah);
      	$tanah->setNama($tanahdb->nama);
      	$tanah->setBanner($tanahdb->banner);
      	$tanah->setBody($tanahdb->umum);
      	array_push($this->data_tanah,$tanah);
      }
      return $this->data_tanah;
	}

	public function getDataTanahById($tanah,$id){
        $result;
        for($i=0;$i<sizeof($tanah);$i++){
           if($tanah[$i]->id == $id){
                $result = $tanah[$i];
           }
        }
        if(empty($result)){
           $result = "";
        }
        return $result;
	}
}