<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function data()
    {
        return $this->db->get('registration')->result_array();
    }

}

/* End of file M_admin.php */
