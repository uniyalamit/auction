<?php
class Shipping_m extends CI_Model
{
	
	
	public function getCountryList()
	{
		return	$q=$this->db->get('countries')->result();
		//print_r($q);die;
	}
	function addshipping($result)
	{
		return $this->db->insert('tbl_shipping',$result);
	}
	public function Shipping_method($result)
	{
		//echo'<pre>';
		//print_r ($a);die;
		$this->db->select('*');
		//$where="Shipping_method_name='".$a."'";
		//$where="country_id='".$b."'";
	 	  
	  $where="shipping_method_name='".$result['shipping_method_name']."' And country_id='".$result['country_id']."'";
	  $this->db->where($where);
	  $query=$this->db->get('tbl_shipping');
	  return $query->result();
	}
	public function view_alldata()
	{
		return $this->db->get('tbl_shipping')->result();
	}
	public function getdatabyId($id)
	{
		return $this->db->get_where('tbl_shipping',array('shipping_id'=>$id))->row();
	}
	function updt_shipping($data,$id)
	{
		$this->db->where('shipping_id',$id);
		$this->db->update('tbl_shipping',$data);
	}
	function del_shipping($id)
	{
		$this->db->where('shipping_id',$id);
		$this->db->delete('tbl_shipping');
	}
	public function delete_allshippingrec($id)
	{
		$this->db->where('shipping_id',$id);
		$this->db->delete('tbl_shipping');
	}
	public function fetch_order_record()
	{
		return $this->db->get('tbl_order')->result();
	}
	public function shipping_date($from_date,$to_date)
	{
		//echo ($from_date);die;
		//$this->db->where('apply_date', $from_date);
		$this->db->where('apply_date BETWEEN "'. date('Y-m-d', strtotime($from_date)). '" and "'. date('Y-m-d', strtotime($to_date)).'"');
		return $this->db->get('tbl_order')->result();
	}
	public function fetch_prod_name()
	{
		$this->db->select("tbl_product.product_name,tbl_product_details.minimum_stock_qty");
		$this->db->from('tbl_product');
		$this->db->join('tbl_product_details', 'tbl_product.product_id = tbl_product_details.product_id');
		$query = $this->db->get();

		if($query->num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
		
	
}
?>