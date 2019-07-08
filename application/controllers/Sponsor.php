<?php
class Sponsor extends CI_Controller {
	public function index()
	{
		$data['title'] = 'XPRESO - Sponsor';
		$this->load->view('sponsor');
	}
}
