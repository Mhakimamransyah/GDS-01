<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {
    
    var $resource = "resource/user/";  //RESOURCE FILE JQUERY,BOOTSTRAP,DLL.

	public function __construct()
    {
        parent::__construct();
    }

	public function _remap($method,$params = array()){

		if(method_exists($this, $method)){

            call_user_func_array(array($this, $method), $params);
		}
		else{
            $this->showHomePage();
		}
	}

	private function showHomePage(){
		/*
		  TODO : tampilan awal ketika website di load user.
		  kelas :
		  perumahan,sistem,tanah
		*/
      $perumahan = $this->perumahan->getPerumahan();
      $this->session->set_userdata('perumahan_sess', json_encode($perumahan));
	    
      $this->load->view("user/home/headerandbanner",["res"=>$this->resource,"perumahan"=>$perumahan]);    
	    $this->load->view("user/home/list_perumahan"); 
	    $this->load->view("user/home/list_tanah");
	    $this->load->view("user/home/web_promotion");
	    $this->load->view("user/footer");
	}
    
    private function lihatPerumahan($id,$id_rumah=""){
      if($id_rumah != ""){
             $perumahan_data = $this->perumahan->specifyPerumahanById(json_decode($this->session->userdata('perumahan_sess')),$id);
         $rumah_data = $this->rumah->specifyRumahById($perumahan_data->data_rumah,$id_rumah);
          $this->load->view("user/header",["res"=>$this->resource,"perumahan"=>$perumahan_data]);
          $this->load->view("user/rumah/rumah",["rumah"=>$rumah_data]);
          $this->load->view("user/footer");
      }
      else{
         $perumahan_data = $this->perumahan->specifyPerumahanById(json_decode($this->session->userdata('perumahan_sess')),$id);
         $this->load->view("user/header",["res"=>$this->resource,"perumahan"=>$perumahan_data]);
         $this->load->view("user/perumahan/umum");
         $this->load->view("user/perumahan/blueprint");
         $this->load->view("user/perumahan/sidebar");
         $this->load->view("user/perumahan/list_rumah");
         $this->load->view("user/footer");
       }
    }

    private function lihatTanah($id=""){
    	$this->load->view("user/tanah/header",["res"=>$this->resource]);
    	if($id != ""){
    		$this->load->view("user/tanah/content_tanah");
            $this->load->view("user/sidebar",["side"=>"Tanah"]);
    	}else{
    	  $this->load->view("user/tanah/list_tanah");
    	}
    	$this->load->view("user/footer");
    }

}
