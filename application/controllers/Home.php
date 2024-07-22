<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Madmin'); // Memuat model Madmin
    }

    public function index(){
        $data['barang']=$this->Madmin->get_all_data_with_join()->result();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
		$this->load->view('home', $data);
	}

}