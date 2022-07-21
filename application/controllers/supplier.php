<?php
defined('BASEPATH') or exit('No direct script access allowed');

class supplier extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Supplier_model');
    }

    public function index()
    {
        $data['supplier'] = $this->Supplier_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header_admin");
        $this->load->view("supplier/vw_supplier", $data);
        $this->load->view("layout/footer");
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Supplier";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['supplier'] = $this->Supplier_model->get();
        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required', [
            'required' => 'Nama Barang Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Stok Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_telp', 'No Telephone', 'required', [
            'required' => 'Warna Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("supplier/vw_tambah_supplier", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_supplier' => $this->input->post('nama_supplier'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
            ];
            $this->Supplier_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
            Supplier Berhasil Ditambah!</div>');
            redirect('supplier');
        }
    }

    public function hapus($id)
    {
        $this->Supplier_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle">
            </i>Data Supplier tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle">
            </i>Data Supplier Berhasil Dihapus!</div>');
        }
        redirect('supplier');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Supplier";
        $data['supplier'] = $this->Supplier_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required', [
            'required' => 'Nama Supplier Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_telp', 'No Telephone', 'required', [
            'required' => 'No Telephone Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("supplier/vw_ubah_supplier", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_supplier' => $this->input->post('nama_supplier'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
            ];
            $id = $this->input->post('id');
            $this->Supplier_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
            role="alert">Data Supplier Berhasil DiUbah!</div>');
            redirect('supplier');
        }
    }
}
