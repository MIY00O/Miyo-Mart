<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FrontProduct extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('User_model');
        $this->load->model('Product_model');
        $this->load->model('Wishlist_model');
        $this->load->helper('url');
        is_logged_in();
    }
    public function index($product_id)
    {
        $usertoko = $this->User_model->store();
        $allproduct = $this->Product_model->getallproduct();
        $productUserProcess = $this->Product_model->productUserProcess();
        $productUserSend = $this->Product_model->productUserSend();
        $productUserCompleted = $this->Product_model->productUserCompleted();
        $wishlist = $this->Wishlist_model->wishlist();
        $wishlistCount = $this->Wishlist_model->wishlistCount();

        $data = array(
            'usertoko'  => $usertoko,
            'wishlistCount'                  => $wishlistCount,
            'wishlist'                  => $wishlist,
            'allproduct'  => $allproduct,
            'product_id'  => $product_id,
            'productUserProcess'        => $productUserProcess,
            'productUserSend'           => $productUserSend,
            'productUserCompleted'      => $productUserCompleted,
            'title'     => "Situs Jual Beli Online Terpercaya | ",
        );
        $this->template->load('frontend/template/_template', 'frontend/pages/frontsingle', $data);
    }

    public function singleProduct($product_id)
    {
        $productUserProcess = $this->Product_model->productUserProcess();
        $productUserSend = $this->Product_model->productUserSend();
        $productUserCompleted = $this->Product_model->productUserCompleted();

        $usertoko = $this->User_model->store();
        $allproduct = $this->Product_model->getallproduct();

        $this->db->select('product.*, store.*');
        $this->db->from('product');
        $this->db->join('store', 'product.telp = store.telp', 'left');
        $this->db->where('product.product_id', $product_id);
        $product = $this->db->get()->row();
        if (!empty($allproduct)) {
            shuffle($allproduct);
        }
        if ($product) {
            $title = "Jual " . $product->name . " | ";
        } else {
            $title = "Produk Tidak Ditemukan | ";
        }
        $wishlist = $this->Wishlist_model->wishlist();
        $wishlistCount = $this->Wishlist_model->wishlistCount();
        $count_items = '';
        $data = array(
            'count_items'             => $count_items,
            'wishlistCount'                  => $wishlistCount,
            'wishlist'                  => $wishlist,
            'usertoko'      => $usertoko,
            'allproduct'    => $allproduct,
            'product'       => $product,
            'product_id'    => $product_id,
            'productUserProcess'        => $productUserProcess,
            'productUserSend'           => $productUserSend,
            'productUserCompleted'      => $productUserCompleted,
            'title'         => $title,
        );
        $this->template->load('frontend/template/_template', 'frontend/pages/frontsingle', $data);
    }

    public function singleeProduct($product_id, $count_items)
    {
        $productUserProcess = $this->Product_model->productUserProcess();
        $productUserSend = $this->Product_model->productUserSend();
        $productUserCompleted = $this->Product_model->productUserCompleted();

        $usertoko = $this->User_model->store();
        $allproduct = $this->Product_model->getallproduct();

        $this->db->select('product.*, store.*');
        $this->db->from('product');
        $this->db->join('store', 'product.telp = store.telp', 'left');
        $this->db->where('product.product_id', $product_id);
        $product = $this->db->get()->row();
        if (!empty($allproduct)) {
            shuffle($allproduct);
        }
        if ($product) {
            $title = "Jual " . $product->name . " | ";
        } else {
            $title = "Produk Tidak Ditemukan | ";
        }
        $wishlist = $this->Wishlist_model->wishlist();
        $wishlistCount = $this->Wishlist_model->wishlistCount();

        $data = array(
            'count_items'             => $count_items,
            'wishlistCount'                  => $wishlistCount,
            'wishlist'                  => $wishlist,
            'usertoko'      => $usertoko,
            'allproduct'    => $allproduct,
            'product'       => $product,
            'product_id'    => $product_id,
            'productUserProcess'        => $productUserProcess,
            'productUserSend'           => $productUserSend,
            'productUserCompleted'      => $productUserCompleted,
            'title'         => $title,
        );
        $this->template->load('frontend/template/_template', 'frontend/pages/frontsingle', $data);
    }

    public function checkout($product_id)
    {
        $productUserProcess = $this->Product_model->productUserProcess();
        $productUserSend = $this->Product_model->productUserSend();
        $productUserCompleted = $this->Product_model->productUserCompleted();

        $usertoko = $this->User_model->store();
        $allproduct = $this->Product_model->getallproduct();


        $this->db->select('product.*, store.*');
        $this->db->from('product');
        $this->db->join('store', 'product.telp = store.telp', 'left');
        $this->db->where('product.product_id', $product_id);
        $product = $this->db->get()->row();

        $count = $this->input->post('qty');

        if ($count) {
            $producttotal = $count * $product->price;
        } else {
        }

        if ($product) {
            $title = "Checkout | ";
        } else {
            $title = "Produk Tidak Ditemukan | ";
        }
        $wishlist = $this->Wishlist_model->wishlist();
        $wishlistCount = $this->Wishlist_model->wishlistCount();

        $data = array(
            'wishlistCount'                  => $wishlistCount,
            'wishlist'                  => $wishlist,
            'usertoko'      => $usertoko,
            'allproduct'    => $allproduct,
            'product'       => $product,
            'product_id'    => $product_id,
            'title'         => $title,
            'count'         => $count,
            'producttotal'  => $producttotal,
            'productUserProcess'        => $productUserProcess,
            'productUserSend'           => $productUserSend,
            'productUserCompleted'      => $productUserCompleted,
        );
        $this->template->load('frontend/template/_template', 'frontend/pages/frontcekout', $data);
    }

    public function order()
    {
        $count = $this->input->post('qty');
        $product_id = $this->input->post('product_id');
        $note = '';

        $this->db->from('product')->where('product_id', $product_id);
        $stockold = $this->db->get()->row()->stock;

        $this->db->from('process');
        $this->db->where('product_id', $product_id);
        $this->db->where('telp', $this->session->userdata('telp'));
        $this->db->where('process_id', $this->input->post('process_id'));
        $cek = $this->db->get()->result_array();

        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date('Y-m');
        $this->db->from('process');
        $this->db->where("DATE_FORMAT(buy_date, '%Y-%m') = '$tanggal'", null, false);
        $jumlah = $this->db->count_all_results();
        $random_number = rand(1000, 9999);
        $note = date('ymd') . strval($random_number) . strval($jumlah + 1);


        if ($stockold > $count and $cek == NULL) {

            $data = array(
                'product_id'            => $this->input->post('product_id'),
                'telp'                  => $this->session->userdata('telp'),
                'count_items'           => $count,
                'buy_date'              => date('Y-m-d H:i:s'), // Menggunakan date() untuk mendapatkan tanggal dan jam saat ini
                'buy_code'              => $note,
                'delivery_method'       => $this->input->post('delivery_method'),
                'condition_process'     => 'Process',
            );
            $this->db->insert('process', $data);

            $user_id = $this->session->userdata['user_id'];

            $this->db->where('product_id', $product_id);
            $this->db->where('user_id', $user_id);
            $query = $this->db->get('wishlist');

            if ($query->num_rows() > 0) {
                $this->db->where('product_id', $product_id);
                $this->db->where('user_id', $user_id);
                $this->db->delete('wishlist');
            }

            $this->db->from('product')->where('product_id', $product_id);
            $stocknew = $stockold - $count;
            if ($stockold >= $count) {
                $data2 = array(
                    'stock' => $stocknew,
                );
                $where = array(
                    'product_id' => $product_id
                );
                $this->db->update('product', $data2, $where);
            } else {
            }
        }

        redirect('Frontend/FrontProduct/orderConfirmation/' . $note);
    }

    public function orderConfirmation($buy_code)
    {
        $productUserProcess = $this->Product_model->productUserProcess();
        $productUserSend = $this->Product_model->productUserSend();
        $productUserCompleted = $this->Product_model->productUserCompleted();

        $usertoko = $this->User_model->store();
        $allproduct = $this->Product_model->getallproduct();

        $this->db->from('process');
        $this->db->where('buy_code', $buy_code);
        $process = $this->db->get()->row();


        $this->db->select('product.*, process.*');
        $this->db->from('process');
        $this->db->join('product', 'process.product_id = product.product_id', 'left');
        $this->db->where('process.buy_code', $buy_code);
        $product = $this->db->get()->row();


        $product_id = $process->product_id;
        $count      = $process->count_items;
        if ($count) {
            $producttotal = $count * $product->price;
        } else {
        }

        if ($product) {
            $title = "Konfirmasi Pesanan | ";
        } else {
            $title = "Produk Tidak Ditemukan | ";
        }
        $wishlist = $this->Wishlist_model->wishlist();
        $wishlistCount = $this->Wishlist_model->wishlistCount();

        $data = array(
            'process'                   => $process,
            'buy_code'                  => $buy_code,
            'wishlistCount'             => $wishlistCount,
            'wishlist'                  => $wishlist,
            'usertoko'                  => $usertoko,
            'allproduct'                => $allproduct,
            'product'                   => $product,
            'product_id'                => $product_id,
            'title'                     => $title,
            'count'                     => $count,
            'producttotal'              => $producttotal,
            'productUserProcess'        => $productUserProcess,
            'productUserSend'           => $productUserSend,
            'productUserCompleted'      => $productUserCompleted,
        );
        $this->template->load('frontend/template/_template', 'frontend/pages/frontconfirm', $data);
    }

    public function wishlistPlus($id)
    {
        $user_id = $this->session->userdata('user_id');

        $this->db->where('user_id', $user_id);
        $this->db->where('product_id', $id);
        $wishlist = $this->db->get('wishlist')->row();

        if ($wishlist) {
            $data = array(
                'count_items'   => intval($wishlist->count_items) + 1,
            );
            $where = array(
                'product_id' => $id,
            );
            $this->db->update('wishlist', $data, $where);
        } else {
            $data = array(
                'product_id'    => $id,
                'user_id'       => $user_id,
                'count_items'   => '1',
            );
            $this->db->insert('wishlist', $data);
        }

        $this->session->set_flashdata('success', 'Berhasil menambahkan ke keranjang!');
        redirect($_SERVER["HTTP_REFERER"]);
    }

    public function wishlistDelete($id)
    {
        $user_id = $this->session->userdata('user_id');

        $this->db->where('product_id', $id);
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('wishlist');

        if ($query->num_rows() > 0) {
            $this->db->where('product_id', $id);
            $this->db->where('user_id', $user_id);
            $this->db->delete('wishlist');
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }

    public function wishlist()
    {

        $usertoko = $this->User_model->store();
        $allproduct = $this->Product_model->getallproduct();
        $productUserProcess = $this->Product_model->productUserProcess();
        $productUserSend = $this->Product_model->productUserSend();
        $productUserCompleted = $this->Product_model->productUserCompleted();
        $wishlist = $this->Wishlist_model->wishlist();
        $wishlistCount = $this->Wishlist_model->wishlistCount();



        $data = array(
            'wishlistCount'                  => $wishlistCount,
            'usertoko'                  => $usertoko,
            'wishlist'                  => $wishlist,
            'allproduct'                => $allproduct,
            'title'                     => 'Wishlist | ',
            'productUserProcess'        => $productUserProcess,
            'productUserSend'           => $productUserSend,
            'productUserCompleted'      => $productUserCompleted,
        );
        $this->template->load('frontend/template/_template', 'frontend/pages/frontwishlist', $data);
    }
}
