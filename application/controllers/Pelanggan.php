<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		$data['pelanggan']=$this->Madmin->get_all_data('tbl_pelanggan')->result();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/pelanggan/tampil', $data);
		$this->load->view('admin/layout/footer');
	}

	public function add() {
        $namaPelanggan = $this->input->post('namaPelanggan');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $jenisKelamin = $this->input->post('jenisKelamin');
        
        if (!empty($namaPelanggan)) {
            // Cek apakah pelanggan sudah ada
            $cek = $this->Madmin->cek_pelanggan($namaPelanggan)->row_array();
            if ($cek) {
                echo "<script>alert('Customer already exists!');</script>";
                redirect('pelanggan'); // Redirect ke halaman pelanggan jika sudah ada
            } else {
                // Simpan pelanggan
                $dataInput = array(
                    'namaPelanggan' => $namaPelanggan,
                    'alamat' => $alamat,
                    'telp' => $telp,
                    'jenisKelamin' => $jenisKelamin
                );
                $this->Madmin->insert('tbl_pelanggan', $dataInput);
                redirect('pelanggan'); // Redirect ke halaman pelanggan setelah berhasil disimpan
            }
        } else {
            // Jika form kosong, kembali ke halaman form
            $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/pelanggan/formAdd');
            $this->load->view('admin/layout/footer');
        }
    }    
	
	public function get_by_id($id){
		$dataWhere = array('idPelanggan'=>$id);
		$data['pelanggan'] = $this->Madmin->get_by_id('tbl_pelanggan', $dataWhere)->row_object();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/pelanggan/formEdit', $data);
		$this->load->view('admin/layout/footer');
	}
	
	public function validasi_edit(){
        $this->form_validation->set_rules('namapelanggan', 'Customer Name', 'trim|required');
        if ($this->form_validation->run() == false) {
            // Validasi gagal, tampilkan kembali form update
            $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/pelanggan/formEdit');
            $this->load->view('admin/layout/footer');
        } else {
            // Validasi sukses, lanjutkan ke proses edit
            $this->edit();
        }
    }
    
    public function edit(){
        $id = $this->input->post('id');
        $namaPelanggan = $this->input->post('namapelanggan');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $jenisKelamin = $this->input->post('jenisKelamin');
    
        // Cek apakah pelanggan sudah ada
        $cek = $this->Madmin->cek_pelanggan($namaPelanggan)->row_array();
        if ($cek && $cek['idPelanggan'] != $id) {
            // Jika nama pelanggan sudah ada dan bukan data dirinya sendiri
            echo "<script>alert('Customer name already exists!');</script>";
            redirect('pelanggan'); // Redirect ke halaman pelanggan jika sudah ada
        } else {
            // Update data pelanggan
            $dataUpdate = array(
                'namaPelanggan' => $namaPelanggan,
                'alamat' => $alamat,
                'telp' => $telp,
                'jenisKelamin' => $jenisKelamin
            );
            $this->Madmin->update('tbl_pelanggan', $dataUpdate, 'idPelanggan', $id);
            redirect('pelanggan'); // Redirect ke halaman pelanggan setelah berhasil disimpan
        }
    }
    


	public function delete($id){
		$this->Madmin->delete('tbl_pelanggan', 'idPelanggan', $id);
		redirect('pelanggan');
	}
}