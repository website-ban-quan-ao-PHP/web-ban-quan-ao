<?php

class category extends DController
{
	public	function __construct()
	{
		$data = array();
		parent::__construct();
	}

	

	public function list_category(){
	
		$this->load->view('header');
		$categorymodel = $this->load->model('categorymodel');


		$table_category_product = 'tbl_category_product';
		$data['category'] = $categorymodel->category($table_category_product);
		$this->load->view('category', $data);

		$this->load->view('footer');
	}

	public function catebyid(){
	
		$this->load->view('header');
		$categorymodel = $this->load->model('categorymodel');

		$id = 4;
		$table_category_product = 'tbl_category_product';
		$data['categorybyid'] = $categorymodel->categorybyid($table_category_product,$id);
		
		$this->load->view('categorybyid', $data);
		$this->load->view('footer');
	}

	public function insertcategory(){
		$categorymodel = $this->load->model('categorymodel');
		$table_category_product = 'tbl_category_product';
		$data = array(
			'title_category_product' => 'quần cagopant rằn ri',
			'desc_category_product' => 'quần mang phông ách đường phố' 
		);

		
		$result = $categorymodel->insertcategory($table_category_product,$data);
		if ($result) {
    	echo 'Insert thành công';
		} else {
    	echo 'Insert thất bại';
		}

	}




}

?>