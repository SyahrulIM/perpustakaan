<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_Model extends CI_Model
{
    public function get_all_data()
    {
            $this->db->select('*');
            $this->db->from('tbl_kategori_buku');
            $this->db->order_by('id_kategori', 'desc');
            return $this->db->get()->result();
        } 
}