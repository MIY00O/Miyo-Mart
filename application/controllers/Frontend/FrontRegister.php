<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FrontRegister extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('User_model');
        $this->load->helper('url');
    }
    public function index()
    {
        $data = array(
            'title'     => "Daftar | ",
        );
        $this->load->view('frontend/frontregister', $data);
    }


    public function register()
    {
        $telp = $this->input->post('telp');

        $this->db->from('user');
        $this->db->where('telp', $telp);
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('error', ', Nomor telepon telah digunakan!');
            redirect('Home');
        } else {
            $this->User_model->save();
            $this->session->set_flashdata('success', 'Yey! Berhasil mendaftar, Silahkan Login');
            redirect('Frontend/FrontRegister');
        }
    }

    public function create()
    {
        
        $this->load->model('Store_model');
        $store_name = $this->input->post('store_name');
        $telp = $this->input->post('telp');

        $this->db->from('store');
        $this->db->where('store_name', $store_name);
        $cekstore = $this->db->get()->result_array();

        $this->db->from('store');
        $this->db->where('telp', $telp);
        $cektelp = $this->db->get()->result_array();


        if ($cekstore <> NULL) {
            $this->session->set_flashdata('flash-error', 'Nama toko telah digunakan!');
            redirect('Home');
        } else if ($cektelp <> NULL) {
            $this->session->set_flashdata('flash-error', 'Nomor telah telah digunakan!');
            redirect('Home');
        } else {
            $this->Store_model->create();
            $this->Store_model->UpdateUser();
            $this->session->set_flashdata('flash-success', 'Yey! Berhasil membuat toko');
            redirect('Home');
        }
    }
}
