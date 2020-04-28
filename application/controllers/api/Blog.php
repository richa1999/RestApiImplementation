<?php

include('Get_data.php');
class Blog extends  Get_Data {

	public function index_get($id = 0)
	{
      $Result_data= $this -> gather_data($id);
      $response=$this->send_ok_response($Result_data);
	}


    public function index_post($id = 0)
   {
      $Result_data= $this -> insert_data($id);
      $response=$this->send_ok_response($Result_data);
    }


    public function index_put($id)
    {
      $Result_data= $this -> replace_data($id);
      $response=$this->send_ok_response($Result_data);
    }

    public function index_delete($id)
    {
      $Result_data= $this -> destroy_data($id);
      $response=$this->send_ok_response($Result_data);
    }


  public function index_patch($id)
  {
    $Result_data= $this -> update_data($id);
    $response=$this->send_ok_response($Result_data);
  }


}
