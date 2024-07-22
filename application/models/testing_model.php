
<?php

class testing_model extends CI_Model{
	
	  public function getBarangByCode($code) {
        $this->db->where('kodeBarang', $code); 
        $query = $this->db->get('tbl_barang'); 
        return $query->row_array();
    }

}
