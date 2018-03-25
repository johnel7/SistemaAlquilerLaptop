<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestamos_model extends CI_Model {

	public function getPrestamos()
	{
		$query = $this->db->query("
    select l.marca,p.idpres,p.fecha_prestamo,p.precio,p.fecha_devolucion,u.username 
    from laptop l inner join prestamo p on l.idlap=p.idlap 
                  inner join usuario u on u.idusu=p.idusu");
       //retornamos todos los registros de la tabla laptop
           return $query->result();
	}


 public function save($data){
           return $this->db->insert("prestamo",$data);

    }



public function getPrestamo($id){
       
       $this->db->where("idpres",$id);
       $resultado = $this->db->get("prestamo");
       return $resultado->row();
}

public function update($id,$data){
       $this->db->where("idpres",$id);
      return $this->db->update("prestamo",$data);

}


}