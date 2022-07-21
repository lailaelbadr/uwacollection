<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model');
    }

    public function index()
    {
        $data['user'] = $this->Pelanggan_model->get();
        $this->load->view("layout/header_admin");
        $this->load->view("pelanggan/view_pelanggan", $data);
        $this->load->view("layout/footer");
    }
}
