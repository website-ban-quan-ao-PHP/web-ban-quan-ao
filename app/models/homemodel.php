<?php
class homemodel
{
	
	function __construct()
	{
		echo "this is homemodel";
	}
	public function category(){
		return $category = array(
			'catOne' => 'điện thoại',
			'catTwo' => 'tủ lạnh',
			'catThree' => 'tivi'
		);
	}










}
?>