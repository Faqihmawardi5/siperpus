<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_Admin');
        if($this->session->userdata('masuk_perpus') != TRUE){
            redirect(base_url('login'));
        }
    }

    public function jumlah_data()
    {
        $this->data['title_web'] = 'Laporan Jumlah Data';
        $this->data['idbo'] = $this->session->userdata('ses_id');

        // Hitung data
        $this->data['count_buku'] = $this->db->count_all('tbl_buku');
        $this->data['count_anggota'] = $this->db->count_all('tbl_login');
        $this->data['count_pinjam'] = $this->db->where('status','Dipinjam')->get('tbl_pinjam')->num_rows();
        $this->data['count_kembali'] = $this->db->where('status','Di Kembalikan')->get('tbl_pinjam')->num_rows();
        $this->data['count_pengunjung'] = $this->db->count_all('tbl_pengunjung');

        // 🔥 LOAD DENGAN SIDEBAR
        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('laporan_jumlah_data_view', $this->data);
        $this->load->view('footer_view', $this->data);
    }

    public function cetak_jumlah_data()
    {
        $data['count_buku'] = $this->db->count_all('tbl_buku');
        $data['count_anggota'] = $this->db->count_all('tbl_login');
        $data['count_pinjam'] = $this->db->where('status','Dipinjam')->get('tbl_pinjam')->num_rows();
        $data['count_kembali'] = $this->db->where('status','Di Kembalikan')->get('tbl_pinjam')->num_rows();
        $data['count_pengunjung'] = $this->db->count_all('tbl_pengunjung');

        // ❌ TANPA SIDEBAR (KHUSUS CETAK)
        $this->load->view('laporan_jumlah_cetak_view', $data);
    }
}
