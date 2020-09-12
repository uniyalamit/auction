<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_m  extends CI_Model {
	
	public function insert_brand($brandAdd)
	{
		$p=$this->db->insert('brand',$brandAdd);
	}
	public function getBrand()
	{
		return $this->db->get('brand')->result();
	}
	public function delete_brand($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('brand');
	}
	public function get_brand_by_id($id)
	{
		return $this->db->get_where('brand',array('id'=>$id))->row();
	}
	public function edit_brand($brandAdd,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('brand',$brandAdd);
	}
	public function get_uniq($brand)
	{
		$this->db->where('brand_name',$brand);
		return $this->db->get('brand')->result();
	}
	}
	?>