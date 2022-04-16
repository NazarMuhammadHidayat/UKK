<?php

class Transaksi  extends CI_Controller
{
    function index()
    {
        $data['tbl_transaksi'] = $this->M_transaksi->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/transaksi',$data);
        $this->load->view('partial_admin/footer');
    }



    function tambah_data_transaksi()
    {
        $data['tbl_transaksi'] = $this->M_transaksi->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/tambah_data_transaksi',$data);
        $this->load->view('partial_admin/footer');
    }



    function proses_tambah_data_transaksi()
    {

        $add = [
            'jenis_id'                 => $this->input->post('jenis_id'),
            'atas_nama'                => $this->input->post('atas_nama'),
            'tanggal'                  => $this->input->post('tanggal'),
            'waktu_sewa'               => $this->input->post('waktu_sewa'),
            'kamar_id'                 => $this->input->post('kamar_id'),
            'jenis_pembayaran'         => $this->input->post('jenis_pembayaran'),
        ];
        $this->db->insert('tbl_transaksi', $add);
        redirect(base_url('index.php/transaksi'));
    }




    
    function update_data_transaksi($id_transaksi)
    {
        $data['tbl_transaksi'] = $this->M_transaksi->update($id_transaksi);
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/update_data_transaksi',$data);
        $this->load->view('partial_admin/footer');
    }






    function proses_update_data_transaksi()
    {

        $data = [
            'jenis_id'                 => $this->input->post('jenis_id'),
            'atas_nama'                => $this->input->post('atas_nama'),
            'tanggal'                  => $this->input->post('tanggal'),
            'waktu_sewa'               => $this->input->post('waktu_sewa'),
            'kamar_id'                 => $this->input->post('kamar_id'),
            'jenis_pembayaran'         => $this->input->post('jenis_pembayaran'),
        ];
        $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
        $this->db->update('tbl_transaksi', $data);
        redirect(base_url('index.php/transaksi'));
    }
    


    function hapus_data_transaksi($id_transaksi)
    {
        $this->M_transaksi->hapus($id_transaksi);
        redirect(base_url('index.php/transaksi'));
    }
}
