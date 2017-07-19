<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model {
	
	public $id;
	public $username;
	public $email;
	public $avatar;
	public $title;
	public $gender;
	public $dob;
	public $location;
	public $occupation;
	public $homepage;
	public $aka;
	public $role;
	public $created;
	public $vcash;
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function Contact($user_id)
	{
		$this->id = $user_id;
		return $this->getContact();
	}
	
	public function getContact()
	{
		$this->db->select('c.username, c.email, c.avatar, c.title, g.gender_name, c.dob, c.location, c.occupation, c.homepage, c.aka, r.role_name, c.created, c.vcash');
		$this->db->from("contact c");
		$this->db->join("gender g", "c.gender = g.gender_id", "left");
		$this->db->join("role r", "c.role = r.role_id", "left");
		$this->db->where(array("id"=>$this->id));
		$query = $this->db->get();		
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{				
				$this->username = $row->username;
				$this->email = $row->email;
				$this->avatar = $row->avatar;
				$this->title = $row->title;
				$this->gender = $row->gender_name;
				$this->dob = date("m/d/Y", strtotime($row->dob));
				$this->location = $row->location;
				$this->occupation = $row->occupation;
				$this->homepage = $row->homepage;
				$this->aka = $row->aka;
				$this->role = $row->role_name;
				$this->created = date("m/d/Y", strtotime($row->created));
				$this->vcash = $row->vcash;
			}			
			return $this;
		}
		else
		{
			return false;
		}		
	}
}