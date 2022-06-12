<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_master extends CI_Controller
{
    public function __construct()
    {
         parent::__construct();
        // $this->load->library('session');
      $this->load->model('admin/M_master');
      
    }

    public function data_attribute_lokasi()
    {
        $data['data_lokasi'] = $this->M_master->data_lokasi();
          $this->load->view('admin/V_attribute_lokasi', $data);
    }
    public function data_attribute_harga()
    {
       // echo "ini";
        //die();
        $data['data_harga'] = $this->M_master->data_harga();
          $this->load->view('admin/V_attribute_harga', $data);
    }
    public function data_attribute_tipe_kamar()
    {
        $data['data_tipe_kamar'] = $this->M_master->data_tipe_kamar();
          $this->load->view('admin/V_attribute_tipe_kamar', $data);
    }
    public function data_attribute_review()
    {
        $data['data_review'] = $this->M_master->data_review();
          $this->load->view('admin/V_attribute_review', $data);
    }
    public function data_attribute_kelas()
    {
        $data['data_kelas'] = $this->M_master->data_kelas();
          $this->load->view('admin/V_attribute_kelas', $data);
    }
    public function data_hotel()
    {
        $data['data_hotel'] = $this->M_master->data_hotel();
          $this->load->view('admin/V_data_hotel', $data);
    }
    public function data_training()
    {
        $data['data_training'] = $this->M_master->data_training();
          $this->load->view('admin/V_data_training', $data);
    }
    
}

/* End of file C_master.php */
/* Location: ./application/controllers/admin/C_master.php */
