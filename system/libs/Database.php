<?php
	
	class Database extends PDO
	{
		
		public function __construct($connect,$user,$pass)
		{
			parent::__construct($connect,$user,$pass);
		}

		public function select($sql,$data = array(),$fetchStyle = PDO::FETCH_ASSOC)
		{
			$statement = $this->prepare($sql);
			foreach ($data as $key => $value) {
				$statement->bindParam($key,$value);
			}	
			$statement->execute();
			return $statement->fetchALl();
		}

		public function insertct($table,$data)
		{
			$keys = implode(",",array_keys($data));
			$values =":" .implode(", :",array_keys($data));

			$sql = "INSERT INTO $table($keys) VALUES($values)";
			$statement = $this->prepare($sql);

			foreach ($data as $key => $value) {
					$statement->bindParam(":$key",$value);
				}
			// $statement->bindParam(':title_category_product',$title_category_product);
			// $statement->bindParam(':desc_category_product',$desc_category_product);
					
			return $statement->execute();
		
		}








	}


?>