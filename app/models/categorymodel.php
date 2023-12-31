<?php
class categorymodel extends DModel
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function category($table){
		$sql = "SELECT * FROM $table ORDER BY `id_category_product` DESC";
		return $this->db->select($sql);
	}

	public function category_home($table){
		$sql = "SELECT * FROM $table ORDER BY `id_category_product` DESC";
		return $this->db->select($sql);
	}

	public function categorybyid_home($table,$table_product,$id){
		$sql = "SELECT * FROM $table,$table_product WHERE $table.id_category_product=$table_product.id_category_product AND $table_product.id_category_product='$id' ORDER BY $table_product.id_category_product DESC";
		return $this->db->select($sql);
	}

	

	public function categorybyid($table,$cond){
		$sql = "SELECT * FROM $table WHERE $cond ";
		return $this->db->select($sql);
	}

	public function insertcategory($table_category_product,$data){
		return $this->db->insert($table_category_product,$data);
	}


	public function updatecategory($table_category_product,$data,$cond){
		return $this->db->update($table_category_product,$data,$cond);
	}

	public function deletecategory($table_category_product,$cond){
		return $this->db->delete($table_category_product,$cond);

	}


	// category POST
	// 
	// 

	public function post_category($table)
	{
		$sql = "SELECT * FROM $table ORDER BY `id_category_post` DESC";
		return $this->db->select($sql);
	}

	public function postbyid_home($table_cate_post,$table_post,$id){
		$sql = "SELECT * FROM $table_cate_post,$table_post WHERE $table_cate_post.id_category_post=$table_post.id_category_post AND $table_post.id_category_post='$id' ORDER BY $table_post.id_post DESC";
		return $this->db->select($sql);
	}

	public function categorypost_home($table)
	{
		$sql = "SELECT * FROM $table ORDER BY `id_category_post` DESC";
		return $this->db->select($sql);
	}

	public function categorybyid_post($table,$cond){
		$sql = "SELECT * FROM $table WHERE $cond ";
		return $this->db->select($sql);
	}
	public function insertcategory_post($table,$data){
		return $this->db->insert($table,$data);
	}

	public function updatecategory_post($table_category_post,$data,$cond){
		return $this->db->update($table_category_post,$data,$cond);
	}

	public function deletecategory_post($table_category_post,$cond){
		return $this->db->delete($table_category_post,$cond);
	}

	public function details_post_home($table_cate_post,$table_post,$cond){
		$sql = "SELECT * FROM $table_cate_post,$table_post WHERE $cond  ORDER BY $table_post.id_post DESC ";
		return $this->db->select($sql);
	}

	public function related_post_home($table_post,$table_cate_post,$cond_related){
		$sql = "SELECT * FROM $table_cate_post,$table_post WHERE $cond_related  ORDER BY $table_post.id_post DESC ";
		return $this->db->select($sql);
	}

	// Product
	
	public function search_product($table_product,$key){
		$sql = "SELECT * FROM $table_product WHERE `title_product` LIKE '%".$key."%'";
		return $this->db->select($sql);
	}


	public function product($table_product,$table_category)
	{
		// $sql = "SELECT * FROM $table_product ORDER BY `id_product` DESC";
		$sql = "SELECT * FROM $table_product,$table_category WHERE $table_product.id_category_product = $table_category.id_category_product ORDER BY $table_product.id_product DESC";


		return $this->db->select($sql);
	}

	public function list_product_home($table_product){
		$sql = "SELECT * FROM $table_product  ORDER BY $table_product.id_product DESC";
		return $this->db->select($sql);
	}

	public function product_hot($table_product){
		$sql = "SELECT * FROM $table_product WHERE product_hot = 1 ORDER BY $table_product.id_product DESC";
		return $this->db->select($sql);

	}

	public function list_product_index($table_product){
		$sql = "SELECT * FROM $table_product  ORDER BY $table_product.id_product DESC";
		return $this->db->select($sql);
	}


	public function productbyid($table,$cond){
		$sql = "SELECT * FROM $table WHERE $cond ";
		return $this->db->select($sql);
	}
	public function insertproduct($table,$data){
		return $this->db->insert($table,$data);
	}

	public function updateproduct($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
	}

	public function deleteproduct($table_product,$cond){
		return $this->db->delete($table_product,$cond);

	}

	public function details_product_home($table,$table_product,$cond){
		$sql = "SELECT * FROM $table_product,$table WHERE $cond ";
		return $this->db->select($sql);
	}

	public function related_product_home($table,$table_product,$cond_related){

		$sql = "SELECT * FROM $table_product,$table WHERE $cond_related ";
		return $this->db->select($sql);
	}

	public function post_index($post){
		$sql = "SELECT * FROM $post ORDER BY id_post DESC LIMIT 5";
		return $this->db->select($sql);
	}




}
?>