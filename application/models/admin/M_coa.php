<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_coa
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

class M_coa extends CI_Model {
  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function select_all_coa()
  {
      $query = $this->db->query('select * from tbl_coa');
      $num = $query->num_rows();
      if ($num>0) {
          return $query->result();
      } else {
          return 0;
      }
  }

  // ------------------------------------------------------------------------

}

/* End of file M_coa_model.php */
/* Location: ./application/models/M_coa_model.php */