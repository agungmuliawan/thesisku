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
		$result = $this->setDataHitungMetode($post);
		$data['kelas'] = !empty($kelas) ? $this->db->query('select * from tb_kelas where id_kelas = ' . $kelas)->result()[0] : null;
		$data['harga'] = !empty($harga) ? $this->db->query('select * from tb_harga where id_harga = ' . $harga)->result()[0] : null;
		$data['tipe_kamar'] = !empty($tipe_kamar) ? $this->db->query('select * from tb_tipe_kamar where id_tipe_kamar = ' . $tipe_kamar)->result()[0] : null;
		$data['result'] = $result;

		$arr_nama_hotel = [];
		$arr_knn = [];
		$arr_algoritma = [];
		$arr_hybrid = [];
		$arr_harvest = [];
		$arr_nama_lokasi = [];

		// ddd($result);
		foreach ($result['perhitungan_lokasi'] as $key => $value) {
			// ddd($value['lokasi_asal']);
			$arr_nama_lokasi[] = 'Lokasi Asal : ' . $value['lokasi_asal']->nm_lokasi . ' vs Lokasi Pembanding : ' . $value['lokasi_pembanding']->nm_lokasi;
			$arr_harvest[] = $value['result'];
		}
		// ddd($arr_nama_lokasi, $arr_harvest);
		foreach ($result['result'] as $key => $value) {
			$algoritma = round(($value['perhitungan']['algoritmaCollaborativeFiltering']['result'] * 100), 2);
			$hybrid = round(($value['perhitungan']['total_result_hybrid'] * 100), 0);
			$arr_nama_hotel[] = (string)$value['nama_hotel'] . '-' . $value['id_data_training'];
			$arr_knn[] = $value['persentase'];
			$arr_algoritma[] = $algoritma;
			$arr_hybrid[] = $hybrid;
		}

		$data['arr_nama_hotel'] = $arr_nama_hotel;
		$data['arr_knn'] = $arr_knn;
		$data['arr_algoritma'] = $arr_algoritma;
		$data['arr_hybrid'] = $arr_hybrid;
		$data['arr_nama_lokasi'] = $arr_nama_lokasi;
		$data['arr_harvest'] = $arr_harvest;

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
						tbl_hotel.*,
						tb_lokasi.nm_lokasi,
						tb_tipe_kamar.tipe_kamar
					from tbl_hotel
					inner join tb_tipe_kamar on tb_tipe_kamar.id_tipe_kamar = tbl_hotel.id_tipe_kamar
					inner join tb_lokasi on tb_lokasi.id_lokasi = tbl_hotel.lokasi
					where tbl_hotel.id_hotel = $id_hotel
			")->result()[0] ?? null;
			if (empty($hotel)) {
				if ($key == 0) continue;
				// ddd($key, $value, 'hotel tidak ditemukan');
			}
			// ddd($key, $value, $hotel, $id_hotel);
			$persentase = round((($value['skor'] / 1) * 100), 2);
			$result[] = [
				'id_hotel' => $value['id_hotel'],
				'nama_hotel' => $hotel->nama_hotel ?? null,
				'harga' => $hotel->harga ?? null,
				'lokasi' => $hotel->nm_lokasi ?? null,
				'skor_review' =>  $hotel->review ?? null,
				'tipe_kamar' =>  $hotel->tipe_kamar ?? null,
				'persentase' => $persentase,
				'foto' => $hotel->foto ?? null,
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
