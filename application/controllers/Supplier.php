<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		$data['supplier']=$this->Madmin->get_all_data('tbl_supplier')->result();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/supplier/tampil', $data);
		$this->load->view('admin/layout/footer');
	}

	public function add(){
        $namaSupplier = $this->input->post('namaSupplier');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
    
        if (!empty($namaSupplier)) {
            // Cek apakah supplier sudah ada
            $cek = $this->Madmin->cek_supplier($namaSupplier)->row_array();
            if ($cek) {
                echo "<script>alert('Supplier already exists!');</script>";
                redirect('supplier'); // Redirect ke halaman supplier jika sudah ada
            } else {
                // Simpan supplier
                $dataInput = array(
                    'namaSupplier' => $namaSupplier,
                    'alamat' => $alamat,
                    'no_telp' => $no_telp
                );
                $this->Madmin->insert('tbl_supplier', $dataInput);
                redirect('supplier'); // Redirect ke halaman supplier setelah berhasil disimpan
            }
        } else {
            // Jika form kosong, kembali ke halaman form
            $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/supplier/formAdd');
            $this->load->view('admin/layout/footer');
        }
    }    
	
	public function get_by_id($id){
		$dataWhere = array('idSupplier'=>$id);
		$data['supplier'] = $this->Madmin->get_by_id('tbl_supplier', $dataWhere)->row_object();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/supplier/formEdit', $data);
		$this->load->view('admin/layout/footer');
	}
	
	public function validasi_edit(){
        $this->form_validation->set_rules('namaSupplier', 'Supplier Name', 'trim|required');
        if ($this->form_validation->run() == false) {
            // Validasi gagal, tampilkan kembali form update
            $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/supplier/formUpdate');
            $this->load->view('admin/layout/footer');
        } else {
            // Validasi sukses, lanjutkan ke proses edit
            $this->edit();
        }
    }

public function edit(){
        $id = $this->input->post('id');
        $namaSupplier = $this->input->post('namaSupplier');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');

        // Cek apakah supplier sudah ada
        $cek = $this->Madmin->cek_supplier($namaSupplier)->row_array();
        if ($cek && $cek['idSupplier'] != $id) {
            // Jika nama supplier sudah ada dan bukan data dirinya sendiri
            echo "<script>alert('Supplier name already exists!');</script>";
            redirect('supplier'); // Redirect ke halaman supplier jika sudah ada
        } else {
            // Update data supplier
            $dataUpdate = array(
                'namaSupplier' => $namaSupplier,
                'alamat' => $alamat,
                'no_telp' => $no_telp
            );
            $this->Madmin->update('tbl_supplier', $dataUpdate, 'idSupplier', $id);
            redirect('supplier'); // Redirect ke halaman supplier setelah berhasil disimpan
        }
    }


	public function delete($id){
		$this->Madmin->delete('tbl_supplier', 'idSupplier', $id);
		redirect('supplier');
	}
}