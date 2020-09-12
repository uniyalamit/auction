<?php
class Customer_group_model extends CI_Model
{
	public function insert($data)
    {
       $result=$this->db->insert('custmore_group',$data);
       
    }
    
    
    public function get_custmore()
    {
    	return $this->db->get('custmore_group')->result();
    }
    public function single_delete1($g_id)
    {
      $this->db->where('default_group',0);
      $this->db->where('cgroup_id',$g_id);
      $this->db->delete('custmore_group');
      
    }
    public function delete_group($id)
    {
      $this->db->where('default_group',0);
      $this->db->where('cgroup_id',$id);
      $this->db->delete('custmore_group');
     
         
    }
     public function group_update($g_id)
    {
    
      $this->db->where('cgroup_id',$g_id);
      return $this->db->get('custmore_group')->row();
    }
    public function check_m($group)
    {
      $this->db->where('cgroup_name',$group);
      return $this->db->get('custmore_group')->row();
    }
    public function new_data($data,$id)
    {
      $this->db->where('cgroup_id',$id);
      $this->db->update('custmore_group',$data);
    }
}

?>