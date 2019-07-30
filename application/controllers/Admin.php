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
		$data['title'] = 'Admin';
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
			$this->session->set_flashdata('msg', 'Username atau Password Salah');
			redirect('admin/login');
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
    public function tambah()
    {
		if($this->session->userdata('akses')!=1){
			redirect('admin/login');
			die;
		}
        $data['lomba']=[
			'Futsal (SMP)',
			'Futsal (SMA)',
			'Basket (SMP)',
			'Basket (SMA)',
			'Silat (SMA)',
			'E-Sport (SMP)',
			'E-Sport (SMA)',
			'E-Sport (Umum)',
			'Marawis (SMA)',
			'Solo Vocal (SMP)',
			'Solo Vocal (SMA)',
			'MHQ (SMP)',
			'Dakwah (SMP)',
			'Dakwah (SMA)',
			'English Debate (SMA)',
			'Storytelling (SMP)',
			'Cerdas Cermat Science and Religion (SMP)'
		];
		$data['laguL'] = [
			'Photograph', 'Arti Sahabat', 'Gajah'	
		];
		$data['laguP'] = [
			'Kejar Mimpi', 'Nyawa Dan Harapan', 'Hijrah Cinta', 'Fight Song'
		];
		$this->form_validation->set_rules('cName','Nama Lengkap','trim|required');
		$this->form_validation->set_rules('cEmail','Alamat Email','trim|required|valid_email');
		$this->form_validation->set_rules('cGender','Jenis Kelamin','trim|required');
		$this->form_validation->set_rules('cDateBirth','Tanggal Lahir','trim|required');
		$this->form_validation->set_rules('cAdress','Alamat','trim|required');
		$this->form_validation->set_rules('cPhone','No Telpon','trim|required|numeric');
		$this->form_validation->set_rules('cLomba','Mata lomba','trim|required');
		$this->form_validation->set_rules('cLagu','Lagu Pilihan','trim');
		$this->form_validation->set_rules('cAsal','Asal Sekolah','trim|required');
		$this->form_validation->set_rules('cNoSekolah','No Telp. Sekolah','trim|required|numeric');
		$this->form_validation->set_rules('cNamaPembina','Nama Pembina','trim|required');
		$this->form_validation->set_rules('cNoPembina','No Telp. Pembina','trim|required|numeric');

		if($this->form_validation->run()==false){
		$this->load->view('Create-page',$data);
		}else{
			$this->M_admin->insert();
			redirect('admin','refresh');
		}
    }
    public function edit($id)
    {
		if($this->session->userdata('akses')!=1){
			redirect('admin/login');
			}
        $data['getId'] = $this->M_admin->getById($id);
        $data['lomba']=[
			'Futsal (SMP)',
			'Futsal (SMA)',
			'Basket (SMP)',
			'Basket (SMA)',
			'Silat (SMA)',
			'E-Sport (SMP)',
			'E-Sport (SMA)',
			'E-Sport (Umum)',
			'Marawis (SMA)',
			'Solo Vocal (SMP)',
			'Solo Vocal (SMA)',
			'MHQ (SMP)',
			'Dakwah (SMP)',
			'Dakwah (SMA)',
			'English Debate (SMA)',
			'Storytelling (SMP)',
			'Cerdas Cermat Science and Religion (SMP)'
		];
		$data['laguL'] = [
			'Photograph', 'Arti Sahabat', 'Gajah'	
		];
		$this->form_validation->set_rules('cName','Nama Lengkap','trim|required');
		$this->form_validation->set_rules('cEmail','Alamat Email','trim|required|valid_email');
		$this->form_validation->set_rules('cGender','Jenis Kelamin','trim|required');
		$this->form_validation->set_rules('cDateBirth','Tanggal Lahir','trim|required');
		$this->form_validation->set_rules('cAdress','Alamat','trim|required');
		$this->form_validation->set_rules('cPhone','No Telpon','trim|required');
		$this->form_validation->set_rules('cLomba','Mata lomba','trim|required');
		$this->form_validation->set_rules('cLagu','Lagu Pilihan','trim');
		$this->form_validation->set_rules('cAsal','Asal Sekolah','trim|required');
		$this->form_validation->set_rules('cNoSekolah','No Telp. Sekolah','trim|required');
		$this->form_validation->set_rules('cNamaPembina','Nama Pembina','trim|required');
		$this->form_validation->set_rules('cNoPembina','No Telp. Pembina','trim|required');

		if($this->form_validation->run()==false){
		$this->load->view('update-page',$data);
		}else{
			$this->M_admin->update($id);
			redirect('','refresh');
		}
    }
    public function hapus($id)
    {
		if($this->session->userdata('akses')!=1){
						die;
			}
        $this->M_admin->delete($id);
        redirect('admin','refresh');
        
    }
}
