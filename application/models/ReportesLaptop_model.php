<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportesLaptop_model extends CI_Model {

	public function getReporteLaptop()
	{
		$query = $this->db->query("select l.marca,l.modelo, count(p.idlap) as 'Mas veces prestado' FROM laptop l inner JOIN prestamo p ON(l.idlap=p.idlap) GROUP BY p.idlap");
       //retornamos todos los registros de la tabla laptop reporte
           return $query->result();
	}
}