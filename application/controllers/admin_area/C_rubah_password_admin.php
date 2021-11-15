<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_rubah_password_admin extends CI_Controller {
public function __construct()
{
	//parent::__construct();
	//$this->load->model('admin/M_rubah_password_admin');
}
	public function index()
	{
		
		$this->load->view('admin/V_rubah_password');
	}

}

/* End of file C_rubah_password_admin.php */
/* Location: ./application/controllers/admin_area/C_rubah_password_admin.php */