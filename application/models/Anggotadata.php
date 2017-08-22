<?php

class Anggotadata extends CI_Model {

    var $tabel = 'tb_anggota';
    var $column_order = array('firstname', 'lastname', 'gender', 'address', 'dob', null); //set column field database for datatable orderable
    var $column_search = array('firstname', 'lastname', 'address'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id' => 'desc'); // default order

    function __construct() {
        parent::__construct();
    }

    function GetAllData($batas = null, $offset = null, $keywordby = null, $keyword = null) {

        $this->db->from($this->tabel);
        if ($batas != null) {
            $this->db->limit($batas, $offset);
        }
        if ($keyword != null) {
            $this->db->or_like($keyword);
        }
        $query = $this->db->get();

        //cek apakah ada barang
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

//    function GetAllData($batas = null, $offset = null, $key = null) {
//        $hasil = $this->db->query("SELECT * FROM tb_anggota ORDER BY id");
//        if ($hasil->num_rows() > 0) {
//            foreach ($hasil->result() as $row) {
//                $data[] = $row;
//            }
//            return $data;
//        }
//    }

    function count_barang() {
        $query = $this->db->get($this->tabel)->num_rows();
        return $query;
    }

    function count_barang_search($orlike) {
        $this->db->or_like($orlike);
        $query = $this->db->get($this->tabel);

        return $query->num_rows();
    }

    function search($keywordby, $keyword) {
        $hasil = $this->db->where($keywordby, $keyword)->or_like($keywordby, $keyword)->order_by($keywordby)->get('tb_anggota');
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function insertData($data) {
        $this->db->insert('tb_anggota', $data);
        return;
    }

    function get_data_by_id($table, $kode) {
        $this->db->where('id', $kode);
        return $this->db->get($table);
    }

    function update($table, $kode, $data) {
        $this->db->where('id', $kode);
        return $this->db->update($table, $data);
    }

    function del_by_id($table, $id) {
        $this->db->where('id', $id);
        $this->db->delete($table);
    }

    function hitung() {
        $tanggallahir = $this->input->post('tanggallahir');
        $tgl = substr($tanggallahir, 0, 2);
        $bln = substr($tanggallahir, 3, 2);
        $thn = substr($tanggallahir, 6, 4);
        $tgl_lahir1 = $thn . '-' . $bln . '-' . $tgl;
        $selisih = date_diff(date_create(), date_create($tgl_lahir1));
        $umur = $selisih->format('%y tahun %m bulan %d hari');

        $this->session->set_flashdata('pesan', $umur);
        redirect('umur');
    }

    function hitung_usia($tgl_lahir) {
        $today = date('Y-m-d');
        $date2 = time();
        list($thn, $bln, $tgl) = explode('-', $tgl_lahir);
        $time_lahir = mktime(0, 0, 0, $bln, $tgl, $thn);

        $diff = abs(strtotime($date2) - strtotime($time_lahir));

        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
        return $years . ' tahun ' . $months . ' bulan ' . $days . ' hari';
    }

}

?>