<?php
/**
* 
*/
class m_karyawan extends CI_Model
{
	
	function select_all()
	{
		//$query = $this->ddb->query("select * from biodata");
		//$this->db->select('biodata.*,user.password');
		//$this->db->from('biodata,user');
		//$this->db->where('biodata.nim=user.username');
		//return $query->result();
		//return $this->db->get();

		//$query = $this->db->query('select biodata.*,user.password from biodata,user where biodata.nim=user.username');
		$query = $this->db->query('select * from tb_user');
		//lihat apakah ada data dalam tabel
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

	function insert_karyawan($data){
		return $this->db->insert('tb_user',$data);
	}
		function insert_penjualan($data){
		return $this->db->insert('tb_penjualan',$data);
	}
		function delete_karyawan($id_user){
		$this->db->where('id_user', $id_user);
		$this->db->delete('tb_user');
	}
	function get_data_edit($id_user){
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('id_user', $id_user);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->row();
		}
	}
	function proses_edit($id_user,$data){
		$this->db->update('tb_user', $data, 'id_user = '.$id_user);
		if ($this->db->affected_rows()==1) {
				return true;
			}
			else {
				return false;
			}
		}
	}

?>