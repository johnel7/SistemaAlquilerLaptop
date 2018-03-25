<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestamos extends CI_Controller {

      public function __construct(){
      	parent::__construct();
      	$this->load->model("Prestamos_model");
      }

	public function index()
	{

		$data = array(
			          'prestamos' => $this->Prestamos_model->getPrestamos(),
			           );


		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/prestamos/list',$data);
		$this->load->view('layouts/footer');
	}

}