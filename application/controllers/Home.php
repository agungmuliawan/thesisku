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
    // ddd($this->session);
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
    $hotel = $this->M_home->detail_hotel($id_hotel);
    $param = $this->input->get('param');
    $data['param'] = $param;
    $data['hotel'] = $hotel;
    // ddd($hotel);
    // $data['review'] = $this->M_home->getDataReviewById($hotel->id_review);
    $data['lokasi'] = $this->M_home->getDataLokasiById($hotel->id_lokasi);
    //var_dump($data);
    //die();
    $this->load->view('V_detail_home', $data);
  }
  public function recommendation()
  {
    // ddd($this->session);
    $this->load->view('V_recommendation');
  }
  public function kontak_kami()
  {
    $this->load->view('V_kontak_kami');
  }
  public function member()
  {
    // ddd($this->session);
    //echo "work";
    //die();
    $data['daftar_hotel'] = $this->M_home->select_all_hotel();
    //var_dump($data);
    // die();
    $this->load->view('Home_member', $data);
  }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */