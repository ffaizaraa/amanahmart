<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MInvoice');
	}
	public function index()
	{
		$data = array(
			'get_data' => $this->MInvoice->get_data()
		);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/invoice/tampil',$data);
		$this->load->view('admin/layout/footer');
	}
}
