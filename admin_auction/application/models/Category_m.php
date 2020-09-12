<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_m extends CI_Model {
	
	///////login admin
	public function get_lg_data($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get('users')->row();
	}

	public function insert_cat($data)
	{
	
		$this->db->insert('tbl_category',$data);
	}
	public function fetch_cat()
	{
		 return $this->db->get('tbl_category')->result();
	}
	public function fetch_all_cat()
	{
		return $this->db->get('tbl_category')->result();
	}
	public function delete_catg($id)
	{
		$this->db->where('cat_id',$id);
		$this->db->delete('tbl_category');
	}
	public function fetch_id_rec($id)
	{
		$this->db->where('cat_id',$id);
	return	$this->db->get('tbl_category')->row();
	}
	public function submit_f($id,$data)
	{
		$this->db->where('cat_id',$id);
		$this->db->update('tbl_category',$data);
	}
	public function check_n($name)
	{
		return $this->db->where('cat_name',$name)->row();
	}
	public function disable_c($id)
	{
		$this->db->where('cat_id',$id);
		$this->db->set('cat_status','2');
		$this->db->update('tbl_category');
	}
	public function enable_c($id)
	{
		$this->db->where('cat_id',$id);
		$this->db->set('cat_status','1');
		$this->db->update('tbl_category');
	}
	 /* Insert common function */
    function insertrecords($tbl, $arrdata) 
    {
        $this->db->insert($tbl, $arrdata);
        return $this->db->insert_id();
    }

    /* check function for records present in db common */
    function checkrecords($tbl, $condition = null) 
    {
        if ($condition) 
        {
            $sql = "SELECT * FROM `$tbl` WHERE $condition";
        } 
        $query = $this->db->query($sql);
        $this->db->last_query();
        if ($query->num_rows() > 0) 
        {
            return $query->result();
        } 
        else 
        {
            return 0;
        }
    }

    /* Common function for get records by conditions */
    function getrecords($tbl, $condition = null) 
    {
        if ($condition) 
        {
            $sql = "SELECT * FROM `$tbl` WHERE $condition";
        } 
        else 
        {
            $sql = "SELECT * FROM `$tbl`";
        }
        $query = $this->db->query($sql);
        if ($query) 
        {
            return $query->result_array();
        } 
        else 
        {
            return 0;
        }
    }

    /* Common function for Update row by id */
    function updateRecordsByid($tbl, $id_name, $arrdata, $id)
    {	
        $this->db->where($id_name, $id);
        $res = $this->db->update($tbl, $arrdata);
        return $res;
    }

    /* Common function for delete */
    function deleterow($tbl, $id_name, $id) 
    {
        $this->db->where($id_name, $id);
        return $this->db->delete($tbl);
    }
	public function getsub($id)
	{
		$this->db->where('sub_cat_id',$id);
		return $this->db->get('tbl_category')->result();
	}
	public function check_cat($id)
	{
		$this->db->where('cat_name',$id);
		return $this->db->get('tbl_category')->result();
	}
}
?>