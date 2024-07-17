
<?php

class testing_model extends CI_Model{
	
	  public function getBarangByCode($code) {
        $this->db->where('kodeBarang', $code); // Assuming 'kodeBarang' is the correct column name
        $query = $this->db->get('tbl_barang'); // Assuming your table name is 'products'
        return $query->row_array();
    }

}
