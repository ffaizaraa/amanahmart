<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		$data['barang']=$this->Madmin->get_all_data_with_join()->result();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/barang/tampil', $data);
		$this->load->view('admin/layout/footer');
	}

	public function add() {
        $kodeBarang = $this->input->post('kodeBarang');
        $namaBarang = $this->input->post('namaBarang');
        $stokBarang = $this->input->post('stokBarang');
        $hargaBeli = $this->input->post('hargaBeli');
        $hargaJual = $this->input->post('hargaJual');
        $deskripsi = $this->input->post('deskripsi');
        $idSupplier = $this->input->post('idSupplier');
        $idKategori = $this->input->post('idKategori');
        
        // Handle file upload
        $config['upload_path'] = './assets/product-image/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $kodeBarang;
    
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('gambarBarang')) {
            $gambarBarang = $this->upload->data('file_name');
        } else {
            $gambarBarang = null; // Atau Anda bisa memberikan nilai default
        }
    
        if (!empty($namaBarang)) {
            // Cek apakah barang sudah ada
            $cek = $this->Madmin->cek_barang($namaBarang)->row_array();
            if ($cek) {
                echo "<script>alert('Item already exists!');</script>";
                redirect('barang'); // Redirect ke halaman barang jika sudah ada
            } else {
                // Simpan barang
                $dataInput = array(
                    'kodeBarang' => $kodeBarang,
                    'namaBarang' => $namaBarang,
                    'stokBarang' => $stokBarang,
                    'hargaBeli' => $hargaBeli,
                    'hargaJual' => $hargaJual,
                    'deskripsi' => $deskripsi,
                    'gambarBarang' => $gambarBarang,
                    'idSupplier' => $idSupplier,
                    'idKategori' => $idKategori
                );
                $this->Madmin->insert('tbl_barang', $dataInput);
                redirect('barang'); // Redirect ke halaman barang setelah berhasil disimpan
            }
        } else {
            // Jika form kosong, kembali ke halaman form
            $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
            $data['supplier'] = $this->Madmin->get_all_data('tbl_supplier')->result();
            $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/barang/formAdd', $data);
            $this->load->view('admin/layout/footer');
        }
    }      
	
	public function get_by_id($id){
		$dataWhere = array('kodeBarang'=>$id);
		$data['barang'] = $this->Madmin->get_by_id('tbl_barang', $dataWhere)->row_object();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $data['supplier'] = $this->Madmin->get_all_data('tbl_supplier')->result();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/barang/formEdit', $data);
		$this->load->view('admin/layout/footer');
	}
	
    public function validasi_edit() {
        $this->form_validation->set_rules('namaBarang', 'Item Name', 'trim|required');
        
        if ($this->form_validation->run() == false) {
            // Validasi gagal, tampilkan kembali form update
            $kodeBarang = $this->input->post('kodeBarang');
            $data['barang'] = $this->Madmin->get_by_id('tbl_barang', $kodeBarang, 'kodeBarang')->row();
            $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
            $data['supplier'] = $this->Madmin->get_all_data('tbl_supplier')->result();
    
            $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/barang/formEdit', $data);
            $this->load->view('admin/layout/footer');
        } else {
            $this->edit();
        }
    }
    
    public function edit() {
        $kodeBarang = $this->input->post('kodeBarang');
        $namaBarang = $this->input->post('namaBarang');
        $stokBarang = $this->input->post('stokBarang');
        $hargaBeli = $this->input->post('hargaBeli');
        $hargaJual = $this->input->post('hargaJual');
        $deskripsi = $this->input->post('deskripsi');
        $idSupplier = $this->input->post('idSupplier');
        $idKategori = $this->input->post('idKategori');
    
        // // Handle file upload only if a new file is uploaded
        // if (!empty($_FILES['gambarBarang']['name'])) {
        //     $config['upload_path'] = './assets/product-image/';
        //     $config['allowed_types'] = 'jpg|jpeg|png';
        //     $config['file_name'] = $kodeBarang;
        //     $config['max_size'] = 2048;
    
        //     $this->load->library('upload', $config);
    
        //     if ($this->upload->do_upload('gambarBarang')) {
        //         $gambarBarang = $this->upload->data('file_name');
        //         // Delete old image
        //         $old_image = $this->Madmin->get_by_id('tbl_barang', $kodeBarang, 'kodeBarang')->row()->gambarBarang;
        //         if ($old_image) {
        //             unlink('./assets/product-image/' . $old_image);
        //         }
        //     } else {
        //         $error = array('error' => $this->upload->display_errors());
        //         // Handle upload error here if needed
        //     }
        // } else {
        //     // No new file uploaded, keep the old image
        //     $gambarBarang = $this->input->post('old_image');
        // }
    
        // Update data barang
        $dataUpdate = array(
            'namaBarang' => $namaBarang,
            'stokBarang' => $stokBarang,
            'hargaBeli' => $hargaBeli,
            'hargaJual' => $hargaJual,
            'deskripsi' => $deskripsi,
            // 'gambarBarang' => $gambarBarang,
            'idSupplier' => $idSupplier,
            'idKategori' => $idKategori
        );
    
        $this->Madmin->update('tbl_barang', $dataUpdate, 'kodeBarang', $kodeBarang);
        redirect('barang'); // Redirect ke halaman barang setelah berhasil disimpan
    }    
    
	public function delete($id){
		$this->Madmin->delete('tbl_barang', 'kodeBarang', $id);
		redirect('barang');
	}
}