<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BackPesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Product_model');
        is_logged_in();
    }
    public function index()
    {
        $usertoko           = $this->User_model->store();
        $productProcess     = $this->Product_model->productProcess();
        $productSend        = $this->Product_model->productSend();
        $productCompleted   = $this->Product_model->productCompleted();
        is_admin();
        $data = array(
            'usertoko'          => $usertoko,
            'productProcess'    => $productProcess,
            'productSend'       => $productSend,
            'productCompleted'  => $productCompleted,
            'title'             => "Seller Pesanan | ",
        );
        $this->template->load('backend/template/_template', 'backend/pages/backpesanan', $data);
    }

    public function process($id)
    {
        if ($id) {
            $data = array(
                'condition_process' => 'Send',
            );
            $where = array(
                'process_id' => $id
            );
            $this->db->update('process', $data, $where);
            redirect('Backend/BackPesanan');
        } else {
        }
    }

    public function send($id)
    {
        if ($id) {
            $data = array(
                'condition_process' => 'Wait',
            );
            $where = array(
                'process_id' => $id
            );
            $this->db->update('process', $data, $where);
            redirect('Backend/BackPesanan');
        } else {
        }
    }

    public function sendCompleted($id)
    {

        if ($id) {
            $data = array(
                'condition_process' => 'Completed',
            );

            $where = array(
                'process_id' => $id
            );
            $this->db->update('process', $data, $where);
            redirect('');
        } else {
        }
    }
}
