<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perumahan{
     
    var $dao;
    var $data_perumahan = [];
   

	public function __construct()
    {     
       $this->CI =& get_instance();
       $this->CI->load->model('PostsDB'); 
       // $this->CI->load->model('Perumahan_model'); 
       $this->dao = new PostsDB();
       
    }

    public function getPerumahan(){
      $this->data_perumahan = [];
    	foreach($this->dao->getPerumahanDB() as $perumahanDB){
            $perumahan = new Perumahan_model();
            $perumahan->setId($perumahanDB->id_perumahan);
            $perumahan->setNama($perumahanDB->perumahan);
            $perumahan->setBanner($perumahanDB->banner);
            $perumahan->setUmum($perumahanDB->umum);
            array_push($this->data_perumahan,$perumahan);
    	}
    	return $this->data_perumahan;    	
    }

    public function specifyPerumahanById($data_perumahan,$id){
      /*
      * TODO : ambil data perumahan by id
      *
      */
       $result;
       for($i=0;$i<sizeof($data_perumahan);$i++){
           if($data_perumahan[$i]->id == $id){
              $result = $data_perumahan[$i];
           }
       }
       if(empty($result)){
           $result = "";
       }
       return $result;
    }

    
}