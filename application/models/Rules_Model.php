<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function Get_Rules()
  {
    $result = $this->db->query("SELECT * FROM rules");
    if($result->num_rows() > 0)
    {
        return $result;
    } else
    {
      return NULL;
    }
  }

}
