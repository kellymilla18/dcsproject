<?php

class Statistics extends CI_Model{

	public function countUsers(){
	 	return $this->db->count_all('users');
	}

	public function countStudents(){
		return $this->db->count_all('students');
	}

	public function countFaculty(){
		return $this->db->count_all('faculty');
	}

	public function countNews(){
		return $this->db->count_all('news');	
	}

	public function insertUsersStats($data){
		$this->db->insert('users_statistics', $data);
	}

	public function insertStudStats($data){
		$this->db->insert('students_statistics', $data);
	}

	public function insertFacultyStats($data){
		$this->db->insert('faculty_statistics', $data);
	}
	
	public function insertNewsStats($data){
		$this->db->insert('news_statistics', $data);
	}

	// public function addContact($data){
	// 	$this->db->insert('contact', $data);
	// 	return ($this->db->affected_rows()!=1) ? false : true;
	// }
	
	// public function getAbout(){
	// 	$query = $this->db->get('about');
	// 	$row = $query->row_array();
	// 	return $row;
	// }
	
	// public function getContact(){
	// 	$query = $this->db->get('contact');
	// 	$row = $query->result_array();
	// 	return $row;
	// }

	// public function countContact(){
	// 	return $this->db->count_all('contact');
	// }

	// public function update($data){
	// 	$this->db->update('about', $data);
	// 	return ($this->db->affected_rows()!=1) ? false : true;
	// }

	// public function updateCont($id, $data){
	// 	$this->db->where('contact_id', $id);
	// 	$this->db->update('contact', $data);
	// 	return ($this->db->affected_rows()!=1) ? false : true;
	// }
}
