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
		// ddd($post);
		$review = $post['kp']['review'] ?? $post['ku']['review'] ?? $post['kt']['review'] ?? null;
		$kelas = $post['kp']['kelas'] ?? $post['ku']['kelas'] ?? $post['kt']['kelas'] ?? null;
		$harga = $post['kp']['harga'] ?? $post['ku']['harga'] ?? $post['kt']['harga'] ?? null;
		$tipe_kamar = $post['kp']['tipe_kamar'] ?? $post['ku']['tipe_kamar'] ?? $post['kt']['tipe_kamar'] ?? null;

		$data['param'] = $post;
		$data['daerah_anda'] = $this->db->query('select * from tb_lokasi where id_lokasi = ' . $post['tujuan_anda'])->result()[0];
		$data['tujuan_anda'] = $this->db->query('select * from tb_lokasi where id_lokasi = ' . $post['tujuan_anda'])->result()[0];
		$data['review'] = !empty($review) ? $this->db->query('select * from tb_review where id_review = ' . $review)->result()[0] : null;
		// ddd($data);
		$data['kelas'] = !empty($kelas) ? $this->db->query('select * from tb_kelas where id_kelas = ' . $kelas)->result()[0] : null;
		$data['harga'] = !empty($harga) ? $this->db->query('select * from tb_harga where id_harga = ' . $harga)->result()[0] : null;
		$data['tipe_kamar'] = !empty($tipe_kamar) ? $this->db->query('select * from tb_tipe_kamar where id_tipe_kamar = ' . $tipe_kamar)->result()[0] : null;
		$data['result'] = $this->setDataHitungMetode($post);
		// ddd($data['result']);
		/**
		 * id hootel
		 * nama hotel
		 * persentase kemiripan
		 * lokasi
		 * fto
		 */
		// ddd(hitungPerbandingan($post));
		//ddd();
		//hasilperhitungan;
		// $data['rekomendasi'] = $this->M_transaksi->select_all_hotel();
		$this->load->view('V_rekomendasi', $data);
		// $this->load->view('V_rekomendasi');
	}

	public function setDataHitungMetode(array $post)
	{
		$metode = hitungPerbandingan($post);
		// ddd($metode);
		// $limit = 10;
		$result = [];
		foreach ($metode['result'] as $key => $value) {
			// ddd($value);
			// echo $key.'<br>';
			$id_hotel = $value['id_hotel'];
			$hotel = $this->db->query("select 
						tb_hotel.*,
						tb_lokasi.nm_lokasi,
						tb_review.review,
						tb_harga.harga,
						tb_tipe_kamar.tipe_kamar
					from tb_hotel
					inner join tb_tipe_kamar on tb_tipe_kamar.id_tipe_kamar = tb_hotel.id_tipe_kamar
					inner join tb_lokasi on tb_lokasi.id_lokasi = tb_hotel.id_lokasi
					inner join tb_harga on tb_harga.id_harga = tb_hotel.id_harga
					inner join tb_review on tb_review.id_review = tb_hotel.id_review
					where tb_hotel.id_hotel = $id_hotel
			")->result()[0] ?? null;
			if (empty($hotel)) {
				if ($key == 0) continue;
				ddd($key, $value, 'hotel tidak ditemukan');
			}
			// ddd($key, $value);
			$persentase = round((($value['skor'] / 1) * 100), 2);
			$result[] = [
				'id_hotel' => $value['id_hotel'],
				'nama_hotel' => $hotel->nama_hotel,
				'harga' => $hotel->harga,
				'lokasi' => $hotel->nm_lokasi,
				'skor_review' =>  $hotel->review,
				'tipe_kamar' =>  $hotel->tipe_kamar,
				'persentase' => $persentase,
				'foto' => $hotel->image,
				'kemiripan' => $value['skor'],
				'perhitungan' => $value,
				'id_data_training' => $value['id_data_training']
			];
		}
		return [
			'perhitungan_lokasi' => $metode['perhitungan_lokasi'],
			'result' => $result,
		];
	}
}
//bisa ab?
