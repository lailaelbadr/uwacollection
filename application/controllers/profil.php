<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Produk_model');
        $this->load->model('Keranjang_model');
    }

    public function index()
    {
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail Produk";
        $data['user'] = $this->userrole->getBy();
        $data['produk'] = $this->Produk_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/header", $data);
        $this->load->view("profil/dashboard", $data);
        $this->load->view("layout/footer", $data);
    }

    public function produk()
    {
        $data['judul'] = "Halaman produk";
        $data['user'] = $this->userrole->getBy();
        $data['produk'] = $this->Produk_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header', $data);
        $this->load->view('profil/vw_produk', $data);
        $this->load->view('layout/footer', $data);
    }

    public function detailproduk($id)
    {
        //$data['judul'] = "Halaman produk";
        //$data['user'] = $this->userrole->getBy();
        $data['produk'] = $this->Produk_model->getById($id);
        //$data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header', $data);
        $this->load->view('profil/detail_produk', $data);
        $this->load->view('layout/footer', $data);
    }

    public function detail()
    {
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail keranjang";
        $data['user'] = $this->userrole->getBy();
        $data['produk'] = $this->Produk_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header', $data);
        $this->load->view('profil/detail_keranjang', $data);
        $this->load->view('layout/footer', $data);
    }

    public function keranjang($id)
    {
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail Produk";
        $data['user'] = $this->userrole->getBy();
        $data['produk'] = $this->Produk_model->getById($id);
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required', [
            'required' => 'Jumlah wajib diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('profil/detail_produk', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $data = [
                'id_user' => $this->session->userdata('id'),
                'id_produk' => $this->input->post('id'),
                'jumlah' => $this->input->post('jumlah'),
                'total' => $this->input->post('total'),
                'tanggal' => $this->input->post('tanggal')
            ];
            $this->Keranjang_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert">Produk berhasil ditambahkan ke keranjang!</div>');
            redirect('Profil/detail');
        }
    }

    public function delkeranjang($id)
    {
        $this->Keranjang_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">
        Data Berhasil dihapus dari keranjang</div>');
        redirect('Profil/detail');
    }

    public function checkout()
    {
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail keranjang";
        $data['user'] = $this->userrole->getBy();
        $data['produk'] = $this->Produk_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header', $data);
        $this->load->view('profil/checkout', $data);
        $this->load->view('layout/footer', $data);
    }

    public function pesanan()
    {
        $jumlah_beli = count($this->input->post('produk'));
        $data_p = [
            'no_penjualan' => $this->input->post('no_penjualan'),
            'id_user' => $this->session->userdata('id'),
            'tanggal' => $this->input->post('tanggal'),
            'total_bayar' => $this->input->post('bayar'),
            'alamat' => $this->input->post('alamat'),
            'pembayaran' => $this->input->post('pembayaran'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/pembayaran/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data_detail = [];
        for ($i = 0; $i < $jumlah_beli; $i++) {
            array_push($data_detail, ['id' => $this->input->post('produk')[$i]]);
            $data_detail[$i]['no_penjualan'] = $this->input->post('no_penjualan');
            $data_detail[$i]['id_user'] = $this->session->userdata('id');
            $data_detail[$i]['jumlah'] = $this->input->post('jumlah_p')[$i];
            $data_detail[$i]['total'] = $this->input->post('total_p')[$i];
        }
        if ($this->Penjualan_model->insert($data_p, $upload_image) && $this->Detail_model->insert($data_detail)) {
            for ($i = 0; $i < $jumlah_beli; $i++) {
                $this->Produk_model->min_stok($data_detail[$i]['jumlah'], $data_detail[$i]['id']) or die('gagal min stok');
            }
            $id_us = $this->session->userdata('id');
            $this->Keranjang_model->deleteall($id_us);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Berhasil dibuat!</div>');
            redirect('Profil/produk');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Gagal dibuat!</div>');
            redirect('Profil/produk');
        }
    }
}
