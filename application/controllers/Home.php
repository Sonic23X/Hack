<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function Index()
  {
    $menu = array('center' => false, 'rules' => false, 'routes' => false,
                  'home' => true, 'about' =>false, 'name' => 'Crash Bash');

    $this->load->view('common/head', $menu);
    $this->load->view('common/nav', $menu);

    //aqui va cuerpo
    $this->load->view('start/body');

    $this->load->view('common/footer');
  }

}
