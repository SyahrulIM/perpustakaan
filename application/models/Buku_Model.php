<?php
class Buku_Model extends CI_Model
{
    public function tampil_buku()
    {
        $this->db->select(['tbl_buku.id_buku','tbl_kategori_buku.kategori_buku','tbl_buku.buku','tbl_buku.isbn','tbl_buku.penerbit','tbl_buku.tahun']);
        $this->db->from('tbl_buku');
        $this->db->join('tbl_kategori_buku','tbl_buku.id_kategori=tbl_kategori_buku.id_kategori');
        $return = $this->db->get('');
        return $return->result();
    }

    public function tambah_buku()
    {
        $data = [
            "tbl_buku.id_kategori"=> $this->input->post("id_kategori"),
            "tbl_buku.buku"=> $this->input->post("buku"),
            "tbl_buku.isbn"=> $this->input->post("isbn"),
            "tbl_buku.penerbit"=> $this->input->post("penerbit"),
            "tbl_buku.tahun"=> $this->input->post("tahun")
            
        ];
        $this->db->insert('tbl_buku',$data);
    }
    
    public function show_buku($id_buku)
    {
            $this->db->select('*');
            $this->db->from('tbl_buku');
            $this->db->join('tbl_kategori_buku','tbl_kategori_buku.id_kategori = tbl_buku.id_kategori','left');
			$this->db->where('id_buku', $id_buku); 
            return $this->db->get()->row();

        
    }

    function hapus_buku($id_buku)
    {
        $this->db->where('id_buku',$id_buku);
        $this->db->delete('tbl_buku');
    return true;
    }

public function do_edit1($id_buku)
    {
        $data=[
            "tbl_buku.id_buku"=>$id_buku,
            "tbl_buku.id_kategori"=> $this->input->post("id_kategori"),
            "tbl_buku.buku"=> $this->input->post("buku"),
            "tbl_buku.isbn"=> $this->input->post("isbn"),
            "tbl_buku.penerbit"=> $this->input->post("penerbit"),
            "tbl_buku.tahun"=> $this->input->post("tahun")
        ];
        $this->db->where('id_buku',$id_buku);
        $this->db->update('tbl_buku',$data);
    }

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_buku');
        $this->db->order_by('id_buku', 'desc');
        return $this->db->get()->result();
    }

    public function get_keyword_admin($keyword){
    
        $this->db->select('*');
        $this->db->from('tbl_buku');
        $this->db->join('tbl_kategori_buku','tbl_buku.id_kategori=tbl_kategori_buku.id_kategori');
        $this->db->like('tbl_buku.buku',$keyword);
        $return = $this->db->get('');
        return $return->result();
     }
}