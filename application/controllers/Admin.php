<?php
class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_admin');
    }
    public function index()
    {
        $data['datas'] = $this->M_admin->data();
        if($this->session->userdata('masuk')==true){
            
            $this->load->view('admin-page',$data);
        }else{
            redirect('admin/login');
        }
        
    }
    public function login()
    {
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
        if ($this->form_validation->run()==true) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
    
            $user = $this->db->get_where('users',['email'=>$email,'password'=>sha1($password)]);
        if($user->num_rows() > 0){
            $data = $user->row_array();
            $data_session=[
                'username' => $data['username'],
                'masuk' => true,
                'akses' => $data['role_id']
            ];
            $this->session->set_userdata($data_session);
            redirect('admin');
        }else{
            redirect('');
        }
    }else{
        $this->load->view('login-page');
    }
    }
    public function keluar()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}