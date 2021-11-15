<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rubah_password_admin extends CI_Model {

	public function rubah_password()
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('id_user', $id_user);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->row();
		}
	}

}

/* End of file M_rubah_password_admin.php */
/* Location: ./application/models/admin/M_rubah_password_admin.php */