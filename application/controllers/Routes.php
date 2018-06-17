<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Routes extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Routes_Model');
  }

  function Index()
  {
    $menu = array('center' => false, 'rules' => false, 'routes' => true,
                  'home' => false, 'about' =>false, 'name' => 'Crash Bash');

    $this->load->view('common/head', $menu);
    $this->load->view('common/nav', $menu);

    //aqui va cuerpo
    $data['rutas'] = $this->Routes_Model->Get_Routes();
    $this->load->view('routes/head', $data);

    $this->load->view('routes/map.html');

    $this->load->view('routes/footer');

    $this->load->view('common/footer');
  }

  function Caminos()
  {
    $post = $this->input->post();

    $result = $this->Routes_Model->Get_Details($post['ruta']);

    if($result != null)
    {
      $html = "";
      $letra = 'A';
      foreach ($result as $fila)
      {
        foreach ($fila as $columna => $valor)
        {
          if($columna == "descr")
          {
            $html .= "<p>";
            $html .= "<span style='font-weight: bold'>";
            $html .= "Ruta " . $letra . ": ";
            $html .= "</span>";
            $html .= $valor;
            $html .= "</p>";
          }
        }
        $letra++;
      }
      echo $html;
    }
    else
      echo " ";

  }

  function Puntos()
  {
    $post = $this->input->post();

    $result = $this->Routes_Model->Get_Details($post['ruta']);

    if($result != null)
    {
      $html = "";
      foreach ($result as $fila)
      {
        foreach ($fila as $columna => $valor)
        {
          if($columna == "descr")
          {
            $html .= "<option value='".$valor."'>1</option>";
          }
        }
      }
      echo $html;
    }
    else
      echo " ";

  }

  function Array()
  {
    $post = $this->input->post();

    $result = $this->Routes_Model->Get_Details($post['ruta']);

    if($result != null)
    {
      $html = "";
      foreach ($result as $fila)
      {
        foreach ($fila as $columna => $valor)
        {
          if($columna == "descr")
          {
            $html .= $valor;
            $html .= ";";
          }
        }
      }

      $array="";

      for ($i=0; $i < strlen($html) - 1 ; $i++) {

        $array .= $html[$i];

      }

      echo $array;
    }
    else
      echo " ";

  }

}
