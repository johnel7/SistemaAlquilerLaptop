<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportesLaptop extends CI_Controller {

      public function __construct(){
      	parent::__construct();
      	$this->load->model("ReportesLaptop_model");
      }

	public function index()
	{

		$data = array(
			          'reportesLaptop' => $this->ReportesLaptop_model->getReporteLaptop(),
			           );


		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/reportesLaptop/list',$data);
		$this->load->view('layouts/footer');
	}
}