<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Rules_Model');
  }

  function Index()
  {
    $menu = array('center' => false, 'rules' => true, 'routes' => false,
                  'home' => false, 'about' =>false, 'name' => 'Crash Bash');

    $this->load->view('common/head', $menu);
    $this->load->view('common/nav', $menu);

    //aqui va cuerpo
    $data['reglas'] = $this->Rules_Model->Get_Rules();
    $this->load->view('rules/rules', $data);

    $this->load->view('common/footer');
  }

}
