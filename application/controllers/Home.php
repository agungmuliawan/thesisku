<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('M_home');
    
  }

  public function index()
  {
    $data['daftar_hotel'] = $this->M_home->select_all_hotel();
    //var_dump($data);
   // die();
    $this->load->view('Home', $data);
  }
  public function selengkapnya($id_hotel)
  {
    $data['detail_hotel'] = $this->M_home->get_detail_hotel($id_hotel);
    $data['hotel'] = $this->M_home->get_data_hotel($id_hotel);
   // var_dump($data);
    //echo $id_hotel;
    //die();
    $this->load->view('V_detail_home', $data);
    
  }
  public function hotel_many()
  {
    $this->load->view('Hotel_many');
  }


}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */