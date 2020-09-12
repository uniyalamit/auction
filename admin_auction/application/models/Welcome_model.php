<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {
	
	public function add_Taxt_Calss($data)
	{
		$this->db->insert('tax_class',$data);
	}
	function get_all_class ()
	{
		return $this->db->get('tax_class')->result();
	}
	function add_tax_persent($addData)
	{
		$this->db->insert('tax_class_percent',$addData);
	}
	function get_all_Tax_persent()
	{
		return $this->db->get('tax_class')->result();
	}
	function get_tax_report()
	{
		return $this->db->get('demo')->result();
	}
	function get_report_data($from,$to)
	{
		//$data=12;
/*		$this->db->select('*');
		$this->db->from('demo');
		$this->db->where('tax_date',$from);
		return $this->db->get()->result();*/
		//$this->db->where('tax_date >=', $from);
       $this->db->where('tax_date BETWEEN "'. date('Y-m-d', strtotime($from)). '" and "'. date('Y-m-d', strtotime($to)).'"');
        return $this->db->get('demo')->result();
		//$query = $this->db->query($sql);
	}
	function search_data($s)
	{

		$this->db->select('tax_name');
$this->db->from('tax_class');
$this->db->like('tax_name', $s);
return $this->db->get()->result();
	}
	function get_persents()
	{
		return $this->db->get('tax_class_percent')->result();
	}
	function delete_class($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tax_class');
	}function delete_per($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tax_class_percent');
	}
	function get_per_by_id($id)
	{
		return $this->db->get_where('tax_class_percent',array('id'=>$id))->row();
	}
	function edit_persent($addData,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('tax_class_percent',$addData);
	}
	function get_class_by_id($id)
	{
		return $this->db->get_where('tax_class',array('id'=>$id))->row();

	}
	function edit_Taxt_Calss($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('tax_class',$data);	
	}
	function lookup($keyword)
	{
		$this->db->like('tax_name',$keyword );
		//$this->db->or_like('price',$search);
		 return  $data= $this->db->get('tax_class')->result();
		//print_r($data);die;
	}
	

}
?>