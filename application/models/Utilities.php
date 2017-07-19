<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilities extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();		
	}
	
	public function clean($str)
	{
		return mysqli_real_escape_string($this->db->conn_id, trim($str));
	}
	
	public function output($str)
	{
		return htmlspecialchars($str);
	}
	
	public function json($array)
	{
		echo json_encode($array);
	}
	
	public function authenticate($un, $pw)
	{		
		$this->db->select("id");
		$this->db->from("contact");
		$this->db->where(array("username"=>$un, "password"=>$pw));
		$query = $this->db->get();
		if($query->num_rows() == 1)
		{			
			$this->session->logged_in_user_id = (int) $query->result()[0]->id;
			return true;
		}
		
		return false;
	}
}
