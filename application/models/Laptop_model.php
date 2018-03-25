<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptop_model extends CI_Model {

	public function getLaptops()
	{
		$query = $this->db->query("select * from laptop");
       //retornamos todos los registros de la tabla chofer
           return $query->result();
	}

}