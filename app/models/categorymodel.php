<?php
class categorymodel extends DModel
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function category($table_category_product){
		$sql = "SELECT * FROM $table_category_product ORDER BY `id_category_product` ASC";
		return $this->db->select($sql);
		
	}

	public function categorybyid($table_category_product,$id){
		$sql = "SELECT * FROM $table_category_product WHERE id_category_product =:id";

		$data = array(':id' => $id);
		return $this->db->select($sql,$data);

	}
	public function insertcategory($table_category_product,$data){
		
		
		return $this->db->insertct($table_category_product,$data);
	}










}
?>