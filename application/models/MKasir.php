<?php

class MKasir extends CI_Model{
	
	public function saveTransaction($transactionData, $transactionDetails) {
        // Begin transaction
        $this->db->trans_start();

        // Insert into tbl_transaksi
        $this->db->insert('tbl_transaksi', $transactionData);
        $transactionId = $this->db->insert_id();

        // Insert into transaksi_detail
        foreach ($transactionDetails as $detail) {
            $detailData = array(
                'idTransaksi' => $transactionId,
                'kodeBarang' => $detail['kodeBarang'],
                'Harga' => $detail['harga'],
                'qty' => $detail['qty']
            );
            $this->db->insert('transaksi_detail', $detailData);
        }

        // Complete transaction
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            return $transactionId;
        }
    }
}
