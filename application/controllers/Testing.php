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

        $product = $this->testing_model->getBarangByCode($productCode);
        
        if($product) {
           
            echo json_encode(array('namaBarang' => $product['namaBarang'], 'stokBarang' => $product['stokBarang'], 'hargaBeli' => $product['hargaBeli'], 'hargaJual' => $product['hargaJual']));
        } else {
            
            echo json_encode(null);
        }
	}
}
