<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currency_m extends CI_Model 
{

	public function currency_detail($data)
	{
	  return $this->db->insert('tbl_currency',$data);
	}
	public function currency_name($a)
	{
      $this->db->select('*');
	  $where="currency_name='".$a."'";
	  $this->db->where($where);
	  $query=$this->db->get('tbl_currency');
	  return $query->result();
	}	
	public function currency_iso($b)
	{
      $this->db->select('*');
	  $where="currency_iso='".$b."'";
	  $this->db->where($where);
	  $query=$this->db->get('tbl_currency');
	  return $query->result();
	}	
	public function fetch_currency_data()
	{
		return $this->db->get('tbl_currency')->result();
	}
	public function fetch_currencyrecord($id)
	{
		return $this->db->get_where('tbl_currency',array('currency_id'=>$id))->row();
	}
	public function update_currencyrec($id,$data)
	{
		
		$this->db->where('currency_id',$id);
		$this->db->update('tbl_currency',$data);
	}
	public function delete_currencyid($id)
	{
		$this->db->where('currency_id',$id);
		$this->db->where('default_currency',0);
		$this->db->delete('tbl_currency');
	}
	public function delete_allcurrenyrec($id)
	{
		$this->db->where('default_currency',0);
		$this->db->where('currency_id',$id);
		$this->db->delete('tbl_currency');
	}
	public function value_currency()
	{
      $this->db->select('*');
	  $this->db->where('default_currency',1);
	  $query=$this->db->get('tbl_currency');
	  return $query->result();
	}
	public function value_other()
	{
      $this->db->select('*');
	  $this->db->where('default_currency',0);
	  $query=$this->db->get('tbl_currency');
	  return $query->result();
	}
	public function insert_value($data,$id)
	{ 
			$cou = count($data);
			for($i = 0; $i<$cou-1; $i++)
			{
				$this->db->select('*');
				$where="default_currency_id='".$data['default_currency_id'][$i]."' and related_currency_id='".$data['related_currency_id'][$i]."'";
				$this->db->where($where);
				$query=$this->db->get('tbl_currency_value');
				$count=count($query->result());
				if($count<1)
				{
				$entries = array(
				'default_currency_id'=>$data['default_currency_id'][$i],
				'related_currency_id'=>$data['related_currency_id'][$i],
				'currency_value'=>$data['currency_value'][$i],
				);
				
				$this->db->insert('tbl_currency_value', $entries);
			}
			else
			{
				$where="default_currency_id='".$data['default_currency_id'][$i]."' and related_currency_id='".$data['related_currency_id'][$i]."'";
				$this->db->where($where);
				$entries = array(
				'default_currency_id'=>$data['default_currency_id'][$i],
				'related_currency_id'=>$data['related_currency_id'][$i],
				'currency_value'=>$data['currency_value'][$i],
				);
				$this->db->update('tbl_currency_value', $entries);
				
			}
				
		}
			
			
	}
	
	public function check_all_id()
	{
      $this->db->select('*');
	  $query=$this->db->get('tbl_currency_value');
	  return $query->result();
	}
	public function delete_value($id)
	{
		//echo '<pre>';
		//print_r ($id);die;
		$this->db->where('related_currency_id',$id);
		return $this->db->delete('tbl_currency_value');
	}
	public function delete_allcurrenyvalue($id)
	{
		$this->db->where('related_currency_id',$id);
		return $this->db->delete('tbl_currency_value');
	}
				

}
?>