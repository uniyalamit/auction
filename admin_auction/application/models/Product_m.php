<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_m extends CI_Model {
	
	public function post_d($disc)
	{
		$this->db->insert('tbl_discount',$disc);
	}
	public function view_d()
	{
		return $this->db->get('tbl_discount')->result();
	}
	public function fetchrec($id)
	{
		$this->db->where('id',$id);
		 return $this->db->get('tbl_discount')->row();
	}
	public function update_disc($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tbl_discount',$data);
	}
	public function delete_rec($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_discount');
	}
	public function insert_c($rec)
	{
		$this->db->insert('tbl_coupan',$rec);
	}
	public function fetch_coupan()
	{
		return $this->db->get('tbl_coupan')->result();
	}
	public function delete_cp($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_coupan');
	}
	public function fetch_coupanby_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('tbl_coupan')->row();
	}
	public function update_coupan($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tbl_coupan',$data);
		
	}
	public function get_disc()
	{
		return $this->db->get('tbl_discount_type')->result();
	}
	
	
	
	
	public function commanInsert($a,$b)
	{
		$this->db->insert($a,$b);
		$lastid=$this->db->insert_id();
		return $lastid;
	}
	public function get_product()
	{
		$this->db->select("tbl_product_details.model,tbl_product_details.product_id,tbl_product_details.quantity,tbl_product_details.product_price,tbl_product.product_name,tbl_product.product_img,tbl_product.status");
		$this->db->from('tbl_product_details');
		$this->db->join('tbl_product', 'tbl_product_details.product_id = tbl_product.product_id','inner');
		return  $this->db->get()->result();
	}
	public function get_details()
	{
		return $this->db->get('tbl_product_details')->result();
	}
	public function disable_c($id)
	{
		$this->db->where('product_id',$id);
		$this->db->set('status','2');
		$this->db->update('tbl_product');
	}
	public function enable_c($id)
	{
		$this->db->where('product_id',$id);
		$this->db->set('status','1');
		$this->db->update('tbl_product');
	}
	public function delete_p($id)
	{
		$this->db->where('product_id',$id);
		$this->db->delete('tbl_product');
	}
	public function fetch_rec($id)
	{
		$this->db->where('product_id',$id);
		return $this->db->get('tbl_product')->row();
	}
	public function update_pro($id,$data)
	{
		$this->db->where('product_id',$id);
		$this->db->update('tbl_product',$data);
	}
	public function p_image($data1)
	{
		$img=explode(',',$data1['images']);
		//echo "<pre>";
		//print_r($img); die;
	for ($i = 0; $i < count($img); $i++) {
		$data['images']=$img[$i];
		$data['product_id']=$data1['product_id'];
		$this->db->insert('tbl_product_image',$data);
	}
	}
	
	 public function multiple_upload($path,$file) {
        ignore_user_abort(true);
        set_time_limit(0);
        if (isset($file)) {
            $name_array = $file['name'];
            $tmp_name_array = $file['tmp_name'];
            $type_array = $file['type'];
            $size_array = $file['size'];
            $error_array = $file['error'];
            $file_names = '';
            for ($i = 0; $i < count($tmp_name_array); $i++) {
                if (move_uploaded_file($tmp_name_array[$i], $path . $name_array[$i])) {
                    $file_names .= $name_array[$i] . ',';
				$file_names1=trim($file_names,',');
                } else {
                    return 0;
                }
            }
            return $file_names1;
        }
    }
	public function gallery_im($id)
	{
		$this->db->where('product_id',$id);
		return $this->db->get('tbl_product_image')->result();
	}
	public function edit_img($id)
	{
			$this->db->where('pimg_id',$id);
		 return $this->db->get('tbl_product_image')->row();
	}
	public function update_gallery($id,$data)
	{
		$this->db->where('pimg_id',$id);
		$this->db->update('tbl_product_image',$data);
	}
	public function fetch_cat()
	{
		return $this->db->get('tbl_category')->result();
	}
	public function p_disc_image($data)
	{
		$this->db->insert('tbl_discount_pro',$data);
	}
	public function special_disc($data,$id)
	{
		
        
         $count=count($data['discount']);

		for($i=0; $i<$count; $i++)
		  {
         $data1 = array(
           'discount' => $data['discount'][$i], 
           'start_date' => $data['start_date'][$i],
           'end_date' => $data['end_date'][$i],
           'group_id' => $data['group_id'][$i],
           'product_id' => $id,);
         /*echo "<pre>";
         print_r($data1);*/

		$this->db->insert('tbl_group_disc',$data1);
	   }
	   	}
	public function fetch_c_cat()
	{
		$this->db->where('sub_cat_id',0);
		return $this->db->get('tbl_category')->result();
	}
	public function stock_sts($stock)
	{
		$this->db->insert('tbl_stock_status',$stock);
		return $this->db->insert_id();
	}
	public function check_sk_vl($name)
	{
		$this->db->where('sku',$name);
		return $this->db->get('tbl_product_details')->result();
	}
	public function get_p_disc($a)
	{
		$this->db->where('id',$a);
		return $this->db->get('tbl_discount')->result();
	}
	 /* Insert common function */
    function insertrecords($tbl, $arrdata) 
    {
        $this->db->insert($tbl, $arrdata);
        return $this->db->insert_id();
    }
	 public function fetch_detail($id)
	 {
		 $this->db->where('product_id',$id);
		 return $this->db->get('tbl_product_details')->row();
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
            return $query->result();
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
	function getbrandname($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('brand')->row();
	}
	function getcatname($id)
	{
		$this->db->where('cat_id',$id);
		return $this->db->get('tbl_category')->row();
	}
	function p_atr($id)
	{
		$this->db->where('product_id',$id);
		return $this->db->get('product_atr')->row();
	}
	function disc($id)
	{
		$this->db->where('product_id',$id);
		return $this->db->get('tbl_discount_pro')->row();
	}
	function getdiscountname($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('tbl_discount_pro')->row();
	}
	function get_disc_no($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('tbl_discount')->row();
	}
	function grp($id)
	{
		$this->db->where('product_id',$id);
		return $this->db->get('tbl_group_disc')->row();
	}
	function upd_tax($id)
	{
		$this->db->where('product_id',$id);
		return $this->db->get('tbl_product_tax')->row();
	}
	function tx_nm($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('taxt_class')->row();
	}
	function shiping($id)
	{
		$this->db->where('product_id',$id);
		return $this->db->get('tbl_pro_shipping')->row();
	}
	function stock_sts_up($id)
	{
		$this->db->where('product_id',$id);
		return $this->db->get('tbl_stock_status')->row();
	}
	function auction_pr($id)
	{
		$this->db->where('product_id',$id);
		return $this->db->get('tbl_auction_pro')->row();
	}
    
	
	}
	