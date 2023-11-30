<?php

class index extends DController
{
	public	function __construct()
	{
		$data = array();
		parent::__construct();
	}
	public function index(){
		$this->homepage();
	}
	public function homepage(){

		Session::init();
		$table = 'tbl_category_product';
		$table_post = 'tbl_category_post';
		$table_product ='tbl_product';
		$post = 'tbl_post';

		$categorymodel = $this->load->model('categorymodel');

		$data['category'] = $categorymodel->category_home($table);
		$data['category_post'] = $categorymodel->categorypost_home($table_post);
		$data['product_home'] = $categorymodel->list_product_index($table_product);
		$data['post_index'] = $categorymodel->post_index($post);

		$this->load->view('header',$data);

		$this->load->view('slider',$data);
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
	
	public function notfound(){
		Session::init();
		$table = 'tbl_category_product';
		$table_post = 'tbl_category_post';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$data['category_post'] = $categorymodel->categorypost_home($table_post);
		$this->load->view('header',$data);
	
		$this->load->view('404');

		$this->load->view('footer');
	}

	

	public function lienhe(){
		Session::init();
		$table = 'tbl_category_product';
		$table_post = 'tbl_category_post';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$data['category_post'] = $categorymodel->categorypost_home($table_post);
		$this->load->view('header',$data);
		// $this->load->view('slider');
		$this->load->view('contact');
		$this->load->view('footer');
		
	}


	public function lienhe(){
	$table = 'tbl_category_product';
		$table_post = 'tbl_category_post';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$data['category_post'] = $categorymodel->categorypost_home($table_post);
		$this->load->view('header',$data);
		// $this->load->view('slider');
		$this->load->view('contact');
		$this->load->view('footer');
		
	}


	




}

?>