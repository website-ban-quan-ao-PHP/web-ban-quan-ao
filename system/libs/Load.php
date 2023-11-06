<?php
class Load
	{
		public function __construct(){
		
		}

		public function view($fileName, $date = false){
			if ($date ==true) 
			{
				extract($date);
			}
			include'app/views/'.$fileName.'.php';
		}

		public function model($fileName){
			include'app/models/'.$fileName.'.php';
			return new $fileName();
		}


	



	}

?>