<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $this->load->view('layout/head');
        $this->load->view('layout/sidebar');
		$this->load->view('cekpeminjaman_view');
        $this->load->view('layout/footer');
	}
}
