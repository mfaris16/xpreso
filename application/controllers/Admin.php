<?php
class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
        if ($this->form_validation->run()==true) {
        $this->m_admin->login();
        redirect(base_url());
    }else{
        $this->load->view('login-page');
    }
}
    public function page()
    {
        $this->load->view('admin');
    }
}