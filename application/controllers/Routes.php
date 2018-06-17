<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Routes extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function Index()
  {
    $menu = array('center' => false, 'rules' => false, 'routes' => true,
                  'home' => false, 'about' =>false, 'name' => 'Crash Bash');

    $this->load->view('common/head', $menu);
    $this->load->view('common/nav', $menu);

    //aqui va cuerpo

    $this->load->view('common/footer');
  }

}
