<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	/**
	*
	* view load page
	*
	*/

	public function index() {
		$this->load->view('admin/home_admin_view');
	}

	public function barang_paket() {
		$this->load->view('admin/in_barang_paket_view');
	}

	public function daftar_barang_satuan() {
		$this->load->view('admin/daftar_barang_satuan');
	}

	public function daftar_barang_paket() {
		$this->load->view('admin/daftar_barang_paket');
	}

	public function barang_satuan() {
		$this->load->model("Kategori_model");

		$kategori_model = new Kategori_Model();

		$this->data['kategori'] = $kategori_model->fetch_all();

		$this->load->view('admin/in_barang_nonpaket_view', $this->data);
	}

	public function daftar_diskon_barang_paket() {
		$this->load->view("admin/list_diskon_barang_paket_view");
	}

	public function daftar_diskon_barang_satuan() {
		$this->load->view("admin/");
	}

	public function laporan_penjualan() {
		$this->load->view("admin/laporan");
	}

	public function stok_barang_paket() {
		$this->load->model("Barang_paket_model");

		$barang_paket_model = new Barang_Paket_Model();
		$barang_paket =  $barang_paket_model->fetch_all();

		$this->data["barang_paket"] = $barang_paket;
		$this->data["jumlah_total_barang"] = count($barang_paket); 

		$this->load->view("admin/stok_barang_paket_view", $this->data);
	}

	public function stok_barang_satuan() {
		$this->load->model("Barang_satuan_model");

		$barang_satuan_model = new Barang_Satuan_Model();
		$barang_satuan =  $barang_satuan_model->fetch_all();

		$this->data["barang_satuan"] = $barang_satuan;
		$this->data["jumlah_total_barang"] = count($barang_satuan); 

		$this->load->view("admin/stok_barang_satuan_view", $this->data);
	}

	public function masukan_kategori_barang() {
		$this->load->view("admin/");
	}

	public function daftar_kategori_barang() {
		$this->load->view("admin/");
	}

	public function register_member() {
		$this->load->view('admin/register_member_view');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */