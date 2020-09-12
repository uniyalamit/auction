<?php
/**
 * 
 */
class Add_user_model extends CI_Model
{
	

	 public function get_store()
    {
      $data['all']=$this->db->get('users')->result();
      $data['curr']=$this->db->get('custmore_group')->result();
      $result=array($data);
      return $result;
    }
    public function group_insert($id,$group)
    {
       
          
          $this->db->where('user_id', $id);
         $this->db->set('group_id', $group);	
       $result=$this->db->update('users');
       
    }
	
}

?>