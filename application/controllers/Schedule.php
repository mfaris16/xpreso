<?php
class Schedule extends CI_Controller {
	public function index()
	{
		$data['title'] = 'XPRESO - Schedule';
		$this->load->view('schedule');
	}
}
