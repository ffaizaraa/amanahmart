<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		$data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/kategori/tampil', $data);
		$this->load->view('admin/layout/footer');
	}

	public function add(){
		$namaKategori = $this->input->post('namaKategori');
		if (!empty($namaKategori)) {
			// Cek apakah kategori sudah ada
			$cek = $this->Madmin->cek_kategori($namaKategori)->row_array();
			if ($cek) {
				echo "<script>alert('Category has already exist!');</script>";
				redirect('kategori'); // Redirect ke halaman kategori jika sudah ada
			} else {
				// Simpan kategori
				$dataInput = array('namaKategori' => $namaKategori);
				$this->Madmin->insert('tbl_kategori', $dataInput);
				redirect('kategori'); // Redirect ke halaman kategori setelah berhasil disimpan
			}
		} else {
			// Jika form kosong, kembali ke halaman form
			$this->load->view('admin/layout/header');
			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/kategori/formAdd');
			$this->load->view('admin/layout/footer');
		}
	}
	
	public function get_by_id($id){
		$dataWhere = array('idKategori'=>$id);
		$data['kategori'] = $this->Madmin->get_by_id('tbl_kategori', $dataWhere)->row_object();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/kategori/formEdit', $data);
		$this->load->view('admin/layout/footer');
	}
	
	public function validasi_edit()
	{
		$this->form_validation->set_rules('namaKategori', 'Category', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/layout/header');
			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/kategori/formAdd');
			$this->load->view('admin/layout/footer');
		} else {
			$this->edit();
		}
	}

	public function edit(){
		$id = $this->input->post('id');	
		$namaKategoriegori = $this->input->post('namaKategori');
		$cek = $this->Madmin->cek_kategori($namaKategoriegori)->row_array();
		if ($cek['namaKategori'] == $namaKategoriegori) {
			echo "<script>alert('Category has already exist!');</script>";
			$this->index();
		}else{	
			$dataUpdate = array('namaKategori'=>$namaKategoriegori);
			$this->Madmin->update('tbl_kategori', $dataUpdate, 'idKategori', $id);
			redirect('kategori');
		}
	}

	public function delete($id){
		$this->Madmin->delete('tbl_kategori', 'idKategori', $id);
		redirect('kategori');
	}
}