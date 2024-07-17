<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BackDashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Product_model');
        is_logged_in();
        is_admin();
    }
    public function index()
    {
        $usertoko           = $this->User_model->store();
        $storeInfo          = $this->User_model->storeInfo();
        $productCompleted   = $this->Product_model->productCompleted();
        $completedCount     = count($productCompleted);
        $allProductCount    = $this->Product_model->productCount();

        $data = array(
            'usertoko'  => $usertoko,
            'storeInfo'  => $storeInfo,
            'completedCount' => $completedCount,
            'allProductCount' => $allProductCount,
            'title'     => "Seller Dashboard | ",
        );
        $this->template->load('backend/template/_template', 'backend/backdashboard', $data);
    }
    public function updateInfoStore()
    {
        $session_telp = $this->session->userdata('telp');
        $data = array(
            'store_address'   => $this->input->post('store_address'),
            'store_description'   => $this->input->post('store_description'),
        );
        $this->db->where('telp', $session_telp);
        $this->db->update('store', $data);
        redirect($_SERVER["HTTP_REFERER"]);
    }
}
