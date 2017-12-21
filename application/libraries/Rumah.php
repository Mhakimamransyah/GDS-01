<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah{
    
     var $dao;
     var $data_rumah = [];

    public function __construct()
    {     
       $this->CI =& get_instance();
       $this->CI->load->model('PostsDB'); 
       // $this->CI->load->model('Perumahan_model'); 
       $this->dao = new PostsDB();
       
    }

    public function getRumah($id){
    	$this->data_rumah = [];
    	foreach($this->dao->getRumahDB($id) as $rumahDB){
            $rumah = new Rumah_model();
            $rumah->setId($rumahDB->id_rumah);
            $rumah->setNama($rumahDB->nama);
            $rumah->setBanner($rumahDB->banner);
            $rumah->setBody($rumahDB->umum);
            array_push($this->data_rumah,$rumah);
    	}
    	return $this->data_rumah;  
    }

    public function specifyRumahById($dr,$id_rumah){
      /*
      *TODO : Ambil data rumah dengan id.
      *
      */
      $result;
      for($i=0;$i<sizeof($dr);$i++){
         if($dr[$i]->id == $id_rumah){
            $result = $dr[$i];
         }
      }
      if(empty($result)){
           $result = "";
      }
      return $result;
    }

}