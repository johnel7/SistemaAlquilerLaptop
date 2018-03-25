<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestamos extends CI_Controller {

      public function __construct(){
      	parent::__construct();

      	if (!$this->session->userdata("login")) {
			redirect(base_url());
		}


      	$this->load->model("Prestamos_model");
      	//vista de laptops
      	$this->load->model("Laptop_model");
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


//funcion para agregar nuevas laptops
public function add(){

	        $data = array(
	        	           'laptops' =>$this->Laptop_model->getLaptops() ,

	        	            );

	    $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/prestamos/add',$data); // se envia a la vista admin/laptops/add
		$this->load->view('layouts/footer');
}

//funcion que recoge los valores del formulario de vista - add  
public function store(){
         
         $idlap = $this->input->post("idlap");
		 $idusu = $this->session->userdata("idusu");
        
         $fecha_prestamo = $this->input->post("fecha_prestamo");
         $precio = $this->input->post("precio");
         $fecha_devolucion = $this->input->post("fecha_devolucion");

         $data = array(
         	       
                   'idlap' =>$idlap ,
                   'idusu' =>$idusu, 
                   'precio' =>$precio, 
                   'fecha_prestamo' =>$fecha_prestamo,
                   'fecha_devolucion' =>$fecha_devolucion,
                    
         	      );

          //se envia los datos al modelo Prestamos_model
            if($this->Prestamos_model->save($data)){
                 redirect(base_url()."mantenimiento/prestamos");     
            }
            else{
            	  $this->session->set_flashdata("error","No se pudo guardar los datos");
                  redirect(base_url()."mantenimiento/prestamos/add");  
            }
}


public function edit($id){

        $data= array(

          'prestamo' => $this->Prestamos_model->getPrestamo($id),
        );
 

        $this->load->view('layouts/header');
    $this->load->view('layouts/aside');
    $this->load->view('admin/prestamos/edit',$data); // se envia a la vista admin/prestamos/add
    $this->load->view('layouts/footer');
}

public function update(){

          $idPrestamo = $this->input->post("idPrestamo");

          $idlap = $this->input->post("idlap");
		 $idusu = $this->session->userdata("idusu");
        
         $fecha_prestamo = $this->input->post("fecha_prestamo");
         $precio = $this->input->post("precio");
         $fecha_devolucion = $this->input->post("fecha_devolucion");

         $data = array(
         	       
                   'idlap' =>$idlap ,
                   'idusu' =>$idusu, 
                   'precio' =>$precio, 
                   'fecha_prestamo' =>$fecha_prestamo,
                   'fecha_devolucion' =>$fecha_devolucion,
                    
         	      );

      if($this->Prestamos_model->update($idPrestamo,$data)){
                 redirect(base_url()."mantenimiento/prestamos");     
            }
            else{
                $this->session->set_flashdata("error","No se pudo actualizar los datos");
                  redirect(base_url()."mantenimiento/prestamos/edit/".$idPrestamo);  
            }

}

//funcion para eliminar por id
public function delete($id = NULL){
    if($id != NULL){
         $this->Prestamos_model->deletePrestamo($id);
         redirect(base_url()."mantenimiento/prestamos");
    }
  }


}