class perumahanDao{
	
	public function getDataPerumahan(nama_perumahan){
		if(nama_perumahan == null){
		   sql = "SELECT * FROM PERUMAHAN";
		   sql = sql->result_array();
		   return sql;	
		}
		else{
		   sql = "SELECT * FROM PERUMAHAN WHERE NAMA_PERUMAHAN ="+nama_perumahan;
		   sql = sql->result_array();
		   return sql;
		}
	}
	
}