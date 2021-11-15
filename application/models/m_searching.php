<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_searching extends CI_Model {

   function lihat($sampai, $dari, $like = ''){
 
   if($like)
    $this->db->where($like);
 
   $query = $this->db->get('tb_ektp',$sampai,$dari);
   return $query->result_array();
  }
 
  //hitung jumlah row
  function jumlah($like=''){
   
   if($like)
    $this->db->where($like);
     
   $query = $this->db->get('tb_ektp');
   return $query->num_rows();
  }

}

/* End of file m_searching.php */
/* Location: ./application/models/m_searching.php */