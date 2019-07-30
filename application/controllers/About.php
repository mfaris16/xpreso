<?php
class About extends CI_Controller{
	public function index()
	{
		$data['title'] = 'XPRESO - About';
		$this->load->view('templates/header',$data);
		$this->load->view('page-about',$data);
	}
}
