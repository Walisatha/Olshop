<?php 

class user extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    // Data User
    public function index()
    {
        $user = $this->user_model->listing();
        
        $data = array(  'title' => 'Data Pengguna',
                        'user'  => $user,
                        'isi'   => 'admin/user/list');
        
        $this->load->view('templates_admin/wrapper', $data);
    }
    
    // Tambah User
    public function tambah()
    {
        $data = array(  'title' => 'Tambah Pengguna',
                        'isi'   => 'admin/user/tambah'
                    );
        
        $this->load->view('templates_admin/wrapper', $data);
    }
}