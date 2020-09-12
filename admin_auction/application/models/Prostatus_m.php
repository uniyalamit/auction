<?php
class Prostatus_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function addStatus($data)
	{
		$this->db->insert('order_status',$data);
	}
	function getdata()
	{
		return $this->db->get('order_status')->result();
	}
	function dlt_status($id)
	{
				 // print_r($id);die;

		$this->db->where('order_status_id',$id);
		$this->db->delete('order_status');
	}
	function getdatabyId($id)
	{
		return $this->db->get_where('order_status',array('order_status_id'=>$id))->row();
	}
	function updtStatus($data,$id)
	{
		$this->db->where('order_status_id',$id);
		$this->db->update('order_status',$data);
	}
}
?>