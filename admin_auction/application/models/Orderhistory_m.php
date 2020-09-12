
<?php
class Orderhistory_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	function view_status()
	{
		return $this->db->get('order_status')->result();
	}
	function insert_order_history($data)
	{
		$this->db->insert('order_history',$data);
	}
	function getOrder()
	{
		return $this->db->get('tbl_order')->result();
	}
	function viewOrder($id)
	{
		return $this->db->get_where('tbl_order',array('order_id'=>$id))->row();
	}
	function viewShip($id)
	{
		return $this->db->get_where('tbl_shipping',array('order_id'=>$id))->row();

	}
	function viewOrderProduct($id)
	{
		return $this->db->get_where('tbl_order_product',array('order_id'=>$id))->row();
	}
	function update_order($tbl,$arrdata,$id)
	{
		$this->db->where('order_id',$id);
		$this->db->update($tbl,$arrdata);
	}
	}
	?>