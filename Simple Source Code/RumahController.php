Class RumahController{
	var RumahDao;
	
	RumahController(){
		this->RumahDao = new RumahDao();
	}
	
	public function getDataRumah(nama_perumahan){
		var dao = this->RumahDao->getRumah(nama_perumahan);
		
		Rumah[];
		while(dao.hasNext()){
			rumah = new Rumah();
			rumah.setNomor(dao["nomor"]);
			rumah.setLuas(dao["luas_tanah"]);
			rumah.setTipe(dao["tipe"]);
			Rumah.add(rumah);
		}
		
		return Rumah;
	}
	
}