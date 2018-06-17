<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function Get_Person()
  {
    $result = $this->db->query("SELECT * FROM about");
    if($result->num_rows() > 0)
    {
        return $result;
    } else
    {
      return NULL;
    }
  }

}
