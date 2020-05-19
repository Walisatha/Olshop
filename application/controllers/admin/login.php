<?php

class login extends CI_Controller{

    // Halaman Login
    public function index()
    {
        $data = array('title' => 'Login Admin');
        $this->load->view('admin/login', $data);
    }
}