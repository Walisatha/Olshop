<?php

class Dashboard_admin extends CI_Controller{

    // Halaman Dashboard Admin
    public function index()
    {
        $data = array('title' => 'Dashboard Admin',
                        'isi' => 'admin/dashboard');
        $this->load->view('templates_admin/wrapper', $data);
    }
}