<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Center extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Center_Model');
  }

  function Index()
  {
    $menu = array('center' => true, 'rules' => false, 'routes' => false,
                  'home' => false, 'about' =>false, 'name' => 'Crash Bash');

    $this->load->view('common/head', $menu);
    $this->load->view('common/nav', $menu);

    //aqui va cuerpo
    $data['basureros'] = $this->Center_Model->Get_Center();
    $this->load->view('basureros/center');
    $this->load->view('basureros/map.html');
    $this->load->view('basureros/settings', $data);

    $this->load->view('common/footer');
  }

}
