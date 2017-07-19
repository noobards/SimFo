<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();		
	}
	
	public function index()
	{
		$this->load->view("view_login");
	}
	
	public function authenticate()
	{
		$un = $this->Utilities->clean($this->input->post('un'));
		$pw = $this->Utilities->clean($this->input->post('pw'));
		
		if(strlen($un) == 0 || strlen($pw) == 0)
		{
			$this->Utilities->json(array('status'=>'NOTOK', 'msg'=>'Invalid username and/or password'));
			exit;
		}
		else
		{			
			if($this->Utilities->authenticate($un, sha1($pw)))
			{
				$this->Utilities->json(array('status'=>'OK', 'redirect'=>base_url()));
			}
			else
			{
				$this->Utilities->json(array('status'=>'NOTOK', 'msg'=>'Invalid username and/or password'));
			}
		}		
	}
}
