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
			'barang' => $this->db->get('tbl_barang')->result(),
		);
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/kasir/tampil', $data);
		$this->load->view('admin/layout/footer');
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

	public function saveTransaction() {
    $totalPayment = $this->input->post('totalPayment');
    $kodeInvoice = $this->input->post('kodeInvoice');
    $transactionDetails = $this->input->post('transactionDetails');

    if (empty($totalPayment) || empty($kodeInvoice) || empty($transactionDetails)) {
        echo json_encode(array('status' => 'error', 'message' => 'Invalid data'));
        return;
    }

    $transactionData = array(
        'waktuTransaksi' => date('Y-m-d H:i:s'),
        'total' => $totalPayment,
        'kodeInvoice' => $kodeInvoice
    );

    
    $this->db->trans_start();

    
    $this->db->insert('tbl_transaksi', $transactionData);
    $transactionId = $this->db->insert_id();

  
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

    
    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE) {
        echo json_encode(array('status' => 'error', 'message' => 'Failed to save transaction'));
    } else {
        echo json_encode(array('status' => 'success', 'transactionId' => $transactionId));
    }
}

}
