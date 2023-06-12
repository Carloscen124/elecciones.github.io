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


    function borrar($id_can){
      $this->db->where("id_can",$id_can);
      return $this->db->delete("candidatos");
    }
//MAPA GENERAL
    function obtenerTodos(){
        $listadoCandidatos=$this->db->get("candidatos");
        if ($listadoCandidatos->num_rows()
            > 0) {
          return $listadoCandidatos->result();
        }
        return false;
      }
//MAPA PRESIDENTES
    function obtenerPre(){
        $Value = "Presidente";
        $this->db->where("dignidad",$Value);
        $listadoCandidatos=$this->db->get("candidatos");
        if ($listadoCandidatos->num_rows()
            > 0) {
          return $listadoCandidatos->result();
          }
          return false;
        }
//MAPA PROVINCIALES
    function obtenerPro(){
        $Value = "Asambleista Provincial";
        $this->db->where("dignidad",$Value);
        $listadoCandidatos=$this->db->get("candidatos");
        if ($listadoCandidatos->num_rows()
            > 0) {
              return $listadoCandidatos->result();
            }
            return false;
          }
//MAPA NACIONALES
      function obtenerNac(){
          $Value = "Asambleista Nacional";
          $this->db->where("dignidad",$Value);
          $listadoCandidatos=$this->db->get("candidatos");
          if ($listadoCandidatos->num_rows()
              > 0) {
                return $listadoCandidatos->result();
              }
              return false;
            }


  }//Cierre de la clase

 ?>
