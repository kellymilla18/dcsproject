<?php
	class  model_news extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function getUsers(){
			$query = $this->db->query('SELECT * FROM users WHERE user_id = 8');

			if($query->num_rows() > 0)
				return $query->result();
			else
				return null;
		}

		function insertNews($data){
			$query = 
		}
	}
?>