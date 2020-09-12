<?php
class Stock_status_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function add_stock_status($data)
	{
		$this->db->insert('tbl_stock_status',$data);
	}
	function getstatusdata()
	{
		return $this->db->get('tbl_stock_status')->result();
	}
	function del_stock_status($id)
	{
				 //print_r($id);die;

		$this->db->where('stock_status_id',$id);
		$this->db->delete('tbl_stock_status');
	}
	public function delete_allstockrec($id)
	{
		$this->db->where('stock_status_id',$id);
		$this->db->delete('tbl_stock_status');
	}
	function getdatabyId($id)
	{
		return $this->db->get_where('tbl_stock_status',array('stock_status_id'=>$id))->row();
	}
	function updt_stock_status($data,$id)
	{
		//print_r ($data);die;
		$this->db->where('stock_status_id',$id);
		$this->db->update('tbl_stock_status',$data);
	}
	
}
?>