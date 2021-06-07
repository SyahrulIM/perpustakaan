<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cekpeminjaman extends CI_Controller {

	public function index()
	{
		$this->load->model('cekpeminjaman_model');
        $data['data'] = $this->cekpeminjaman_model->get_relasi();
        $this->load->view('layout/head');
        $this->load->view('layout/sidebar');
		$this->load->view('cekpeminjaman_view', $data, FALSE);
        $this->load->view('layout/footer');
	}

	public function search()
	{
		$this->load->model('cekpeminjaman_model');
		$keyword = $this->input->post('keyword');
		$data['data']=$this->cekpeminjaman_model->get_keyword($keyword);
		$this->load->view('layout/head');
        $this->load->view('layout/sidebar');
		$this->load->view('cekpeminjaman_view', $data, FALSE);
        $this->load->view('layout/footer');
	}
}
