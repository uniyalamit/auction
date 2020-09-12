<?php

/*------------------about start-----------------------------*/
class About_model extends CI_Model
{
      public function about_detail($data)
    {
       $result=$this->db->insert('admin_aboutus',$data);
    }

    public function get_about()
    {
      return $this->db->get('admin_aboutus')->result();
    }
    public function about_update1($id,$data)
    {
       $this->db->where('id',$id);
      $this->db->update('admin_aboutus',$data);
    }
    public function checking1()
    {
      return $this->db->get('admin_aboutus')->result();
    }
   /*------------------about end-----------------------------*/
}
?>