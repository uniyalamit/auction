<?php

/**
 * 
 */
class Review_m extends CI_Model
{
	
	 function get_product_review()
	{
		$this->db->select("*");
		$this->db->from('product_review');
		
		return  $this->db->get()->result();
	}
	 function review_delete($id)
    {
      $this->db->where('review_id',$id);
      $this->db->delete('product_review');
    }
     function select_product_update($id)
    {
      $this->db->where('review_id',$id);
      return $this->db->get('product_review')->row();
    }
    function update_review($review_data,$id){
    	//print_r($review_data);
    	//die();
    	$this->db->where('review_id',$id);
      return $this->db->update('product_review',$review_data);
    }
	
}

?>