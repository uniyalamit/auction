<?php

/**
 * 
 */
class Tc_model extends CI_Model
{
	public function tc_detail1($tc_info)
     {
       $result=$this->db->insert('tc_information',$tc_info);
     }
     public function get_tc()
    {
      return $this->db->get('tc_information')->result();
    }
    public function tc_update1($id,$tc_update)
    {
       $this->db->where('id',$id);
       $this->db->update('tc_information',$tc_update);
    }
    public function tc_checking1()
    {
      return $this->db->get('tc_information')->result();
    }
	
}


?>