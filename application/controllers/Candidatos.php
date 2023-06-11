<?php
  /**
   *
   */
  class Candidatos extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('Candidato');
    }

    public function nuevo(){
          $this->load->view('header');
          $this->load->view('candidatos/nuevo');
          $this->load->view('footer');
    }

    public function lista(){
          $data['candidatos']=$this->Candidato->obtenerTodo();
          $this->load->view('header');
          $this->load->view('candidatos/lista',$data);
          $this->load->view('footer');
    }

    public function reporte(){
          $this->load->view('header');
          $this->load->view('candidatos/reporte');
          $this->load->view('footer');
    }

    public function presidentes(){
          $this->load->view('header');
          $this->load->view('candidatos/presidentes');
          $this->load->view('footer');
    }

    public function nacionales(){
          $this->load->view('header');
          $this->load->view('candidatos/nacionales');
          $this->load->view('footer');
    }

    public function provinciales(){
          $this->load->view('header');
          $this->load->view('candidatos/provinciales');
          $this->load->view('footer');
    }

    public function guardar(){
        $datosNuevoCandidato=array(
          "dignidad"=>$this->input->post('dignidad'),
          "cedula"=>$this->input->post('cedula'),
          "apellido"=>$this->input->post('apellido'),
          "nombre"=>$this->input->post('nombre'),
          "movimiento"=>$this->input->post('movimiento'),
          "provincia"=>$this->input->post('provincia'),
          "canton"=>$this->input->post('canton'),
          "latitud"=>$this->input->post('latitud'),
          "longitud"=>$this->input->post('longitud')
        );
        if ($this->Candidato->insertar($datosNuevoCandidato)) {
          redirect('candidatos/lista');
        } else {
          echo "<h1>ERROR INSERTAR DATOS DEL CANDIDATO</h1>";
        }
      }

      public function eliminar($id_can){
        if ($this->Candidato->borrar($id_can)){
          redirect('Candidatos/lista');
        } else {
          echo "ERROR AL BORRAR CANDIDATO:(";
        }
      }
  }
 ?>
