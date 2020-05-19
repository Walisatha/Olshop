<?php

class Dashboard extends CI_Controller{
    
    public function index()
    {
        $data = array('title' => 'GHINAJ SHOP',
                        'isi' => 'dashboard' );
        $this->load->view('templates/wrapper', $data);
    }
}

?>