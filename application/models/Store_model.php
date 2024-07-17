<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store_model extends CI_model
{
    public function create()
    {
        $data = array(
            'store_name'            => $this->input->post('store_name'),
            'telp'                  => $this->input->post('telp'),
            'store_address'         => $this->input->post('store_address'),
            'store_description'     => $this->input->post('store_description'),
        );
        $this->db->insert('store', $data);

        $data = array(
            'address'      => $this->input->post('store_address'),
            'level'         => 'AdminShop'
        );

        $where = array(
            'telp' => $this->input->post('telp')
        );
        $this->db->update('user', $data, $where);
    }

    public function updateUser()
    {
        $telp = $this->input->post('telp');
        $this->db->from('user')->where('telp', $telp);
        $user = $this->db->get()->row();

        $data = [
            'user_id'           => $user->user_id,
            'username'          => $user->username,
            'password'          => $user->password,
            'address'           => $this->input->post('store_address'),
            'level'             => 'AdminShop',
            'telp'              => $user->telp,
        ];
        $b = $this->session->set_userdata($data);
    }
}
