<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_m extends CI_Model {
	
	///////login admin
	public function get_lg_data($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get('users')->row();
	}
	}
	?>