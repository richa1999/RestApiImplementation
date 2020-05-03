<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FetchData {

  var $tableName;
  public function __construct($tbName) {
      $this->ci =& get_instance();
      $this->ci->tableName=$tbName;

 	}


public function get_data($id)
{

  if(!empty($id)){

       $data = $this->ci->db->get_where($this->ci->tableName, ['id' => $id])->row_array();
   }
   else{

      $data = $this->ci->db->get($this->ci->tableName)->result();
  }
    return $data;

}


}
 ?>
