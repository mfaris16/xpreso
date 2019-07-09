<?php
class Information extends CI_Controller{

        public function index()
        {
			$data['title'] = 'XPRESO - Information';
            $this->load->view('information',$data);
        }
}
