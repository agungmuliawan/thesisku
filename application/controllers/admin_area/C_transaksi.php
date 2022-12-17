<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('admin_area/M_transaksi');
	}

	public function proses_pemesanan()
	{

		$param = $this->input->post('param');
		$param = json_decode($param);

		$ac = $param->kp->ac ?? $param->kt->ac ?? $param->ku->ac ?? null;
		$tv = $param->kp->tv ?? $param->kt->tv ?? $param->ku->tv ?? null;
		$internet = $param->kp->internet ?? $param->kt->internet ?? $param->ku->internet ?? null;
		$breakfast = $param->kp->breakfast ?? $param->kt->breakfast ?? $param->ku->breakfast ?? null;
		$ruang_meeting = $param->kp->ruang_meeting ?? $param->kt->ruang_meeting ?? $param->ku->ruang_meeting ?? null;
		$fitness = $param->kp->fitness ?? $param->kt->fitness ?? $param->ku->fitness ?? null;
		$restoran = $param->kp->restoran ?? $param->kt->restoran ?? $param->ku->restoran ?? null;
		$parkiran = $param->kp->parkiran ?? $param->kt->parkiran ?? $param->ku->parkiran ?? null;
		$kolam_renang = $param->kp->kolam_renang ?? $param->kt->kolam_renang ?? $param->ku->kolam_renang ?? null;
		$area_rokok = $param->kp->area_rokok ?? $param->kt->area_rokok ?? $param->ku->area_rokok ?? null;

		$insert = [
			'id_user' => $this->session->userdata()['id_user'],
			'ac_f1' => !empty($ac) ? 1 : 0,
			'tv_f2' => !empty($tv) ? 1 : 0,
			'internet_f3' => !empty($internet) ? 1 : 0,
			'breakfast_f4' => !empty($breakfast) ? 1 : 0,
			'ruang_meeting_f5' => !empty($ruang_meeting) ? 1 : 0,
			'fitness_f6' => !empty($fitness) ? 1 : 0,
			'restoran_f7' => !empty($restoran) ? 1 : 0,
			'parkiran_f8' => !empty($parkiran) ? 1 : 0,
			'kolam_renang_f9' => !empty($kolam_renang) ? 1 : 0,
			'area_rokok_f10' => !empty($area_rokok) ? 1 : 0,
			'harga_h' => $param->kp->harga ?? $param->kt->harga ?? $param->ku->harga ?? 0,
			'tipe_kamar_t' => $param->kp->tipe_kamar ?? $param->kt->tipe_kamar ?? $param->ku->tipe_kamar ?? 0,
			'review_r' => $param->kp->review ?? $param->kt->review ?? $param->ku->review ?? 0,
			'kelas_k' => $param->kp->kelas ?? $param->kt->kelas ?? $param->ku->kelas ?? 0,
			'lokasi' => $param->tujuan_anda,
			'result' => $this->input->post('result'),
		];
		$this->db->insert('tb_training', $insert);
		// ddd($param, $this->input->post(), $insert);
		echo "berhasil pesan";
		//  $panggil = $this->session->userdata();
		//  var_dump($panggil);
		// die();
		redirect('Home/recommendation', 'refresh');
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
