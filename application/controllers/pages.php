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
		$data['title'] = $this->input->post('title');
		$data['picture'] = $this->input->post('picture');
		$data['details'] = $this->input->post('details');

		$this->model_news->insertNews($data);

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
		$this->load->database();
		$this->load->model('model_news');

		$data['users'] = $this->model_news->getUsers();

		$this->load->view('header', $data);
		$this->load->view('addNews', $data);
		$this->load->view('footer', $data);	
	}

	public function readMore() {
		$this->load->view('header');
		$this->load->view('readMore');
		$this->load->view('footer');	
	}
	public function site_statistics(){
		$data_users = array(
			"value" => $this->statistics->countUsers(),
			"date"  => date('y-m-d')
		);

		$data_students = array(
			"value" => $this->statistics->countStudents(),
			"date"  => date('y-m-d')
		);

		$data_faculty = array(
			"value" => $this->statistics->countFaculty(),
			"date"  => date('y-m-d')
		);

		$data_news = array(
			"value" => $this->statistics->countNews(),
			"date"  => date('y-m-d')
		);		

		$data = array(
			'users'    => $data_users,
			'students' => $data_students,
			'faculty'  => $data_faculty,
			'news'     => $data_news,
		);

		$this->load->view('statistics', $data);
		$this->statistics->insertUsersStats($data_users);
		$this->statistics->insertStudStats($data_students);
		$this->statistics->insertFacultyStats($data_faculty);
		$this->statistics->insertNewsStats($data_news);	
	}
}
