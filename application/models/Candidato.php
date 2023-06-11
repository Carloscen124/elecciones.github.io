<?php
  class Candidato extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //Funcion para insertar un instructor en MYSQL
    function insertar($datos){
        return $this->db
                ->insert("candidatos",
                $datos);
    }

    function obtenerTodo(){
      $listadoCandidatos=
      $this->db->get("candidatos");
      //VALIDACION
      if ($listadoCandidatos
        ->num_rows()>0){
          return $listadoCandidatos->result();
      } else {
        return false;
      }
    }


    // function borrar($id_can){
    //   $this->db->where("id_can",$id_can);
    //   return $this->db->delete("candidatos");
    // }
  }//Cierre de la clase

 ?>
