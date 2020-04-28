<?php
require APPPATH . 'libraries/REST_Controller.php';

class Get_Data extends REST_Controller{
public function __construct() {
   parent::__construct();
   $this->load->database();
}


public function send_ok_response($response_data)
{
     $this->response($response_data,REST_Controller::HTTP_OK);
}


public function gather_data($id)
{

      if(!empty($id)){
           $data = $this->db->get_where("posts", ['id' => $id])->row_array();
       }
       else{

          $data = $this->db->get("posts")->result();
      }
   return $data;
}

public function insert_data($id)
{
  $input = $this->input->post();
  $this->db->insert('posts',$input);

}
public function replace_data($id)
{
  $input = $this->put();
  $this->db->update('posts', $input, array('id'=>$id));

}

public function destroy_data($id)
{
    $this->db->delete('posts', array('id'=>$id));

}
public function update_data($id)
{
  $input = $this->patch();
  $this->db->update('posts', $input, array('id'=>$id));
}

}
 ?>
