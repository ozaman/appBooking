<?php

class Getcountry_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
  public function getcountry() { 
      $this->db->select('*');      
      //$this->db->limit(100);
       $this->db->where('status =', '1');
      $query = $this->db->get('ap_country');
    if($query->num_rows() > 0) {
      foreach($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return FALSE;
  }
  public function getcountry_by_id() {
    $id = $this->input->post('id'); 
    $this->db->select('*');      
    //$this->db->limit(100);
    $this->db->where('status =', '1');
    $this->db->where('id =', $id);
    $query = $this->db->get('ap_country');
  if($query->num_rows() > 0) {
    foreach($query->result() as $row) {
      $data[] = $row;
    }
    return $data;
  }
  return FALSE;
}


}

?>