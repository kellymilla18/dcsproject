<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function index() {
		redirect(base_url('index.php/pages/home'));
	}

	public function home() {
		$this->load->view('home');
	}
}
