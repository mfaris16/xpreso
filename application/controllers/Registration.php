<?php
class Registration extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_reg');
		$this->load->library('form_validation');
	}
	public function index()
	{
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
		$data['biaya'] = $this->M_reg->biaya(); 
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
		$this->load->view('registration',$data);
		}else{
			$this->M_reg->daftar();
			redirect(base_url(),'refresh');
		}


	}
}






