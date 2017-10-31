//  kelas model perumahan

Class Perumahan{
   var rumah; //array
   var nama;
   var alamat;
   var deksripsi; 
   
   public function setNama(nama){
	   this->nama = nama;
	   this->setListRumah();
   }
   
   public function setAlamat(alamat){
	   this->alamat = alamat;
   }
   
   public function setDeksripsi(deskripsi){
	   this->deksripsi = deskripsi;
   }
   
   public function getNama(){
	   
   }
   
   public function getAlamat(){
	   
   }
   
   public function getRumah(){
	   return this->rumah;
   }
   
   private function setListRumah(){ //mendapatkan list rumah
	   rumah_controller = new RumahController();
	   this->rumah = rumah_controller->getDataRumah(this->nama);
   }  

   	
}