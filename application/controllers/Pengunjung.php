<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // validasi login (samakan dengan Data.php)
        if($this->session->userdata('masuk_perpus') != TRUE){
            redirect(base_url('login'));
        }

        $this->data['CI'] =& get_instance();
        $this->load->helper(array('form','url'));
        $this->load->model('Pengunjung_model');
    }

    public function index()
    {
        $this->data['idbo'] = $this->session->userdata('ses_id');
        $this->data['title_web'] = 'Form Pengunjung';

        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('pengunjung/pengunjung_form', $this->data);
        $this->load->view('footer_view', $this->data);
    }

    public function simpan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'keperluan' => $this->input->post('keperluan'),
            'tanggal_kunjungan' => date('Y-m-d'),
            'waktu_kunjungan' => date('H:i:s')
        ];

        $this->Pengunjung_model->insert($data);
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success">Terima kasih, data kunjungan telah dicatat.</div>'
        );

        redirect('pengunjung');
    }

    public function daftar()
    {
        $this->data['idbo'] = $this->session->userdata('ses_id');
        $this->data['title_web'] = 'Daftar Pengunjung';
        $this->data['pengunjung'] = $this->Pengunjung_model->get_all();

        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('pengunjung/daftar_pengunjung', $this->data);
        $this->load->view('footer_view', $this->data);
    }
}
