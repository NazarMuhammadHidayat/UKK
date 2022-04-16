<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class a_admin extends CI_model
{
    public function semuaData()
    {
        return $this->db->get('admin_pkl')->result_array();
    }

    public function proses_tambah_data_admin()

    {
        $data = [
            "nama_admin" => $this->input->post('nama_admin'),
            "alamat_admin" => $this->input->post('alamat_admin'),
            "kontak_admin" => $this->input->post('kontak_admin'),
          
        ];

        $this->db->insert('admin_pkl',$data);
    }

    public function hapus_data_admin($id_admin)
    {
        $this->db->where('id_admin',$id_admin);
        $this->db->delete('admin_pkl');
    }


    public function ambil_id_admin_($id_admin)
    {
       return $this->db->get_where('admin_pkl',['id_admin' => $id_admin])-> row_array();
    }

    public function proses_edit_data_admin()
    {
        $data = [
            "nama_admin" => $this->input->post('nama_admin'),
            "alamat_admin" => $this->input->post('alamat_admin'),
            "kontak_admin" => $this->input->post('kontak_admin'),
        ];

        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('admin_pkl' , $data);
    }

}