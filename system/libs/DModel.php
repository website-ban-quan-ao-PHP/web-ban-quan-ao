<?php
	
	class DModel
	{
		protected $db = array();
		
		public function __construct()
		{
			$connect = 'mysql:dbname=pdo_web_thoi_trang; host=localhost:3307; charset=utf8';
			$user ='root';
			$pass ='';
			$this->db = new Database($connect,$user,$pass);
		}
	}


?>