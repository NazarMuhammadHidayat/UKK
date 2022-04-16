<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller 
{

    
    public function __construct()
    {
            parent::__construct();
            $this->load->model('P_peserta');
            $this->load->model('a_admin');
            
            // Your own constructor code
    }

        public function index ()
    {
        
        $this->load->view('templates/hider');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index');
        $this->load->view('templates/footer');
    }
    public function peserta ()
    {
        $data ['peserta'] = $this->p_peserta->semuaData();
        $this->load->view('templates/hider');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/peserta',$data);
        $this->load->view('templates/footer');
    }

    
    public function tambah_data()
    {
    $data ['peserta'] = $this->p_peserta->semuaData();
    $this->load->view('templates/hider');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('home/tambah_data',$data);
    $this->load->view('templates/footer');
    }

    public function proses_tambah_data()
    {
        $this->p_peserta->proses_tambah_data();
        redirect('home/peserta');
    }

    public function hapus_data($nisn)
    {
        $this->p_peserta->hapus_data($nisn);
        redirect('home/peserta');
    }

    public function edit_data($nisn)
    {
        $data['peserta'] = $this->p_peserta->ambil_nisn_peserta($nisn);
        $this->load->view('templates/hider');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_data',$data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data()
    {
        $this->p_peserta->proses_edit_data($nisn);
        redirect('home/peserta');
    }
    public function admin ()
    {
        $data ['admin_pkl'] = $this->a_admin->semuaData();
        $this->load->view('templates/hider');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/admin',$data);
        $this->load->view('templates/footer');
    }


    public function tambah_data_admin()
    {
    $data ['admin_pkl'] = $this->a_admin->semuaData();
    $this->load->view('templates/hider');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('home/tambah_data_admin',$data);
    $this->load->view('templates/footer');
    }

    public function proses_tambah_data_admin()
    {
        $this->a_admin->proses_tambah_data_admin();
        redirect('home/admin/');
    }

    
    public function hapus_data_admin($id_admin)
    {
        $this->a_admin->hapus_data_admin($id_admin);
        redirect('home/admin/');
    }


    public function edit_data_admin($id_admin)
    {
        $data['admin_pkl'] = $this->a_admin->ambil_id_admin_($id_admin);
        $this->load->view('templates/hider');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_data_admin',$data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data_admin()
    {
        $this->a_admin->proses_edit_data_admin($id_admin);
        redirect('home/admin/');
    }

    public function beranda ()
    {
       
        $this->load->view('templates/hider');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/beranda');
        $this->load->view('templates/footer');
    }


}