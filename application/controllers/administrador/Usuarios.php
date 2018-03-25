<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}

	public function index(){
		$data  = array(
			'usuarios' => $this->Usuarios_model->getUsuarios(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/list",$data);
		$this->load->view("layouts/footer");
	}

	
//funcion para agregar nuevos usuarios
public function add(){

	    $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/add'); // se envia a la vista admin/laptops/add
		$this->load->view('layouts/footer');
}

//funcion que recoge los valores del formulario de vista - add  
public function store(){
         
         $marca = $this->input->post("marca");
         $modelo = $this->input->post("modelo");
         $cantidad = $this->input->post("cantidad");
         $estado = $this->input->post("estado");
         

         $data = array(
         	       
                   'marca' =>$marca ,
                   'modelo' =>$modelo, 
                   'cantidad' =>$cantidad,
                   'estado' =>$estado,
                    
         	      );

          //se envia los datos al modelo Usuaarios_model
            if($this->Laptop_model->save($data)){
                 redirect(base_url()."administrador/usuarios");     
            }
            else{
            	  $this->session->set_flashdata("error","No se pudo guardar los datos");
                  redirect(base_url()."administrador/usuarios/add");  
            }
}

}