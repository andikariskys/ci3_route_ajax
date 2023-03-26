<?php

use LDAP\Result;

    class Mymod extends CI_Model
    {
        public function get_data()
        {
            return $this->db->get('daftar_menu')->result();
        }

        public function save_data($data_menu)
        {
            $this->db->insert('daftar_menu', $data_menu);
        }

        public function delete_data($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('daftar_menu');
        }
    }
    

?>