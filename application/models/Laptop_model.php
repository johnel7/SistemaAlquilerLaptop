<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptop_model extends CI_Model {

	public function getLaptops()
	{
		$query = $this->db->query("select * from laptop");
       //retornamos todos los registros de la tabla laptop
           return $query->result();
	}

 public function save($data){
           return $this->db->insert("laptop",$data);

    }

public function getLaptop($id){
       
       $this->db->where("idlap",$id);
       $resultado = $this->db->get("laptop");
       return $resultado->row();
}

public function update($id,$data){
       $this->db->where("idlap",$id);
      return $this->db->update("laptop",$data);

}


}