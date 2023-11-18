<?php
class postmodel extends DModel
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function category_post($table_post){
		$sql = "SELECT * FROM $table_post  ";
		return $this->db->select($sql);
	}

	public function post($table_post,$table_category)
	{
		$sql = "SELECT * FROM $table_post,$table_category WHERE $table_post.id_category_post = $table_category.id_category_post ORDER BY $table_post.id_post DESC";

		return $this->db->select($sql);
	}

	public function list_post_home($table_post)
	{
		$sql = "SELECT * FROM $table_post ORDER BY $table_post.id_post DESC";

		return $this->db->select($sql);
	}

	public function postbyid($table_post,$cond){
		$sql = "SELECT * FROM $table_post WHERE $cond ";
		return $this->db->select($sql);
	}

	public function insertpost($table,$data){
		return $this->db->insert($table,$data);
	}


	public function updatepost($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
	}

	public function deletepost($table_post,$cond){
		return $this->db->delete($table_post,$cond);

	}


	



}
?>