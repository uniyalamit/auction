<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_m extends CI_Model 
{

	function add_user($result)
	{
		//echo '<pre>';
		//print_r ($result);die;
		return $this->db->insert('users',$result);
	}
	function get_all_user()
	{
		return $this->db->get('users')->result();
	}
	function delete_users($id)
	{
		$this->db->where('user_id',$id);
		$this->db->delete('users');
	}
	function get_user_by_id($id)
	{
		return $this->db->get_where('users',array('user_id'=>$id))->row();
	}
	function editUser($id,$result)
	{
		$this->db->where('user_id',$id);
		$this->db->update('users',$result);
		//print_r($q);die;
	}
	function view_group()
	{
		return $this->db->get('add_group')->result();
	}
	public function get_email($a)
	{
		$this->db->where('email',$a);
		return $this->db->get('users')->result();
	}
	public function getCountryList()
	{
		return	$q=$this->db->get('countries')->result();
		//print_r($q);die;
	}
	public function getstateRecored($id)
	{
		return $this->db->get_where('states',array('country_id'=>$id))->result();
	}
	public function getstate()
	{
		return $this->db->get('states')->result();
	}
	public function getcityRecored($id)
	{
		 return $this->db->get_where('cities',array('state_id'=>$id))->result();
	}

}
?>
