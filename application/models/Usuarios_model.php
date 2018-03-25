<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {



public function login($username,$password){
       $this->db->where("username",$username);
        $this->db->where("password",$password);
        $resultados = $this->db->get("usuario");
        if($resultados->num_rows()>0){
             return $resultados->row();
        }
        else{
          return false;
        }
}




	public function getUsuarios()
	{
		$query = $this->db->query("select * from usuario");
       //retornamos todos los registros de la tabla usuario
           return $query->result();
	}


 public function save($data){
           return $this->db->insert("usuario",$data);

    }


    public function getUsuario($id){
       
       $this->db->where("idusu",$id);
       $resultado = $this->db->get("usuario");
       return $resultado->row();
}

public function update($id,$data){
       $this->db->where("idusu",$id);
      return $this->db->update("usuario",$data);

}

public function deleteUsuario($id){
     $this->db->where('idusu',$id);
     $this->db->delete('usuario');
  }



}
