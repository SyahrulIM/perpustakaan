<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardadmin extends CI_Controller {

	public function index()
	{
        $this->load->view('layout/admin/head');
        $this->load->view('layout/admin/sidebar');
		$this->load->view('admin/dashboardadmin_view');
        $this->load->view('layout/admin/footer');
	}
}