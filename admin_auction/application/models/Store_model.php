<?php


/**
 * 
 */
class Store_model extends CI_Model
{
	
	 public function insert_store_data($storedata,$data18)
     {
        $this->db->set('default_currency', 0);
       $this->db->update('tbl_currency');
       $this->db->set('default_currency', 1); //value that used to update column  
       $this->db->where('currency_iso', $data18); //which row want to upgrade  
       $this->db->update('tbl_currency');
       $this->db->where('store_id',$store_id);
       $result=$this->db->insert('store_information',$storedata);
     }
     public function get_store()
    {
      $data['all']=$this->db->get('store_information')->result();
      $data['curr']=$this->db->get('tbl_currency')->result();
      $result=array($data);
      return $result;
    }
     public function get_data()
    {
      $this->db->select('currency_iso');

      return $this->db->get('tbl_currency')->result();
    }
    public function update_store_data($storedata,$store_id,$data18)
    {

       $this->db->set('default_currency', 0);
       $this->db->update('tbl_currency');
       $this->db->set('default_currency', 1); //value that used to update column  
       $this->db->where('currency_iso', $data18); //which row want to upgrade  
       $this->db->update('tbl_currency');
       $this->db->where('store_id',$store_id);
       $this->db->update('store_information',$storedata);
    }
    public function store_checking1()
    {
      return $this->db->get('store_information')->result();
    }
}
?>