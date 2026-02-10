<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bukutamu_model extends CI_Model {

    private $table = 'tbl_pengunjung'; // pakai tabel pengunjung yang ada

    public function get_all()
    {
        return $this->db->order_by('tanggal_kunjungan','desc')->get($this->table)->result();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
}
