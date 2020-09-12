<?php
class Return_reasons_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function add_return_reasons($data)
	{
		$this->db->insert('tbl_return_reasons',$data);
	}
	function getreasonsdata()
	{
		return $this->db->get('tbl_return_reasons')->result();
	}
	function del_return_reasons($id)
	{
				 //print_r($id);die;

		$this->db->where('return_reasons_id',$id);
		$this->db->delete('tbl_return_reasons');
	}
	public function delete_allreasonsrec($id)
	{
		$this->db->where('return_reasons_id',$id);
		$this->db->delete('tbl_return_reasons');
	}
	function getdatabyId($id)
	{
		return $this->db->get_where('tbl_return_reasons',array('return_reasons_id'=>$id))->row();
	}
	function updt_return_reasons($data,$id)
	{
		$this->db->where('return_reasons_id',$id);
		$this->db->update('tbl_return_reasons',$data);
	}
}
?>