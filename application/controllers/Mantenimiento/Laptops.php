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

//funcion para agregar nuevas laptops
public function add(){

	    $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/laptops/add'); // se envia a la vista admin/laptops/add
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

          //se envia los datos al modelo Laptop_model
            if($this->Laptop_model->save($data)){
                 redirect(base_url()."mantenimiento/laptops");     
            }
            else{
            	  $this->session->set_flashdata("error","No se pudo guardar los datos");
                  redirect(base_url()."mantenimiento/laptops/add");  
            }
}


public function edit($id){

        $data= array(

          'laptop' => $this->Laptop_model->getLaptop($id),
        );
 

        $this->load->view('layouts/header');
    $this->load->view('layouts/aside');
    $this->load->view('admin/laptops/edit',$data); // se envia a la vista admin/laptops/add
    $this->load->view('layouts/footer');
}

public function update(){

          $idLaptop = $this->input->post("idLaptop");

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

      if($this->Laptop_model->update($idLaptop,$data)){
                 redirect(base_url()."mantenimiento/laptops");     
            }
            else{
                $this->session->set_flashdata("error","No se pudo actualizar los datos");
                  redirect(base_url()."mantenimiento/laptops/edit/".$idLaptop);  
            }

}


//funcion para eliminar por id
public function delete($id = NULL){
    if($id != NULL){
         $this->Laptop_model->deleteVehiculo($id);
         redirect(base_url()."mantenimiento/laptops");
    }
  }




}