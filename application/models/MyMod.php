<?php

use LDAP\Result;

    class Mymod extends CI_Model
    {
        public function get_data()
        {
            return $this->db->get('daftar_menu')->result();
        }
    }
    

?>