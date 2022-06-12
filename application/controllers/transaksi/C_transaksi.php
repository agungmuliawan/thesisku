<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi/M_transaksi');
	}

	public function index()
	{
		$post = $this->input->post();
		
		$data['result'] = $this->setDataHitungMetode($post);
		//ddd($data);
		/**
		 * id hootel
		 * nama hotel
		 * persentase kemiripan
		 * lokasi
		 * fto
		 */
		ddd(hitungPerbandingan($post));
		//ddd();
		//hasilperhitungan;
		//$data['rekomendasi'] = $this->M_transaksi->select_all_hotel();
		// $this->load->view('V_rekomendasi', $data);
		//$this->load->view('V_rekomendasi');
	}

	public function setDataHitungMetode(Array $post){
		$metode = hitungPerbandingan($post);
		// ddd($metode);
		// $limit = 10;
		$result = [];
		foreach ($metode as $key => $value) {
			// echo $key.'<br>';
			$id_hotel = $value['id_hotel'];
			$hotel = $this->db->query("select tb_hotel.*, tb_lokasi.nm_lokasi 
					from tb_hotel
					inner join tb_lokasi on tb_lokasi.id_lokasi = tb_hotel.id_lokasi
					inner join tb_review on tb_review.id_review = tb_hotel.id_review
					where tb_hotel.id_hotel = $id_hotel
			")->result()[0] ?? null;
			if(empty($hotel)){
				if($key == 0) continue;
				ddd($key, $value, 'hotel tidak ditemukan');
			}
			// ddd($key, $value, $hotel->nama_hotel);
			$persentase = round((($value['skor']/1)*100), 2);
			$result[] = [
				'id_hotel' => $value['id_hotel'],
				'nama_hotel' => $hotel->nama_hotel,
				'lokasi' => $hotel->nm_lokasi,
				//'skor_review' =>  
				'persentase' => $persentase,
				//'foto' => '...'
			];
		}
		return $result;
	}
}
//bisa ab?
