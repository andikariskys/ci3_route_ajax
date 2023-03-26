<?php

    class Mycon extends CI_Controller
    {
        public function index()
        {
            $this->load->view('onepage');
        }

        public function ambil_data()
        {
            $data['data_menu'] = $this->mymod->get_data();
            // var_dump($data);
            $this->load->view('daftar_menu', $data);
        }
    }

?>