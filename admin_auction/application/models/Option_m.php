<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Option_m  extends CI_Model {
	
	public function get_option_name()
	{
		return $this->db->get('tbl_option')->result();
	}
	public function insert_optn($data)
	{
		$this->db->insert('tbl_option_value',$data);
	}
	public function view_val_tbl()
	{
		return 		$this->db->get('tbl_option_value')->result();

	}
	public function delete_tbl_val($id)
	{
		$this->db->where('option_val_id',$id);
		$this->db->delete('tbl_option_value');
	}
	public function view_tbl_val_by_id($id)
	{
		return $this->db->get_where('tbl_option_value',array('option_val_id'=>$id))->row();
	}
	public function edit_option_val($data,$id)
	{
		$this->db->where('option_val_id',$id);
		$this->db->update('tbl_option_value',$data);
	}
	}
	?>