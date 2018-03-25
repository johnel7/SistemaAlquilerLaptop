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

}