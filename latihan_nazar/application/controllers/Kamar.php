<?php

class Kamar  extends CI_Controller
{
    function index()
    {
        $data['tbl_kamar'] = $this->M_kamar->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/kamar',$data);
        $this->load->view('partial_admin/footer');
    }



    function tambah_data_kamar()
    {
        $data['tbl_kamar'] = $this->M_kamar->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/tambah_data_kamar',$data);
        $this->load->view('partial_admin/footer');
    }



    function proses_tambah_data_kamar()
    {

        $add = [
            'nomor_kamar'       => $this->input->post('nomor_kamar'),
            'id_jenis'          => $this->input->post('id_jenis'),
            'ket_kamar'         => $this->input->post('ket_kamar'),
        ];
        $this->db->insert('tbl_kamar', $add);
        redirect(base_url('index.php/kamar'));
    }




    
    function update_data_kamar($id_kamar)
    {
        $data['tbl_kamar'] = $this->M_kamar->update($id_kamar);
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/update_data_kamar',$data);
        $this->load->view('partial_admin/footer');
    }






    function proses_update_data_kamar()
    {

        $data = [
            'nomor_kamar'       => $this->input->post('nomor_kamar'),
            'id_jenis'          => $this->input->post('id_jenis'),
            'ket_kamar'         => $this->input->post('ket_kamar'),
        ];
        $this->db->where('id_kamar', $this->input->post('id_kamar'));
        $this->db->update('tbl_kamar', $data);
        redirect(base_url('index.php/kamar'));
    }
    


    function hapus_data_kamar($id_kamar)
    {
        $this->M_kamar->hapus($id_kamar);
        redirect(base_url('index.php/kamar'));
    }
}
