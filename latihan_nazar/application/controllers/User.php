<?php

class User  extends CI_Controller
{
    function index()
    {
        $data['tbl_user'] = $this->M_user->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/user',$data);
        $this->load->view('partial_admin/footer');
    }



    function tambah_data_user()
    {
        $data['tbl_user'] = $this->M_user->SemuaData();
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/tambah_data_user',$data);
        $this->load->view('partial_admin/footer');
    }



    function proses_tambah_data_user()
    {

        $add = [
            'email'          => $this->input->post('email'),
            'password'          => $this->input->post('password'),
            'hak_akses'         => $this->input->post('hak_akses'),
            'no_hp'             => $this->input->post('no_hp'),
        ];
        $this->db->insert('tbl_user', $add);
        redirect(base_url('index.php/user'));
    }




    
    function update_data_user($id_user)
    {
        $data['tbl_user'] = $this->M_user->update($id_user);
        $this->load->view('partial_admin/header');
        $this->load->view('partial_admin/navigasi');
        $this->load->view('partial_admin/js');
        $this->load->view('content_admin/update_data_user',$data);
        $this->load->view('partial_admin/footer');
    }






    function proses_update_data_user()
    {

        $data = [
            'email'             => $this->input->post('email'),
            'password'          => $this->input->post('password'),
            'hak_akses'         => $this->input->post('hak_akses'),
            'no_hp'             => $this->input->post('no_hp'),
        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('tbl_user', $data);
        redirect(base_url('index.php/user'));
    }
    


    function hapus_data_user($id_user)
    {
        $this->M_user->hapus($id_user);
        redirect(base_url('index.php/user'));
    }
}
