<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_transaksi extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
		  $this->load->model('transaksi/M_transaksi');
	  
	}
  
	public function index()
	{
		$data['rekomendasi'] = $this->M_transaksi->select_all_hotel();
		$this->load->view('V_rekomendasi', $data);
	}
}