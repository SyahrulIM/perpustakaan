<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cekpeminjaman_Model extends CI_Model
{
 public function get_relasi()
 {
     $this->db->select(['tbl_pinjam.id_peminjaman','tbl_member.nama','tbl_buku.buku','tbl_member.alamat','tbl_member.no_telp','tbl_pinjam.tgl_pinjam','tbl_pinjam.due','tbl_pinjam.status_pengembalian']);
     $this->db->from('tbl_pinjam');
     $this->db->join('tbl_member','tbl_pinjam.id_member=tbl_member.id_member');
     $this->db->join('tbl_buku','tbl_pinjam.id_buku=tbl_buku.id_buku');
     $this->db->limit('1');
     $return = $this->db->get('');
     return $return->result();
 }
 public function get_relasi_admin()
 {
     $this->db->select(['tbl_pinjam.id_peminjaman','tbl_member.nama','tbl_buku.buku','tbl_member.alamat','tbl_member.no_telp','tbl_pinjam.tgl_pinjam','tbl_pinjam.due','tbl_pinjam.status_pengembalian']);
     $this->db->from('tbl_pinjam');
     $this->db->join('tbl_member','tbl_pinjam.id_member=tbl_member.id_member');
     $this->db->join('tbl_buku','tbl_pinjam.id_buku=tbl_buku.id_buku');
     $return = $this->db->get('');
     return $return->result();
 }


 public function get_keyword($keyword){
    
    $this->db->select(['tbl_pinjam.id_peminjaman','tbl_member.nama','tbl_buku.buku','tbl_member.alamat','tbl_member.no_telp','tbl_pinjam.tgl_pinjam','tbl_pinjam.due','tbl_pinjam.status_pengembalian']);
    $this->db->from('tbl_pinjam');
    $this->db->join('tbl_member','tbl_pinjam.id_member=tbl_member.id_member');
    $this->db->join('tbl_buku','tbl_pinjam.id_buku=tbl_buku.id_buku');
    $this->db->like('tbl_member.nama',$keyword);
    $this->db->limit('1');
    $return = $this->db->get('');
    return $return->result();
 }
 public function get_keyword_admin($keyword){
    
    $this->db->select(['tbl_pinjam.id_peminjaman','tbl_member.nama','tbl_buku.buku','tbl_member.alamat','tbl_member.no_telp','tbl_pinjam.tgl_pinjam','tbl_pinjam.due','tbl_pinjam.status_pengembalian']);
    $this->db->from('tbl_pinjam');
    $this->db->join('tbl_member','tbl_pinjam.id_member=tbl_member.id_member');
    $this->db->join('tbl_buku','tbl_pinjam.id_buku=tbl_buku.id_buku');
    $this->db->like('tbl_member.nama',$keyword);
    $return = $this->db->get('');
    return $return->result();
 }
	}