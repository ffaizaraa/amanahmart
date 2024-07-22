<?php

class MKasir extends CI_Model{
	
	public function saveTransaction($transactionData, $transactionDetails) {
        
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
        }

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            return $transactionId;
        }
    }
}
