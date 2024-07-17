<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_model
{
    public function save()
    {
        $data = array(
            'username'  => $this->input->post('username'),
            'password'  => md5($this->input->post('password')),
            'level'     => 'Customers',
            'telp'      => $this->input->post('telp'),
        );
        $this->db->insert('user', $data);
    }

    public function update()
    {
        $data = array(
            'nama'      => $this->input->post('nama'),
            'username'      => $this->input->post('username'),
            'level'     => $this->input->post('level'),
        );

        $where = array(
            'id_user' => $this->input->post('id_user')
        );
        $this->db->update('user', $data, $where);
    }

    // UserCase
    public function store()
    {
        $telp = $this->session->userdata('telp');
        $this->db->select('user.*, store.store_name');
        $this->db->from('user');
        $this->db->join('store', 'user.telp = store.telp', 'left');
        $this->db->where('user.telp', $telp);
        $usertoko = $this->db->get()->result_array();

        return $usertoko;
    }

    public function storeInfo()
    {
        $telp = $this->session->userdata('telp');

        $this->db->select('user.*, store.*');
        $this->db->from('user');
        $this->db->join('store', 'user.telp = store.telp');
        $this->db->where('user.telp', $telp);

        $storeInfo = $this->db->get()->row();

        return $storeInfo;
    }
}
