<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('admin_area/M_transaksi');
    }

    public function proses_pemesanan()
    {
        $nama = $_POST['nama']; 
      //  $panggil = $this->session->userdata();
      //  var_dump($panggil);
       // die();
       // $this->load->view('admin/V_blank');
    }
    /*	public function test()
        {
            $this->load->view('admin/V_blank');
        }

        public function test2(){
            echo "work";
        }*/
}

/* End of file C_transaksi.php */
/* Location: ./application/controllers/admin/C_transaksi.php */
