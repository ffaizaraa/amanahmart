<?php

class Madmin extends CI_Model{
	
	public function cek_login($u, $p){
		$q = $this->db->get_where('tbl_admin', array('username'=>$u, 'password'=>$p));
		return $q;
	}

    public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
	}
	public function cek_kategori($p){
		$q = $this->db->get_where('tbl_kategori', ['namaKategori'=>$p]);
		return $q;
	}
	public function cek_supplier($p){
		$q = $this->db->get_where('tbl_supplier', ['namaSupplier'=>$p]);
		return $q;
	}
	public function cek_barang($p){
		$q = $this->db->get_where('tbl_barang', ['namaBarang'=>$p]);
		return $q;
	}
	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}
	public function get_by_id($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}
	public function update($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}
	public function get_all_data_with_join() {
		$this->db->select('tbl_barang.*, tbl_supplier.namaSupplier, tbl_kategori.namaKategori');
		$this->db->from('tbl_barang');
		$this->db->join('tbl_supplier', 'tbl_barang.idSupplier = tbl_supplier.idSupplier', 'left');
		$this->db->join('tbl_kategori', 'tbl_barang.idKategori = tbl_kategori.idKategori', 'left');
		$query = $this->db->get();
		return $query;
	}	
	public function delete($tabel, $id, $val){
		$this->db->delete($tabel, array($id => $val)); 
	}

}
