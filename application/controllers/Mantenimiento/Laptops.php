<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptops extends CI_Controller {

      public function __construct(){
      	parent::__construct();
      	$this->load->model("Laptop_model");
      }

	public function index()
	{

		$data = array(
			          'laptops' => $this->Laptop_model->getLaptops(),
			           );


		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/laptops/list',$data);
		$this->load->view('layouts/footer');
	}

}