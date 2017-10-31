Class MainController{
	var perumahan; //menampung object perumahan
	var tanah; //menampung object tanah
	var visitor; 
	
	MainController(){
		this->perumahan = new PerumahanController();
		this->tanah = new TanahController(); //BELOM DIBUAT
	    this->visitor = new VisitorController(); //UNTUK MENGELOLA VISITOR WEBSITE //KIRIM PESAN DLL.
	}
    	
	public function index(){
		daftar_seluruh_perumahan = this->perumahan->getDataPerumahan();
		//**
		   LOAD VIEW
		**//
	}
	
	public function getSpecifiedObjectPerumahan(nama_perumahan){
		perumahan_x = this->perumahan->getDataPerumahan(nama_perumahan);
		return x;
	}

    public function getAllObjectPerumahan(){
	    all_perumahan = this->perumahan->getDataPerumahan();
		return all_perumahan;
	}	
}

//CONTOH IMPLEMENTASI
*** AMBIL SELURUH DATA PERUMAHAN ***
main = new MainController();
var seluruh_perumahan = main->getAllObjectPerumahan();

seluruh_perumahan[0]->getRumah[0]; //data perumahan pertama rumah pertama
seluruh_perumahan[0]->getRumah[1]; //data perumahan pertama rumah kedua
seluruh_perumahan[0]->getRumah[2]; //data perumahan pertama rumah ketiga
seluruh_perumahan[0]->getRumah[3]; //data perumahan pertama rumah keempat

seluruh_perumahan[1]->getRumah[0]; //data perumahan kedua rumah pertama
seluruh_perumahan[1]->getRumah[1]; //data perumahan kedua rumah kedua
seluruh_perumahan[1]->getRumah[2]; //data perumahan kedua rumah ketiga
seluruh_perumahan[1]->getRumah[3]; //data perumahan kedua rumah keempat

*** APABILA DATA PERUMAHAN TELAH DISPESIFIKASIKAN MAKA CUMA ADA SATU PERUMAHAN ATAU [0] ***
main = new MainController();
var specified_perumahan = main->getSpecifiedObjectPerumahan();

seluruh_perumahan[0]->getRumah[0]; //data perumahan pertama rumah pertama
seluruh_perumahan[0]->getRumah[1]; //data perumahan pertama rumah kedua
seluruh_perumahan[0]->getRumah[2]; //data perumahan pertama rumah ketiga
seluruh_perumahan[0]->getRumah[3]; //data perumahan pertama rumah keempat