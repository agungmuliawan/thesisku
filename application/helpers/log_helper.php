<?php 

	function helper_log($tipe = "", $str = ""){
		$CI = & get_instance();

		if (strtolower($tipe) == "login") {
			$log_tipe = 0;
		}
		elseif (strtolower($tipe) == "logout") {
			$log_tipe = 1;
		}
		elseif (strtolower($tipe) == "add"){
			$log_tipe = 2;
		}
		elseif (strtolower($tipe) == "edit") {
			$log_tipe = 3;
		}
		elseif (strtolower($tipe) == "delete") {
			$log_tipe = 4;
		}
		else {
			$log_tipe = 5;
		}

		//param
		// $data['log_user'] = $this->session->userdata('username');
		$param['log_user']      = $CI->session->userdata('user');
	/*	$param['log_user'] = $this->session->userdata('username');*/
	/*	$param['log_user'] = "NULL";*/
		$param['log_tipe'] = $log_tipe;
		$param['log_desc'] = $str;

		//load model
		$CI->m_log->save_log($param);
	}
/*
	function a(){ 
	  $data['nama'] = $this->session->userdata('nama');
	}*/

 ?>