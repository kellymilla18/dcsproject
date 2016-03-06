<?php

class Statistics extends CI_Model{

	public function countUsers(){
	 	return $this->db->count_all('users');
	}

	public function insertStats($data){
		$this->db->insert('users', $data);
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
