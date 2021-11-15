<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_log extends CI_Model 
	{

	public function save_log($param)
	{	
		$sql = $this->db->insert_string('tb_log', $param);
		$rex = $this->db->query($sql);
		return $this->db->affected_rows($sql);
	}
	function select_all()
	{	
		$query =$this->db->query('select * from tb_log');
		$num = $query->num_rows();
		if($num>0){
			return $query->result();
		}
		else {
			return array();
			echo "data kosong";
		}
	}
	function delete_log($log_id)
	{
		$this->db->where('log_id',$log_id);
		$this->db->delete('tb_log');
	}
	function delete_all()
	{
		$this->db->query('delete from tb_log');

	}	

}

/* End of file m_log.php */
/* Location: ./application/models/m_log.php */