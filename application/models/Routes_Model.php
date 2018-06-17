<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Routes_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function Get_Routes()
  {
    $result = $this->db->query("SELECT * FROM ruta");
    if($result->num_rows() > 0)
    {
        return $result;
    } else
    {
      return NULL;
    }
  }

  public function Get_Details($ruta = null)
  {
    if($ruta != null)
    {
      $SQL = "SELECT lugar.idlugar, lugar.descr FROM lugar, ruta_lugar WHERE ruta_lugar.no_ruta = " . $ruta .
      " and ruta_lugar.idlugar = lugar.idlugar";
      $result = $this->db->query($SQL);
      if($result->num_rows() > 0)
          return $result->result();
    }
    else
      return null;
  }

  public function Primero($ruta = null)
  {
    if($ruta != null)
    {
      $SQL = "SELECT lugar.descr FROM lugar, ruta_lugar WHERE ruta_lugar.no_ruta = " . $ruta .
      " and ruta_lugar.idlugar = lugar.idlugar LIMIT 1";
      $result = $this->db->query($SQL);
      if($result->num_rows() > 0)
          return $result->row();
    }
    else
      return null;
  }

  public function Body($ruta = null)
  {
    if($ruta != null)
    {
      $SQL = "SELECT lugar.descr FROM lugar, ruta_lugar WHERE ruta_lugar.no_ruta = " . $ruta .
      " and ruta_lugar.idlugar = lugar.idlugar";
      $result = $this->db->query($SQL);
      if($result->num_rows() > 0)
          return $result;
    }
    else
      return null;
  }

}
