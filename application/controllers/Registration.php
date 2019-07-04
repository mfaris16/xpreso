<?php
class Registration extends CI_Controller{
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
		$this->load->view('registration',$data);
	}
}






