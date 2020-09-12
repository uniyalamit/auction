<?php


  /**
   * 
   */
  class Delivery_model extends CI_Model
  {
  	
  	public function Delivery_detail1($info)
     {
       $result=$this->db->insert('delivery_information',$info);
     }
     public function get_delivery()
    {
      return $this->db->get('delivery_information')->result();
    }
    
     public function delivery_update1($id,$d_update)
    {
       $this->db->where('id',$id);
       $this->db->update('delivery_information',$d_update);
    }
      public function d_checking1()
    {
      return $this->db->get('delivery_information')->result();
    }
  }



?>