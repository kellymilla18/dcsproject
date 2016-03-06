<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function index() {
		redirect(base_url('index.php/pages/home'));
	}

	public function home() {
		$this->load->view('home');
	}

	public function login() {
		$this->load->view('login');
	}

	public function events() {
		$this->load->view('header');
		$this->load->view('events');
		$this->load->view('footer');
	}


	public function eventlist() {
		$this->load->view('header');
		$this->load->view('eventlist');
		$this->load->view('footer');
	}

	public function calendar() {
		$this->load->view('header');
		$this->load->view('calendar');
		$this->load->view('footer');
	}

	public function news(){
		$this->load->view('header');
		$this->load->view('news');
		$this->load->view('footer');
	}

	public function addevent() {
		$this->load->view('header');
		$this->load->view('addevent');
		$this->load->view('footer');
	}

	public function addNews() {
		$this->load->view('header');
		$this->load->view('addNews');
		$this->load->view('footer');	
	}
	public function site_statistics(){
		$data = array(
			"value" => $this->statistics->countUsers(),
			"date"  => date('y-m-d')
		);
		$this->load->view('statistics', $data);
		$this->statistics->insertStats($data);
	}
}
