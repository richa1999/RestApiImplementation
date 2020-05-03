<?php
require APPPATH . "libraries/REST_Controller.php";
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends  REST_Controller{

		var $params = array(1=>'posts');

		public function __construct() {
	   parent::__construct();
		 $this->load->library('FetchData',$this->params);
		 $this->load->library('Update_store_Data',$this->params);
	}

	public function index_get($id = 0)
	{

      $Result_data=  $this->fetchdata-> get_data($id);
      $this->response($Result_data,REST_Controller::HTTP_OK);
	}


    public function index_post($id = 0)
   {
      $Result_data= $this ->update_store_data->insert_data($id);
      $this->response($Result_data,REST_Controller::HTTP_OK);
    }


    public function index_put($id)
    {
      $Result_data= $this ->update_store_data->replace_data($id);
      $this->response($Result_data,REST_Controller::HTTP_OK);
    }

    public function index_delete($id)
    {
      $Result_data= $this ->update_store_data->  delete_data($id);
        $this->response($Result_data,REST_Controller::HTTP_OK);
    }


  public function index_patch($id)
  {

    $Result_data= $this ->update_store_data->  update_data($id);
  $this->response($Result_data,REST_Controller::HTTP_OK);
  }


}
?>
