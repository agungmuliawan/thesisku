<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_master
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class M_master extends CI_Model {
  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function data_lokasi()
  {
      $query = $this->db->query('select * from tb_lokasi');
      $num = $query->num_rows();
      if ($num>0) {
          return $query->result();
      } else {
          return 0;
      }
  }
  public function data_harga()
  {
      $query = $this->db->query('select * from tb_harga');
      $num = $query->num_rows();
      if ($num>0) {
          return $query->result();
      } else {
          return 0;
      }
  }
  public function data_kelas()
  {
      $query = $this->db->query('select * from tb_kelas');
      $num = $query->num_rows();
      if ($num>0) {
          return $query->result();
      } else {
          return 0;
      }
  }
  public function data_review()
  {
      $query = $this->db->query('select * from tb_review');
      $num = $query->num_rows();
      if ($num>0) {
          return $query->result();
      } else {
          return 0;
      }
  }
  public function data_tipe_kamar()
  {
      $query = $this->db->query('select * from tb_tipe_kamar');
      $num = $query->num_rows();
      if ($num>0) {
          return $query->result();
      } else {
          return 0;
      }
  }
  public function data_hotel()
  {
      $query = $this->db->query('select * from tb_hotel');
      $num = $query->num_rows();
      if ($num>0) {
          return $query->result();
      } else {
          return 0;
      }
  }
  public function data_training()
  {
      $query = $this->db->query('select * from tb_training');
      $num = $query->num_rows();
      if ($num>0) {
          return $query->result();
      } else {
          return 0;
      }
  }

  // ------------------------------------------------------------------------

}

/* End of file M_master_model.php */
/* Location: ./application/models/M_master_model.php */