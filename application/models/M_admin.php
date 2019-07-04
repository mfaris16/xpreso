<?php
class M_admin extends CI_Model{

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users',['email'=>$email,'password'=>sha1($password)])->row_array();
    }
}
