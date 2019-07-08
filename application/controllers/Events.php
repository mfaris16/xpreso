<?php
class Events extends CI_Controller{
	public function index()
	{
		$data['title'] = 'XPRESO - Events';
		$this->load->view('events',$data);
	}
}
