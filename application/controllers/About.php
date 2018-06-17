<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('About_Model');
  }

  function Index()
  {
    $menu = array('center' => false, 'rules' => false, 'routes' => false,
                  'home' => false, 'about' =>true, 'name' => 'Crash Bash');

    $this->load->view('common/head', $menu);
    $this->load->view('common/nav', $menu);

    //aqui va cuerpo
    $data['person'] = $this->About_Model->Get_Person();
    $this->load->view('about/tarjet', $data);

    $this->load->view('common/footer');
  }

}
