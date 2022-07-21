<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Produk_model');
    }

    public function index()
    {
        $data['barang'] = $this->Produk_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header_admin");
        $this->load->view("barang/vw_barang", $data);
        $this->load->view("layout/footer");
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Produk_model->get();
        $this->form_validation->set_rules('nama_produk', 'Nama Barang', 'required', [
            'required' => 'Nama Barang Wajib di isi'
        ]);
        $this->form_validation->set_rules('kategori', 'kategori', 'required', [
            'required' => 'Stok Wajib di isi'
        ]);
        $this->form_validation->set_rules('warna', 'warna', 'required', [
            'required' => 'Warna Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'stok', 'required', [
            'required' => 'Stok Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required', [
            'required' => 'Harga Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header_admin", $data);
            $this->load->view("barang/vw_tambah_barang", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_produk' => $this->input->post('nama_produk'),
                'kategori' => $this->input->post('kategori'),
                'warna' => $this->input->post('warna'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/produk/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Produk_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
            Barang Berhasil Ditambah!</div>');
            redirect('barang');
        }
    }

    public function hapus($id)
    {
        $this->Produk_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle">
            </i>Data Barang tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle">
            </i>Data Barang Berhasil Dihapus!</div>');
        }
        redirect('barang');
    }
}
