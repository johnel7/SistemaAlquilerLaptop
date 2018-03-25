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
         
         $nombre = $this->input->post("nombre");
         $apellidos = $this->input->post("apellidos");
         $username = $this->input->post("username");
         $password = $this->input->post("password");
         $telefono = $this->input->post("telefono");
         $fecha_registro = $this->input->post("fecha_registro");
         $tipo = $this->input->post("tipo");
         

         $data = array(
         	       
                   'nombre' =>$nombre ,
                   'apellidos' =>$apellidos, 
                   'username' =>$username,
                   'password' => sha1($password),
                   'telefono' =>$telefono,
                   'fecha_registro' =>$fecha_registro,
                   'tipo' =>$tipo,
                   
                    
         	      );

          //se envia los datos al modelo Usuaarios_model
            if($this->Usuarios_model->save($data)){
                 redirect(base_url()."administrador/usuarios");     
            }
            else{
            	  $this->session->set_flashdata("error","No se pudo guardar los datos");
                  redirect(base_url()."administrador/usuarios/add");  
            }
}


public function edit($id){

        $data= array(

          'usuario' => $this->Usuarios_model->getUsuario($id),
        );
 

        $this->load->view('layouts/header');
    $this->load->view('layouts/aside');
    $this->load->view('admin/usuarios/edit',$data); // se envia a la vista admin/laptops/add
    $this->load->view('layouts/footer');
}

public function update(){

          $idUsuario = $this->input->post("idUsuario");

         $nombre = $this->input->post("nombre");
         $apellidos = $this->input->post("apellidos");
         $username = $this->input->post("username");
         //$password = $this->input->post("password");
         $telefono = $this->input->post("telefono");
         $fecha_registro = $this->input->post("fecha_registro");
         $tipo = $this->input->post("tipo");
         

         $data = array(
         	       
                   'nombre' =>$nombre ,
                   'apellidos' =>$apellidos, 
                   'username' =>$username,
                  // 'password' => sha1($password),
                   'telefono' =>$telefono,
                   'fecha_registro' =>$fecha_registro,
                   'tipo' =>$tipo,
                   
                    
         	      );

      if($this->Usuarios_model->update($idUsuario,$data)){
                 redirect(base_url()."administrador/usuarios");     
            }
            else{
                $this->session->set_flashdata("error","No se pudo actualizar los datos");
                  redirect(base_url()."administrador/usuarios/edit/".$idUsuario);  
            }

}











}