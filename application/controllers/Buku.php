<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
        $this->load->model('kategori_model');
    }

    public function index()
    {
        $this->load->model('buku_model');
        $data['data'] = $this->buku_model->tampil_buku();
        $this->load->view('layout/head');
        $this->load->view('layout/sidebar');
		$this->load->view('buku_view', $data, FALSE);
        $this->load->view('layout/footer');
    }

    public function search()
	{
		$this->load->model('buku_model');
		$keyword = $this->input->post('keyword');
		$data['data']=$this->buku_model->get_keyword_admin($keyword);
		$this->load->view('layout/head');
        $this->load->view('layout/sidebar');
		$this->load->view('buku_view', $data, FALSE);
        $this->load->view('layout/footer');
	}
}