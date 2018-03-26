<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportesDia extends CI_Controller {

      public function __construct(){
      	parent::__construct();
      	$this->load->model("ReportesDia_model");
      }

	public function index()
	{

		$data = array(
			          'reportes' => $this->ReportesDia_model->getLaptops(),
			           );


		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/reportesDia/list',$data);
		$this->load->view('layouts/footer');
	}
}