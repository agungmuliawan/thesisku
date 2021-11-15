<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function select_all_hotel()
	{
    $query = $this->db->query('select * from tbl_hotel');
    $num = $query->num_rows();
    if ($num>0) {
    return $query->result();
    } else {
        return 0;
    }
	}
   public function get_detail_hotel($id_hotel)
	{
    $query = $this->db->query('select * from detail_hotel where id_hotel = "'.$id_hotel.'"');
    $num = $query->num_rows();
    if ($num>0) {
    return $query->result();
    } else {
        return 0;
    }
	}
    public function get_data_hotel($id_hotel)
    {
        $this->db->select('*');
        $this->db->from('tbl_hotel');
        $this->db->where('id_hotel', $id_hotel);
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->row();
        }
    }
	
}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */
