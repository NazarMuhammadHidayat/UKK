<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_peserta extends CI_model
{
    public function semuaData()
    {
        return $this->db->get('peserta')->result_array();
    }


    public function proses_tambah_data()

    {
        $data = [
            "nama_peserta" => $this->input->post('nama_peserta'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "no_hp" => $this->input->post('no_hp'),
            "alamat" => $this->input->post('alamat'),
          
        ];

        $this->db->insert('peserta',$data);
    }
    
    public function hapus_data($nisn)
    {
        $this->db->where('nisn',$nisn);
        $this->db->delete('peserta');
    }

    public function ambil_nisn_peserta($nisn)
    {
       return $this->db->get_where('peserta',['nisn' => $nisn])-> row_array();
    }

    public function proses_edit_data()
    {
        $data = [
            "nama_peserta" => $this->input->post('nama_peserta'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "no_hp" => $this->input->post('no_hp'),
            "alamat" => $this->input->post('alamat'),
        ];

        $this->db->where('nisn', $this->input->post('nisn'));
        $this->db->update('peserta' , $data);
    }

}