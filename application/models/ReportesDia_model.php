<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportesDia_model extends CI_Model {

	public function getLaptops()
	{
		$query = $this->db->query("select sum(precio) as 'Total recaudado en el dia' from prestamo ");
       //retornamos todos los registros de la tabla laptop reporte
           return $query->result();
	}
}