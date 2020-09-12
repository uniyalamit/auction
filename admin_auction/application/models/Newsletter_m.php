<?php

/**
 * 
 */
class Newsletter_m extends CI_Model
{
	function get_email()
	{
		return  $q=$this->db->get('users')->result();
	}
	/*function update_status($d)
	{
		$this->db->where('stutus',$d)
		return $this->d
	}*/
    function checkstatus1($id,$status)
	{
		$this->db->where('user_id',$id);
		$this->db->set('status', $status);
		return $this->db->update('users');
	}
	
}


?>