<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function select_all_hotel()
	{
    $query = $this->db->query('select * from tbl_hotel order by nama_hotel asc limit 8');
    $num = $query->num_rows();
    if ($num>0) {
    return $query->result();
    } else {
        return 0;
    }
	}
    public function select_many_hotel()
	{
    $query = $this->db->query('select * from tbl_hotel');
    $num = $query->num_rows();
    if ($num>0) {
    return $query->result();
    } else {
        return 0;
    }
	}
    // public function detail_hotel($id_hotel)
	// {
    // $query = $this->db->query('select detail_hotel.*, tbl_hotel.* from detail_hotel, tbl_hotel where 
    // detail_hotel.id_hotel = "'.$id_hotel.'" AND tbl_hotel.id_hotel = "'.$id_hotel.'"');
    // $num = $query->num_rows();
    // if ($num>0) {
    // return $query->result();
    // } else {
    //     return 0;
    // }
    public function detail_hotel($id_hotel)
	{
        $this->db->select('*');
        $this->db->from('tbl_hotel');
        $this->db->where('tbl_hotel.id_hotel="'.$id_hotel.'"');
        //$this->db->where('detail_hotel.id_hotel AND tbl_hotel.id_hotel', $id_hotel);
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->row();
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
    public function insert_registrasi($dataku)
    {
      return $this->db->insert('tb_user',$dataku);
    }
	
}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */
