<?php
class Stock_report_m extends CI_Model
{
	public function fetch_prod_name()
	{
		$this->db->select("tbl_product.product_name,tbl_product_details.quantity");
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