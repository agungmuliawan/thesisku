<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_user');
	}
	public function index()
	{
		$data['daftar_user'] = $this->M_user->select_all_user();
		$this->load->view('admin/V_user', $data);
	}
	public function tambah_data_user()
	{
		$this->load->view('admin/V_add_user');
	}
	public function proses_tambah_data_user(){
		$config['upload_path']   = './assets/img_user';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|JPG';
		$config['max_size']      = '10000';
		$config['max_width']     = '10000';
		$config['max_height']    = '10000';


		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			echo "<script>alert('gagal')</script>";
			//redirect('C_menu_awal_remedial','refresh');
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "<script>alert('sukses')</script>";
			//$username              = $this->session->userdata; 
			//$waktu                 = date("Ymdhisa");
			//$convert_nama          = $waktu.'.jpg';
			$dataku['nip_user']   = $_POST['nip_user'];
			$dataku['nama']        = $_POST['nama'];
			$dataku['jabatan']        = $_POST['jabatan'];
			$dataku['cabang']        = $_POST['cabang'];
			$dataku['level']        = $_POST['level'];
			$dataku['status']        = $_POST['status'];
			$dataku['foto']        = $data['upload_data']['file_name'];
			$dataku['password']    = md5($_POST['password']);
			/*var_dump($dataku);
			die();*/
			$this->M_user->insert_upload($dataku);
			redirect('admin_area/C_user','refresh');

		}
	}
	public function edit_data_user($nip_user)	
	{

		$data['data_edit'] = $this->M_user->get_data_edit_user($nip_user);

		$this->load->view('admin/V_edit_user', $data);
	}
	public function proses_edit_user($nip_user){

		$result= $this->db->query("SELECT * FROM tb_user where nip_user = '".$nip_user."' ")->result();


		//$query = "select * from tb_user where nip_user = '".$nip_user."' ";
		//$query->result();

		$hapus = ('assets/img_user/'.$result[0]->foto); 
		if (!unlink($hapus)) {

			echo '<script>alert("Gagal menghapus user")</script>';
			echo '<br><br><br><br>';
			echo '<form><center><input type="button" style="padding: 100px; width:300px; font-size : 35px; text-align: center;" value="kembali" onClick="javascript:history.go(-1)"></center></form>';	
		}
		else {
			//echo '<script>alert("berhasil update data")</script>';
			//$this->M_user->delete_kode_user($nip_user);

			$config['upload_path']   = './assets/img_user';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
			$config['max_size']      = '10000';
			$config['max_width']     = '10000';
			$config['max_height']    = '10000';


			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('berkas')){
				$error = array('error' => $this->upload->display_errors());
				echo "<script>alert('gagal')</script>";
			//redirect('C_menu_awal_remedial','refresh');
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				$kirim = array('nip_user' => $_POST['nip_user'] ,
					'nama' => $_POST['nama'],
					'jabatan' => $_POST['jabatan'],
					'cabang' => $_POST['cabang'],
					'level' => $_POST['level'],
					'password' => md5($_POST['password']),
					'foto' => $data['upload_data']['file_name'],
				'status' => $_POST['status']);
				$query = $this->db->where('nip_user', $nip_user)->update('tb_user', $kirim);

			}
			
		}
		redirect('admin_area/C_user');

	}
	public function hapus_data_user($nip_user)
	{
		$result= $this->db->query("SELECT * FROM tb_user where nip_user = '".$nip_user."' ")->result();

		$hapus = ('assets/img_user/'.$result[0]->foto); 
		if (!unlink($hapus)) {

			echo '<script>alert("Gagal menghapus user")</script>';
			echo '<br><br><br><br>';
			echo '<form><center><input type="button" style="padding: 100px; width:300px; font-size : 35px; text-align: center;" value="kembali" onClick="javascript:history.go(-1)"></center></form>';	
		}
		else {
			echo '<script>alert("berhasil menghapus user")</script>';
			$this->M_user->delete_kode_user($nip_user);
			redirect('admin_area/C_user');

		}
	}
}

/* End of file C_user.php */
/* Location: ./application/controllers/admin_area/C_user.php */