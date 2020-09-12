<?php

/**
 * 
 */
class Most_view_m extends CI_Model
{
	function most_view()
	{
	   return $this->db->get('tbl_most_view')->result();
	}
	
}

?>