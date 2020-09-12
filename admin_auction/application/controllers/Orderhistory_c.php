<?php
class Orderhistory_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		session_start();
		$this->load->library('upload');
		$this->load->library('image_lib');
	    $this->load->model('Orderhistory_m');
	}
	function order_history()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$data['get_order']=$this->Orderhistory_m->getOrder();
		$data['get_status']=$this->Orderhistory_m->view_status();
		$this->load->view('Admin/order_history',$data);
		$this->load->view('includes/footer');
	}
	function wizard_form()
	{
		$this->load->view('Admin/wizard_form');
	}
	/* function add_history()
	{
		$data['user_id']=$this->input->post('user_id');
		$data['customer']=$this->input->post('customer');
		$data['status']=$this->input->post('status');
		$data['total']=$this->input->post('total');
		$data['date_added']=$this->input->post('date_added');
		$data['date_modified']=$this->input->post('date_modified');
		$this->Orderhistory_m->insert_order_history($data);
	} */
	function view_edit_order()
	{
		$id=$this->uri->segment(3);
		$data['get_status']=$this->Orderhistory_m->view_status();
		$data['view_order']=$this->Orderhistory_m->viewOrder($id);
		$data['view_order_product']=$this->Orderhistory_m->viewOrderProduct($id);
		$data['view_shipping']=$this->Orderhistory_m->viewShip($id);
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$this->load->view('Admin/norder_history',$data);
		$this->load->view('includes/footer');
	}
	function upate_order_history($id)
	{
		/* order 1 */
		$order['order_status']=$this->input->post('order_status');
		$order['first_name']=$this->input->post('first_name');
		$order['last_name']=$this->input->post('last_name');
		$order['address']=$this->input->post('address');
		$order['order_email']=$this->input->post('order_email');
		$order['phone']=$this->input->post('phone');
		$order['shipping_address']=$this->input->post('shipping_address');
		$order['shipping_name']=$this->input->post('shipping_name');
		$order['shipping_phone']=$this->input->post('shipping_phone');
		$order['shipping_email']=$this->input->post('shipping_email');
		$order['email']=$this->input->post('email');
		$order['user_id']=$this->input->post('user_id');
		
		/* order 1 */
		/* order_product_history 2 */
		$a=$this->input->post('price');
		$b=$this->input->post('option_price');
		$c=$this->input->post('quantity');
		$z=($a+$b)*$c;
		$order_product['order_id']=$this->input->post('order_id');
		$order_product['product_name']=$this->input->post('product_name');
		$order_product['option_name']=$this->input->post('option_name');
		$order_product['quantity']=$this->input->post('quantity');
		$order_product['price']=$this->input->post('price');
		$order_product['option_price']=$this->input->post('option_price');
		$order_product['tax']=$this->input->post('tax');
		$order_product['option_tax']=$this->input->post('option_tax');
		$order_product['sub_total']=$z;

		/* order_product_history 2 */
		/* tbl_shipping */
		$order_shipping['order_id']=$this->input->post('order_id');
		$order_shipping['shipping_method_name']=$this->input->post('shipping_method_name');
		$order_shipping['shipping_charges']=$this->input->post('shipping_charges');

		/* tbl_shipping */
		
		/* table name */
		$order_tbl='tbl_order';
		$tbl_order_product='tbl_order_product';
		$shipping='tbl_shipping';
		/* table name */
		
		$this->Orderhistory_m->update_order($order_tbl,$order,$id);
		$this->Orderhistory_m->update_order($tbl_order_product,$order_product,$id);
		$this->Orderhistory_m->update_order($shipping,$order_shipping,$id);
		redirect('Orderhistory_c/order_history');
		
		
	}
	}
	?>