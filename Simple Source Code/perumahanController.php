Class PerumahanController{
	
	var perumahan_dao;
	
	public PerumahanController(){
		this->perumahan_dao = new PerumahanDao();
	}
	
	public function getDataPerumahan(nama_perumahan=""){
		dao = this->perumahan_dao->getDataPerumahan(nama_perumahan);	
		Perumahan[];
		while(dao.hasNext()){
		   perumahan = new Perumahan();
           perumahan.setNama(dao["nama"]);
		   perumahan.setAlamat(dao["alamat"]);
		   perumahan.setDeksripsi(dao["deksripsi"]);
		   Perumahan.add(perumahan);
		}
		return Perumahan;
		
	}
	
}
