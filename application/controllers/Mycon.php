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

        public function simpan_data()
        {
            $data = $this->db->query("SELECT uuid() as id")->result_array();
            // var_dump($data[0]["id"]);

            $id = $data[0]["id"];
            $nama = $this->input->post('nama');
            $jenis = $this->input->post('jenis');
            $harga = $this->input->post('harga');

            $data_menu = array(
                'id' => $id, 
                'nama' => $nama,
                'jenis' => $jenis,
                'harga' => $harga
            );

            $this->mymod->save_data($data_menu);
        }
    }

?>