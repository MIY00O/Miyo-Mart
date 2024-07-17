<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_model
{

    public function saveproduct()
    {
        $data = array(
            'store_name'            => $this->input->post('store_name'),
            'name'                  => $this->input->post('name'),
            'description'           => $this->input->post('description'),
            'picture1'              => $uploaded_photos['picture1'] ?? NULL,
            'picture2'              => $uploaded_photos['picture2'] ?? NULL,
            'picture3'              => $uploaded_photos['picture3'] ?? NULL,
            'picture4'              => $uploaded_photos['picture4'] ?? NULL,
            'stock'                 => $this->input->post('stock'),
            'condition_product'     => $this->input->post('condition_product'),
            'preorder'              => $this->input->post('preorder'),
            'price'                 => $this->input->post('price'),
        );
        $this->db->insert('product', $data);
    }
    public function getdatastoreproduct()
    {
        $user_telp = $this->session->userdata('username');

        $this->db->select('store.store_name, product.name');
        $this->db->from('store');
        $this->db->join('user', 'store.telp = user.telp'); // Join tabel user dengan store
        $this->db->join('product', 'store.telp = product.telp'); // Join tabel store dengan product
        $this->db->where('user.telp', $user_telp); // Kondisi berdasarkan telp

        $query = $this->db->get();
        return $query->result_array();
    }


    public function getallproduct()
    {
        if ($this->session->userdata('telp') != NULL) {
            $session_telp = $this->session->userdata('telp');

            // Ambil data produk dan store yang nomor teleponnya berbeda dengan nomor telepon di sesi
            $this->db->select('product.*, store.*');
            $this->db->from('product');
            $this->db->join('store', 'product.telp = store.telp', 'left');
            $this->db->where('product.telp !=', $session_telp);  // Tambahkan kondisi ini
            $query = $this->db->get();
            return $query->result_array();
        } else {
            $this->db->select('*');
            $this->db->from('product');
            $query = $this->db->get();
            return $query->result_array();
        }
    }

    public function trendingProduct()
    {
        $this->db->select('product.*, store.*, SUM(process.count_items) as total_sold');
        $this->db->from('product');
        $this->db->join('store', 'product.telp = store.telp', 'left');
        $this->db->join('process', 'product.product_id = process.product_id', 'left');
        $this->db->where('process.condition_process', 'Completed');
        $this->db->group_by('product.product_id');
        $this->db->order_by('total_sold', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function productProcess()
    {
        $session_telp = $this->session->userdata('telp');
        // $this->db->select('process.*, product.*');
        $this->db->select('process.*, product.*, (process.count_items * product.price) as total');
        $this->db->from('process');
        $this->db->join('product', 'process.product_id = product.product_id', 'left');
        $this->db->where('product.telp', $session_telp);
        $this->db->where('process.condition_process', 'Process');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function productSend()
    {
        $session_telp = $this->session->userdata('telp');
        // $this->db->select('process.*, product.*');
        $this->db->select('process.*, product.*, (process.count_items * product.price) as total');
        $this->db->from('process');
        $this->db->join('product', 'process.product_id = product.product_id', 'left');
        $this->db->where('product.telp', $session_telp);
        $this->db->where_in('process.condition_process', ['Send', 'Wait']);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function productCompleted()
    {
        $session_telp = $this->session->userdata('telp');
        // $this->db->select('process.*, product.*');
        $this->db->select('process.*, product.*, (process.count_items * product.price) as total');
        $this->db->from('process');
        $this->db->join('product', 'process.product_id = product.product_id', 'left');
        $this->db->where('product.telp', $session_telp);
        $this->db->where('process.condition_process', 'Completed');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function productUserProcess()
    {
        $session_telp = $this->session->userdata('telp');

        $this->db->select('process.*, product.*, user.*, (process.count_items * product.price) as total');
        $this->db->from('process');
        $this->db->join('product', 'product.product_id = process.product_id', 'left');
        $this->db->join('user', 'user.telp = process.telp', 'left');
        $this->db->where('process.telp', $session_telp);
        $this->db->where('process.condition_process', 'Process');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function productUserSend()
    {
        $session_telp = $this->session->userdata('telp');

        $this->db->select('process.*, product.*, user.*, (process.count_items * product.price) as total');
        $this->db->from('process');
        $this->db->join('product', 'product.product_id = process.product_id', 'left');
        $this->db->join('user', 'user.telp = process.telp', 'left');
        $this->db->where('process.telp', $session_telp);
        $this->db->where_in('process.condition_process', ['Send', 'Wait']);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function productUserCompleted()
    {
        $session_telp = $this->session->userdata('telp');

        $this->db->select('process.*, product.*, user.*, (process.count_items * product.price) as total');
        $this->db->from('process');
        $this->db->join('product', 'product.product_id = process.product_id', 'left');
        $this->db->join('user', 'user.telp = process.telp', 'left');
        $this->db->where('process.telp', $session_telp);
        $this->db->where('process.condition_process', 'Completed');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function completedCount()
    {
        $session_telp = $this->session->userdata('telp');

        $this->db->select('COUNT(*) as total_completed');
        $this->db->from('process');
        $this->db->join('product', 'product.product_id = process.product_id', 'left');
        $this->db->join('user', 'user.telp = process.telp', 'left');
        $this->db->where('process.telp', $session_telp);
        $this->db->where('process.condition_process', 'Completed');

        $query = $this->db->get();
        return $query->row()->total_completed;
    }

    public function productCount()
    {
        $session_telp = $this->session->userdata('telp');

        $this->db->select('COUNT(*) as total_product');
        $this->db->from('product');
        $this->db->join('user', 'user.telp = product.telp', 'left');
        $this->db->where('product.telp', $session_telp);

        $query = $this->db->get();
        return $query->row()->total_product;
    }
}
