<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Product_model');
        $this->load->model('Wishlist_model');
    }
    public function index()
    {
        $productsearch = '';
        $search_term = $this->input->post('search_term');

        $search_performed = !empty($search_term);

        if (!empty($search_term)) {
            $this->db->like('name', $search_term);

            if ($this->session->userdata('telp') != NULL) {
                $session_telp = $this->session->userdata('telp');

                // Ambil data produk dan store yang nomor teleponnya berbeda dengan nomor telepon di sesi
                $this->db->select('product.*, store.*');
                $this->db->from('product');
                $this->db->join('store', 'product.telp = store.telp', 'left');
                $this->db->where('product.telp !=', $session_telp);  // Tambahkan kondisi ini
                $productsearch = $this->db->get()->result_array();
            } else {
                $this->db->select('*');
                $this->db->from('product');
                $productsearch = $this->db->get()->result_array();
            }
        }




        $usertoko = $this->User_model->store();
        $allproduct = $this->Product_model->getallproduct();
        $productUserProcess = $this->Product_model->productUserProcess();
        $productUserSend = $this->Product_model->productUserSend();
        $trendingProduct = $this->Product_model->trendingProduct();
        $productUserCompleted = $this->Product_model->productUserCompleted();
        $wishlist = $this->Wishlist_model->wishlist();
        $wishlistCount = $this->Wishlist_model->wishlistCount();

        if (!empty($allproduct)) {
            shuffle($allproduct);
        }

        $data = array(
            'search_performed'             => $search_performed,
            'search_term'             => $search_term,
            'productsearch'             => $productsearch,
            'trendingProduct'                  => $trendingProduct,
            'wishlistCount'                  => $wishlistCount,
            'wishlist'                  => $wishlist,
            'usertoko'                  => $usertoko,
            'allproduct'                => $allproduct,
            'productUserProcess'        => $productUserProcess,
            'productUserSend'           => $productUserSend,
            'productUserCompleted'      => $productUserCompleted,
            'title'     => "Situs Jual Beli Online Terpercaya | ",

        );
        $this->template->load('frontend/template/_template', 'frontend/fronthome', $data);
    }


    public function Login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user')->where('username', $username);
        $user = $this->db->get()->row();

        if ($user == NULL) {
            $this->session->set_flashdata('error', 'Username tidak ada!');
            redirect('Home');
        } else if ($user->password == $password) {
            $data = [
                'user_id'       => $user->user_id,
                'username'      => $user->username,
                'password'          => $user->password,
                'address'          => $user->address,
                'level'          => $user->level,
                'telp'          => $user->telp,
            ];
            $b = $this->session->set_userdata($data);

            $this->session->set_flashdata('success', 'Anda berhasil login!');
            redirect('Home');
        } else {
            redirect('Home');
        }
    }

    public function updateaddress($id)
    {
        $data = array(
            'address'   => $this->input->post('address'),
        );
        $this->db->where('user_id', $id);
        $this->db->update('user', $data);

        $b = $this->session->set_userdata($data);

        $this->session->set_flashdata('success', 'Anda berhasil memperbarui alamat!');
        redirect('Home');
    }

    public function Logout()
    {
        $id = $this->session->userdata('user_id');

        $this->db->where('user_id', $id);
        $this->session->sess_destroy();

        $this->session->set_flashdata('success', 'Anda berhasil logout!');
        redirect('Home');
    }

    public function buliana()
    {
        $usertoko = $this->User_model->store();
        $allproduct = $this->Product_model->getallproduct();
        $productUserProcess = $this->Product_model->productUserProcess();
        $productUserSend = $this->Product_model->productUserSend();
        $trendingProduct = $this->Product_model->trendingProduct();
        $productUserCompleted = $this->Product_model->productUserCompleted();
        $wishlist = $this->Wishlist_model->wishlist();
        $wishlistCount = $this->Wishlist_model->wishlistCount();

        // var_dump($trendingProduct);
        // die;

        if (!empty($allproduct)) {
            shuffle($allproduct);
        }

        $data = array(
            'trendingProduct'                  => $trendingProduct,
            'wishlistCount'                  => $wishlistCount,
            'wishlist'                  => $wishlist,
            'usertoko'                  => $usertoko,
            'allproduct'                => $allproduct,
            'productUserProcess'        => $productUserProcess,
            'productUserSend'           => $productUserSend,
            'productUserCompleted'      => $productUserCompleted,
            'title'     => "Tugas Buliana | ",

        );
        $this->template->load('frontend/template/_template', 'frontend/pages/buliana', $data);
    }
}
