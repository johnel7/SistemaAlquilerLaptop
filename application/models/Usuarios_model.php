<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function getUsuarios()
	{
		$query = $this->db->query("select * from usuario");
       //retornamos todos los registros de la tabla usuario
           return $query->result();
	}


 public function save($data){
           return $this->db->insert("usuario",$data);

    }


}
