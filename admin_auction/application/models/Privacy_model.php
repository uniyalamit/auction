<?php
/**
 * 
 */
class Privacy_model extends CI_Model
{
	
	public function privacy_detail1($p_info)
     {
       $result=$this->db->insert('privacy_information',$p_info);
     }
       public function p_checking1()
    {
      return $this->db->get('privacy_information')->result();
    }
     public function get_privacy()
    {
      return $this->db->get('privacy_information')->result();
    }
     public function privacy_update1($id,$p_update)
    {
       $this->db->where('id',$id);
       $this->db->update('privacy_information',$p_update);
    }
}



?>