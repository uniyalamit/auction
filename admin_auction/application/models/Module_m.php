<?php

class Module_m extends CI_Model
{
	public function get_user()
    {
    	return $this->db->get('add_group')->result();
    }
	public 	function add_module($data)
	{
		$this->db->insert('user_module',$data);
	}
	public function get_all_module()
	{
		return $this->db->get('user_module')->result();
	}
	public function view_module_by_id($id)
	{
		return $this->db->get_where('user_module',array('id'=>$id))->row();
	}
	function editModule($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('user_module',$data);
	}
	function deleteModule($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('user_module');
	}
	
}?>