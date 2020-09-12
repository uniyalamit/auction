<?php
class Return_status_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function add_return_Status($data)
	{
		$this->db->insert('tbl_return_status',$data);
	}
	function getreturndata()
	{
		return $this->db->get('tbl_return_status')->result();
	}
	function del_return_status($id)
	{
				 // print_r($id);die;

		$this->db->where('return_status_id',$id);
		$this->db->delete('tbl_return_status');
	}
	function getdatabyId($id)
	{
		return $this->db->get_where('tbl_return_status',array('return_status_id'=>$id))->row();
	}
	function updt_return_status($data,$id)
	{
		$this->db->where('return_status_id',$id);
		$this->db->update('tbl_return_status',$data);
	}
}
?>