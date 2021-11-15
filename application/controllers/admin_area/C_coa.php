<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller C_coa
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class C_coa extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/M_coa');
  }

  public function index()
  {
    $data['daftar_coa'] = $this->M_coa->select_all_coa();
    $this->load->view('admin/V_coa', $data);
  }
  public function tambah_data_coa()
  {
      $this->load->view('admin/V_add_coa');
  }
  public function proses_tambah_data_coa()
  {
      //$dataku['no_coa']        = $_POST['no_coa'];
      $no_coa['jenis_aktiva']        = $_POST['jenis_aktiva'];
      $no_coa['jenis_aset']        = $_POST['jenis_aset'];
      $no_coa['kategori']        = $_POST['kategori'];
      $no_coa['tampil']        = $_POST['tampil'];
      $no_coa['tampil_2']        = $_POST['tampil_2'];

      $dataku['nama_coa']  = $_POST['nama_coa'];
      $dataku['level_coa']  = $_POST['level_coa'];
      $dataku['parentID_coa']  = $_POST['parentID_coa'];
      $dataku['id_kategori']  = $_POST['id_kategori'];
      $dataku['fheader']  = $_POST['fheader'];
      $dataku['faktif']  = $_POST['faktif'];
      //	$dataku['gol']  = $_POST['gol'];
      var_dump($no_coa);
        extract($no_coa);
      
        var_dump($dataku);
      
      echo "ini nomer COA : $jenis_aktiva.$jenis_aset.$kategori.$tampil.$tampil_2";

      die();
      $this->M_jurusan->insert_jurusan($dataku);

      redirect('admin_area/C_jurusan', 'refresh');
  }
}


/* End of file C_coa.php */
/* Location: ./application/controllers/admin_area/C_coa.php */