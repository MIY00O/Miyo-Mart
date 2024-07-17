<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BackProduct extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('User_model');
        is_logged_in();
        is_admin();
        $this->load->library('upload');
        $this->load->helper('file');
        $this->load->database();
    }
    public function index()
    {
        $usertoko = $this->User_model->store();

        $data = array(
            'usertoko'  => $usertoko,
            'title'     => "Seller Dashboard | ",
        );
        $this->template->load('backend/template/_template', 'backend/pages/backproduct', $data);
    }

    public function plus()
    {
        $this->db->select('user.*, store.store_name');
        $this->db->from('user');
        $this->db->join('store', 'user.telp = store.telp', 'left');
        $usertoko = $this->db->get()->result_array();

        $this->load->library('upload');
        $config['upload_path'] = 'assets/my-assets/upload/photo';
        $config['max_size'] = 1024 * 1024;
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;

        $photo_fields = ['picture1', 'picture2', 'picture3', 'picture4'];

        $uploaded_photos = [];

        foreach ($photo_fields as $index => $field) {
            if (isset($_FILES[$field]) && $_FILES[$field]['size'] > 0) {
                $time = date('YmdHis') . ($index + 1) . '.jpg';
                $config['file_name'] = $time;
                $this->upload->initialize($config);

                if ($_FILES[$field]['size'] >= 10 * 1024 * 1024) {
                    redirect('Backend/poduct');
                }

                if (!$this->upload->do_upload($field)) {
                    $error = array('error' => $this->upload->display_errors());

                    redirect('backend/backproduct/list');
                } else {
                    $uploaded_photos[$field] = $time;
                }
            }
        }
        $data = array(
            'telp'            => $this->input->post('telp'),
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

        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>Yeah! Berhasil menyimpan konten!
        </div>');
        redirect('backend/backproduct/list');
    }

    public function edit()
    {
        $this->load->library('upload');
        $config['upload_path'] = 'assets/my-assets/upload/photo';
        $config['max_size'] = 1024 * 1024;
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;

        // Ambil data produk yang akan diupdate
        $product_id = $this->input->post('product_id');
        $product = $this->db->get_where('product', array('product_id' => $product_id))->row_array();

        $photo_fields = ['picture1', 'picture2', 'picture3', 'picture4'];
        $uploaded_photos = [];

        foreach ($photo_fields as $index => $field) {
            if (isset($_FILES[$field]) && $_FILES[$field]['size'] > 0) {
                // Pastikan file diupload
                $time = date('YmdHis') . ($index + 1) . '.jpg';
                $config['file_name'] = $time;
                $this->upload->initialize($config);

                if ($_FILES[$field]['size'] >= 10 * 1024 * 1024) {
                    $this->session->set_flashdata('error', 'Ukuran file terlalu besar. Maksimum 10MB.');
                    redirect('backend/backproduct/list');
                    return;
                }

                if (!$this->upload->do_upload($field)) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error', 'Gagal mengupload gambar');
                    redirect('backend/backproduct/list');
                    return;
                } else {
                    // Hapus foto lama jika ada
                    $old_photo_path = $config['upload_path'] . '/' . $product[$field];
                    if (file_exists($old_photo_path)) {
                        unlink($old_photo_path);
                    }
                    // Tambahkan foto yang diunggah ke array
                    $uploaded_photos[$field] = $time;
                }
            } else {
                // Pertahankan foto lama jika tidak ada foto baru yang diunggah
                $uploaded_photos[$field] = $product[$field];
            }
        }
        $this->db->from('product');
        $this->db->where('name', $this->input->post('name'));
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('error', 'Nama product sudah digunakan');
            redirect('Backend/BackProduct/list');
        } else {
            $data = array(
                'description'           => $this->input->post('description'),
                'picture1'              => $uploaded_photos['picture1'],
                'picture2'              => $uploaded_photos['picture2'],
                'picture3'              => $uploaded_photos['picture3'],
                'picture4'              => $uploaded_photos['picture4'],
                'stock'                 => $this->input->post('stock'),
                'condition_product'     => $this->input->post('condition_product'),
                'preorder'              => $this->input->post('preorder'),
                'price'                 => $this->input->post('price'),
            );
            $this->db->where('product_id', $product_id);
            $this->db->update('product', $data);
            $this->session->set_flashdata('success', 'Berhasil mengupdate gambar');
            redirect('backend/backproduct/list');
        }
    }

    public function delete($id)
    {
        $product_id = $this->input->post('product_id');
        $product = $this->db->get_where('product', array('product_id' => $product_id))->row_array();

        if ($product) {
            // Hapus gambar pertama
            $filename1 = FCPATH . 'assets/my-assets/upload/photo/' . $product['picture1'];
            if (file_exists($filename1)) {
                unlink($filename1);
            }

            // Hapus gambar kedua jika ada
            if (!empty($product['picture2'])) {
                $filename2 = FCPATH . 'assets/my-assets/upload/photo/' . $product['picture2'];
                if (file_exists($filename2)) {
                    unlink($filename2);
                }
            }

            // Hapus gambar ketiga jika ada
            if (!empty($product['picture3'])) {
                $filename3 = FCPATH . 'assets/my-assets/upload/photo/' . $product['picture3'];
                if (file_exists($filename3)) {
                    unlink($filename3);
                }
            }

            // Hapus gambar keempat jika ada
            if (!empty($product['picture4'])) {
                $filename4 = FCPATH . 'assets/my-assets/upload/photo/' . $product['picture4'];
                if (file_exists($filename4)) {
                    unlink($filename4);
                }
            }

            // Hapus data produk dari database
            $this->db->delete('product', array('product_id' => $product_id));

            redirect('Backend/BackProduct/List');
        } else {
            // Jika produk tidak ditemukan, kembali ke halaman daftar produk
            redirect('Backend/BackProduct/List');
        }
    }

    public function List()
    {
        $usertoko = $this->User_model->store();

        $user_telp = $this->session->userdata('telp');

        $this->db->select('store.*, product.*');
        $this->db->from('store');
        $this->db->join('user', 'store.telp = user.telp');
        $this->db->join('product', 'store.telp = product.telp');
        $this->db->where('user.telp', $user_telp);
        $this->db->order_by('product_id', 'DESC');

        $product = $this->db->get()->result_array();

        $data = array(
            'usertoko'  => $usertoko,
            'product'  => $product,
            'title'     => "Seller Produk List | ",
        );
        $this->template->load('backend/template/_template', 'backend/pages/backlistproduct', $data);
    }
}
