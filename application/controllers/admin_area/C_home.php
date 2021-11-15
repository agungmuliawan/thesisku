<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        //$this->load->model('M_login');
    }

    public function index()
    {
      //  $panggil = $this->session->userdata();
      //  var_dump($panggil);
       // die();
        $this->load->view('admin/V_blank');
    }
    /*	public function test()
        {
            $this->load->view('admin/V_blank');
        }

        public function test2(){
            echo "work";
        }*/
}

/* End of file C_home.php */
/* Location: ./application/controllers/admin/C_home.php */
