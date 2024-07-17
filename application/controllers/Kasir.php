<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MKasir');
	}
	public function index(){
		$data = array(
			'barang' => $this->db->get('tbl_barang')->result()
		);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/kasir/tampil',$data);
		$this->load->view('admin/layout/footer');
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

	// public function saveTransaction() {
    //     // Get the data from the POST request
    //     $totalPayment = $this->input->post('totalPayment');
    //     $kodeInvoice = $this->input->post('kodeInvoice');
    //     $transactionDetails = $this->input->post('transactionDetails');

    //     // Prepare the transaction data
    //     $transactionData = array(
    //         'waktuTransaksi' => date('Y-m-d H:i:s'),
    //         'total' => $totalPayment,
    //         'kodeInvoice' => $kodeInvoice
    //     );

    //     // Save the transaction and get the transaction ID
    //     $transactionId = $this->MKasir->saveTransaction($transactionData, $transactionDetails);

    //     if ($transactionId) {
    //         echo json_encode(array('status' => 'success', 'transactionId' => $transactionId));
    //     } else {
    //         echo json_encode(array('status' => 'error'));
    //     }
    // }

	public function saveTransaction() {
    // Get the data from the POST request
    $totalPayment = $this->input->post('totalPayment');
    $kodeInvoice = $this->input->post('kodeInvoice');
    $transactionDetails = $this->input->post('transactionDetails');

    // Validate the data
    if (empty($totalPayment) || empty($kodeInvoice) || empty($transactionDetails)) {
        echo json_encode(array('status' => 'error', 'message' => 'Invalid data'));
        return;
    }

    // Prepare the transaction data
    $transactionData = array(
        'waktuTransaksi' => date('Y-m-d H:i:s'),
        'total' => $totalPayment,
        'kodeInvoice' => $kodeInvoice
    );

    // Start a transaction
    $this->db->trans_start();

    // Save the transaction
    $this->db->insert('tbl_transaksi', $transactionData);
    $transactionId = $this->db->insert_id();

    // Save the transaction details and update stock
    foreach ($transactionDetails as $detail) {
        $detailData = array(
            'idTransaksi' => $transactionId,
            'kodeBarang' => $detail['kodeBarang'],
            'Harga' => $detail['harga'],
            'qty' => $detail['qty']
        );
        $this->db->insert('transaksi_detail', $detailData);

        // Update stock
        $this->db->set('stokBarang', 'stokBarang - ' . $detail['qty'], FALSE);
        $this->db->where('kodeBarang', $detail['kodeBarang']);
        $this->db->update('tbl_barang');
    }

    // Complete the transaction
    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE) {
        echo json_encode(array('status' => 'error', 'message' => 'Failed to save transaction'));
    } else {
        echo json_encode(array('status' => 'success', 'transactionId' => $transactionId));
    }
}

}
