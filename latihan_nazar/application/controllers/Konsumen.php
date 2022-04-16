<?php

class Konsumen  extends CI_Controller
{
    function index()
    {
        $data['tbl_konsumen'] = $this->M_konsumen->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/konsumen',$data);
        $this->load->view('partial_admin/footer');
    }



    function tambah_data_konsumen()
    {
        $data['tbl_konsumen'] = $this->M_konsumen->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/tambah_data_konsumen',$data);
        $this->load->view('partial_admin/footer');
    }



    function proses_tambah_data_konsumen()
    {

        $add = [
            'nama_depan'               => $this->input->post('nama_depan'),
            'nama_tengah'              => $this->input->post('nama_tengah'),
            'nama_belakang'            => $this->input->post('nama_belakang'),
            'alamat'                   => $this->input->post('alamat'),
            'kota'                     => $this->input->post('kota'),
            'provinsi'                 => $this->input->post('provinsi'),
            'negara'                    => $this->input->post('negara'),
            'no_identitas'             => $this->input->post('no_identitas'),
            'no_telp'                  => $this->input->post('no_telp'),
            'email'                    => $this->input->post('email'),
        ];
        $this->db->insert('tbl_konsumen', $add);
        redirect(base_url('index.php/konsumen'));
    }




    
    function update_data_konsumen($id_konsumen)
    {
        $data['tbl_konsumen'] = $this->M_konsumen->update($id_konsumen);
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/update_data_konsumen',$data);
        $this->load->view('partial_admin/footer');
    }






    function proses_update_data_konsumen()
    {

        $data = [
            'nama_depan'               => $this->input->post('nama_depan'),
            'nama_tengah'              => $this->input->post('nama_tengah'),
            'nama_belakang'            => $this->input->post('nama_belakang'),
            'alamat'                   => $this->input->post('alamat'),
            'kota'                     => $this->input->post('kota'),
            'provinsi'                 => $this->input->post('provinsi'),
            'negara'                    => $this->input->post('negara'),
            'no_identitas'             => $this->input->post('no_identitas'),
            'no_telp'                  => $this->input->post('no_telp'),
            'email'                  => $this->input->post('email'),
        ];
        $this->db->where('id_konsumen', $this->input->post('id_konsumen'));
        $this->db->update('tbl_konsumen', $data);
        redirect(base_url('index.php/konsumen'));
    }
    


    function hapus_data_konsumen($id_konsumen)
    {
        $this->M_konsumen->hapus($id_konsumen);
        redirect(base_url('index.php/konsumen'));
    }
}
