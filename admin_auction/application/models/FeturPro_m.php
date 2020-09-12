<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FeturPro_m  extends CI_Model {
	
	public function getAutoData()
	{
		
		return  $q=$this->db->get('feature_product')->result();
	//print_r($q);die;
	}
	function getbrand_for_id()
	{
				return  $q=$this->db->get('brand')->result();

	}
	public function addfeature_pro($data)
	{
		$this->db->insert('feature_product',$data);
	}
	public function delete_feature_prod($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('feature_product');
	}
	public function editfeature_pro($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('feature_product',$data);
	}
	public function view_pro_by_id($id)
	{
		return $this->db->get_where('feature_product',array('id'=>$id))->row();
	}
	
		// $this->db->select('feature_product.id,feature_product.feature_product,brand.id');
		// $this->db->from('feature_product');
		// $this->db->join('brand','feature_product.product_id=brand.id','inner');
		// return $this->db->get()->result();
}
?>