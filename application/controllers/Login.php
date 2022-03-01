<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        //$this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('login');
        // $this->session->sess_destroy(); //
    }


    public function proses()
    {
        $data = array(
            'nip_user' => $this->input->post('username', true),
            'password' => md5($this->input->post('password', true)),
            'status' => "aktif"
        );
        $this->load->model('M_login'); // load model_user
        $hasil = $this->M_login->cek_user($data);
        if ($hasil->num_rows() == 1) {
            
            
                //$sess_data['logged_in'] = 'Sudah Loggin';
            /*$sess_data['username'] = $sess->username;*/
            /*$sess_data['nip'] = $sess->nip;*/
            $sess_data['nip_user'] = $hasil->result()[0]->nip_user;
            //$sess_data['password'] = $hasil->result()[0]->password;
            $sess_data['nama'] = $hasil->result()[0]->nama;
            $sess_data['id_user'] = $hasil->result()[0]->id_user;
            /*$sess_data['cabang'] = $hasil->result()[0]->cabang;*/
            $sess_data['jabatan'] = $hasil->result()[0]->jabatan;

            /*$sess_data['jabatan'] = $hasil->result()[0]->jabatan;*/
            $sess_data['jabatan'] = $hasil->result()[0]->jabatan;
            $sess_data['cabang'] = $hasil->result()[0]->cabang;
            $sess_data['level'] = $hasil->result()[0]->level;
            $sess_data['foto'] = $hasil->result()[0]->foto;
            $sess_data['status'] = $hasil->result()[0]->status;
            //$sess_data['jabatan'] = $sess->level;
            $this->session->set_userdata($sess_data);
             $_SESSION['user'] = $sess_data;
            
            if ($this->session->userdata('level') == 'administrator') {
                // session_start();
                //exit();
            //    $panggil = $this->session->userdata();
               // echo $panggil['jabatan'];
                // dd([$_SESSION, $this->session]);

                // echo "work";
               // die();
                redirect('admin_area/C_home', 'refresh');
            //print_r($_SESSION); exit();
                //echo "sukses";
                /*redirect('http://localhost/siak_pmg/index.php/admin_area/C_home');*/
            } elseif ($this->session->userdata('level') == 'mahasiswa') {
                //session_start();
                redirect('mahasiswa/C_home', 'refresh');
            } elseif ($this->session->userdata('level') == 'dosen') {
                //session_start();
                redirect('dosen/C_home', 'refresh');
            }
        } else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $data = array(
            'alert' => $this->session->flashdata('Berhasil Logout')
        );
        //helper_log("logout", "logout data");
        //redirect('login','refresh',$data);
        redirect('', 'refresh');
    }
    public function registrasi()
    {
      $this->load->view('V_registrasi');
      
    }
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
