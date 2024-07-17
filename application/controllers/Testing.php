<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('testing_model');
	}

	public function index()
	{
		$data = array(
			'barang' => $this->db->get('tbl_barang')->result()
		);
		$this->load->view('testing', $data);
	}
    
	public function getNamaBarang()
	{
		$productCode = $this->input->post('kodeBarang');

        // Fetch product details from the database
        $product = $this->testing_model->getBarangByCode($productCode);
        
        // Check if the product was found
        if($product) {
            // Return product name as JSON
            echo json_encode(array('namaBarang' => $product['namaBarang'], 'stokBarang' => $product['stokBarang'], 'hargaBeli' => $product['hargaBeli'], 'hargaJual' => $product['hargaJual']));
        } else {
            // Return null if product not found
            echo json_encode(null);
        }
	}
}
