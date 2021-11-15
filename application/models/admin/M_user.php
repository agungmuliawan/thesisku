<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function select_all_user(){
		$query = $this->db->query('select * from tb_user');
		$num = $query->num_rows();
		if($num>0){
			//Mengirimkan data array hasil query
			return $query->result();
			//Function result() hampir sama dengan function mysql_fetch_array()
		}
		else{
			return 0;
			//Kirimkan 0 jika tidak ada datanya
		}
	}
	public function insert_upload($dataku){
		return $this->db->insert('tb_user',$dataku);
	}	
	function get_data_edit_user($nip_user){

		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('nip_user', $nip_user);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->row();
		}
	}
	function delete_kode_user($nip_user)
	{
		$this->db->where('nip_user', $nip_user);
		$this->db->delete('tb_user');
	}

}


/* End of file M_user.php */
/* Location: ./application/models/admin/M_user.php */