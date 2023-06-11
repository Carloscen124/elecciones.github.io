<?php
  /**
   *
   */
  class Candidatos extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
    }

    public function nuevo(){
          $this->load->view('header');
          $this->load->view('candidatos/nuevo');
          $this->load->view('footer');
    }

    public function lista(){
          $this->load->view('header');
          $this->load->view('candidatos/lista');
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
  }
 ?>
