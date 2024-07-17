<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wishlist_model extends CI_model
{
    public function wishlist()
    {
        $user_id = $this->session->userdata('user_id');

        $this->db->select('user.*, product.*, wishlist.*, (wishlist.count_items * product.price) as total');
        $this->db->from('product');
        $this->db->join('wishlist', 'product.product_id = wishlist.product_id', 'left');
        $this->db->join('user', 'user.user_id = wishlist.user_id', 'left');
        $this->db->where('wishlist.user_id', $user_id);
        $this->db->order_by('wishlist_id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function wishlistCount()
    {
        $user_id = $this->session->userdata('user_id');

        $this->db->select('product.product_id, COUNT(wishlist.product_id) as product_count');
        $this->db->select('user.*, product.*, wishlist.*, (wishlist.count_items * product.price) as total');
        $this->db->from('product');
        $this->db->join('wishlist', 'product.product_id = wishlist.product_id', 'left');
        $this->db->join('user', 'user.user_id = wishlist.user_id', 'left');
        $this->db->where('wishlist.user_id', $user_id);
        $query = $this->db->get();
        return $query->result_array();
    }
}
