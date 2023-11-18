<?php
class ordermodel extends DModel
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function insert_order($table_order,$data_order)
	{
		return $this->db->insert($table_order,$data_order);
	}
	public function insert_order_details($table_order_details,$data_datails)
	{
		return $this->db->insert($table_order_details,$data_datails);
	}
	

	






}
?>