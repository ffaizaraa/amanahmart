<?php

class MInvoice extends CI_Model{
	
	public function get_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->join('transaksi_detail', 'tbl_transaksi.idTransaksi = transaksi_detail.idTransaksi', 'left');
		$this->db->join('tbl_barang', 'transaksi_detail.kodeBarang = tbl_barang.kodeBarang', 'left');
		$query = $this->db->get();
		return $query->result();
	}
}
