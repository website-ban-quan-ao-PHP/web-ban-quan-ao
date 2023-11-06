<?php

class post extends DController
{
	public	function __construct()
	{
		parent::__construct();
		echo ' this is post';
	}
	public function chitietbaiviet(){
		echo ' chi tiet bai viet is post';
	}
}


?>