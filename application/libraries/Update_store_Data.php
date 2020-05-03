<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Update_store_Data {

  var $tableName;
  public function __construct($tbName) {
    $this->ci =& get_instance();
    $this->ci->tableName=$tbName[1];
}

public function insert_data($id)
{
  $input = $this->ci->input->post();
  $this->ci->db->insert($this->ci->tableName,$input);

}
public function replace_data($id)
{
  $input =$this->ci->put();
  $this->ci->db->update($this->ci->tableName, $input, array('id'=>$id));

}

public function delete_data($id)
{
    $this->ci->db->delete($this->ci->tableName, array('id'=>$id));

}
public function update_data($id)
{
  $input = $this->ci->patch();
  $this->ci->db->update($this->ci->tableName, $input, array('id'=>$id));
}

public function send_ok_response($response_data)
{
  echo $response_data;

}
}
 ?>
