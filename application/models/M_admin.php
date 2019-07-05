<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function data()
    {
        return $this->db->get('registration')->result_array();
    }
    public function insert()
    {

    }
    public function update()
    {

    }
    public function delete()
    {
        
    } 

}

/* End of file M_admin.php */
