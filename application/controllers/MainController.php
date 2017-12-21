<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {
    
    var $resource = "resource/user/";  //RESOURCE FILE JQUERY,BOOTSTRAP,DLL.

	public function __construct()
    {
        parent::__construct();
    }


	public function _remap($method="",$params = array()){
		if(method_exists($this, $method)){

            call_user_func_array(array($this, $method), $params);
		}
		else{
            $this->showHomePage();
		}
	}

  private function MainController(){
    echo "oops";
  }


	private function showHomePage(){
		/*
		  TODO : tampilan awal ketika website di load user.
		  kelas :
		  perumahan,sistem,tanah
		*/
      $perumahan = $this->perumahan->getPerumahan();
      $tanah = $this->tanah->getKawasanTanah();
    
      $this->session->set_userdata('perumahan_sess', json_encode($perumahan));
      $this->session->set_userdata('tanah_sess', json_encode($tanah));

      $this->load->view("user/home/headerandbanner",["res"=>$this->resource,"perumahan"=>$perumahan,"tanah"=>$tanah]);    
	    $this->load->view("user/home/list_perumahan"); 
	    $this->load->view("user/home/list_tanah");
	    $this->load->view("user/home/web_promotion");
	    $this->load->view("user/footer");
	}
    
    private function lihatPerumahan($id,$id_rumah=""){
      /*
        TODO : menampilkan perumahan atau perumahan disertai dengan rumah - rumahnya 
      
      */
      
      if(empty($this->session->userdata('perumahan_sess')) || empty($this->session->userdata('tanah_sess'))){
             $perumahan = $this->perumahan->getPerumahan();
             $tanah = $this->tanah->getKawasanTanah();
    
             $this->session->set_userdata('perumahan_sess', json_encode($perumahan));
             $this->session->set_userdata('tanah_sess', json_encode($tanah));
      }

      if($id_rumah != ""){
          $perumahan_data = $this->perumahan->specifyPerumahanById(json_decode($this->session->userdata('perumahan_sess')),$id);
          if($perumahan_data == ""){
             redirect();
          }
          else{
            $rumah_data = $this->rumah->specifyRumahById($perumahan_data->data_rumah,$id_rumah);
            if($rumah_data == ""){
               redirect("MainController/lihatPerumahan/$id");
            }
            else{
               $this->load->view("user/header",["res"=>$this->resource,"perumahan"=>$perumahan_data]);
               $this->load->view("user/rumah/rumah",["rumah"=>$rumah_data]);
               $this->load->view("user/footer");
            }
          }
      }
      else{
         $perumahan_data = $this->perumahan->specifyPerumahanById(json_decode($this->session->userdata('perumahan_sess')),$id);
         if($perumahan_data == ""){
            redirect();
         }
         else{
         $this->load->view("user/header",["res"=>$this->resource,"perumahan"=>$perumahan_data]);
         $this->load->view("user/perumahan/umum");
         $this->load->view("user/perumahan/blueprint");
         $this->load->view("user/perumahan/sidebar");
         $this->load->view("user/perumahan/list_rumah");
         $this->load->view("user/footer");
        }
       }
    }

    private function lihatTanah($id="",$id_tanah=""){
      /*
      TODO : menampilkan kawasan tanah atau kawasan tanah disertai tanah - tanahnya
      */
      if(empty($this->session->userdata('perumahan_sess')) || empty($this->session->userdata('tanah_sess'))){
             $perumahan = $this->perumahan->getPerumahan();
             $tanah = $this->tanah->getKawasanTanah();
    
             $this->session->set_userdata('perumahan_sess', json_encode($perumahan));
             $this->session->set_userdata('tanah_sess', json_encode($tanah));
      }
      if($id==""){
         $tanah = json_decode($this->session->userdata('tanah_sess'));
         $this->load->view("user/tanah/header",["res"=>$this->resource]);
         $this->load->view("user/tanah/list_tanah",["tanah"=>$tanah]);
      }
      else if($id != "" && $id_tanah == ""){
         $tanah = $this->tanah->getDataTanahById(json_decode($this->session->userdata('tanah_sess')),$id);
         if($tanah == ""){
          redirect();
         }else{
          $this->load->view("user/tanah/header",["res"=>$this->resource]);
          $this->load->view("user/tanah/tanah",["tanah"=>$tanah]);}
      }
      else if($id != "" && $id_tanah != ""){
          $k_tanah = $this->tanah->getDataTanahById(json_decode($this->session->userdata('tanah_sess')),$id);
          if($k_tanah == ""){
              redirect();
          }
          else{
              $tanah = $this->tanah->getDataTanahById($k_tanah->data_tanah,$id_tanah);
              if($tanah == ""){
                 redirect("MainController/lihatTanah/$id");
              }else{
                $this->load->view("user/tanah/header",["res"=>$this->resource]);
                $this->load->view("user/tanah/tanah_single",["tanah"=>$tanah,"k_tanah"=>$k_tanah]);}
              }
          }
    }
}
