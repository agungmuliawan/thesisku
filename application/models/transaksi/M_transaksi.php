<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

	public function select_all_hotel()
	{
    $query = $this->db->query('select * from tbl_hotel limit 8');
    $num = $query->num_rows();
    if ($num>0) {
    return $query->result();
    } else {
        return 0;
    }
	}
    
	
}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */
