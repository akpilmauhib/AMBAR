<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_App extends CI_Model
{
    // Mengecek Login
    public function cek_akun($kondisi, $nm_tabel)
    {
        // Mendapatkan nilai dari hasil pemeriksaan 
        return $this->db->get_where($nm_tabel, $kondisi);
    }

    // Create ========================================================================================
    function save($datasensor)
    {
        $this->db->insert('kondisi', $datasensor);
        return TRUE;
    }
    // Menambahkan Data ke Database
    public function simpan_data($nm_table, $data)
    {
        $this->db->insert($nm_table, $data);
    }

    // Read ==========================================================================================
    // Menampilkan Data Dari Database
    public function tampil_data($nm_table, $field, $order, $limit = null)
    {
        $this->db->select('*');
        $this->db->from($nm_table);
        $this->db->order_by($field, $order);
        $this->db->limit($limit);
        return $this->db->get();
    }

    // Update ========================================================================================
    public function edit_data($nm_table, $kondisi)
    {
        // Mendapatkan nilai dari pengambilan data dari nama tabel dan kondisi yang dikirim 
        return $this->db->get_where($nm_table, $kondisi);
    }
    public function proses_update($kondisi, $data, $nm_table)
    {
        $this->db->where($kondisi);
        $this->db->update($nm_table, $data);
    }

    // Delete ========================================================================================
    // Menghapus Data Dari Database
    public function hapus_data($nm_table, $kondisi)
    {
        $this->db->where($kondisi);
        $this->db->delete($nm_table);
    }
    // Menghapus File Dari Database dan penyimpanan
    public function hapus_file($kondisi, $data, $nm_table)
    {
        $this->db->where($kondisi);
        $this->db->update($nm_table, $data);
    }

    public function getDataByID($where, $nm_tabel)
    {
        $this->db->where($where);
        return $this->db->get($nm_tabel);
    }
}
