<?php
/**
 * 
 */
class Returnp_model extends CI_Model
{
	
	 public function rp_detail1($rp_info)
     {
       $result=$this->db->insert('rp_information',$rp_info);
     }
      public function get_rp()
    {
      return $this->db->get('rp_information')->result();
    }

    public function rp_update1($id,$rp_update)
    {
       $this->db->where('id',$id);
       $this->db->update('rp_information',$rp_update);
    }
    public function rp_checking1()
    {
      return $this->db->get('rp_information')->result();
    }
}


?>