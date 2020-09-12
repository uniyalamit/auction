<?php
/**
 * 
 */
class Group_m extends CI_Model
{
	
	
	public function insert($data)
    {
       $result=$this->db->insert('add_group',$data);
       
    }

    public function get_user()
    {
    	return $this->db->get('add_group')->result();
    }

    public function delete_group($id)
    {
    	$this->db->where('g_id',$id);
    	$this->db->delete('add_group');
         
    }
    public function single_delete1($g_id)
    {
      $this->db->where('g_id',$g_id);
      $this->db->delete('add_group');
    }
    public function group_update($g_id)
    {
      $this->db->where('g_id',$g_id);
      return $this->db->get('add_group')->row();
    }
    public function new_data($data,$id)
    {
      $this->db->where('g_id',$id);
      $this->db->update('add_group',$data);
    }
    public function check_m($group)
    {
      $this->db->where('g_name',$group);
      return $this->db->get('add_group')->row();
    }
    public function check_m_u($group)
    {
      $this->db->where('g_name',$group);
      return $this->db->get('add_group')->row();

    }
}
?>