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
    //echo "halo";
    //die();
    $data['daftar_hotel'] = $this->M_home->select_many_hotel();
    $this->load->view('Hotel_many', $data);
  }
  public function detail_hotel($id_hotel)
  {
    //echo "halo";
    //die();
    $data['get_detail'] = $this->M_home->detail_hotel($id_hotel);
    //var_dump($data);
    //die();
    $this->load->view('V_detail_home', $data);
  }
  public function recommendation()
  {
    $this->load->view('V_recommendation');
  }
  public function kontak_kami()
  {
    $this->load->view('V_kontak_kami');
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */