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
//unused
	public function barang_paket() {
		$this->load->view('admin/in_barang_paket_view');
	}
	
	public function daftar_barang() {
		$this->load->model("Barang_model");

		$barang_model = new Barang_Model();

		$barang = $barang_model->fetch_all_barang();
		
		$this->data['barang'] = $barang;

		$this->load->view("admin/daftar_barang_view", $this->data);
	}

	public function daftar_transaksi() {
		$this->load->model('Transaksi_model');

		$transaksi_model = new Transaksi_Model();

		$transaksi = $transaksi_model->fetch_all();

		$this->data['transaksi'] = $transaksi;
		
		$this->load->view('admin/daftar_transaksi_view', $this->data);
	}

	public function detail_transaksi() {
		$id_transaksi = $this->input->get("id_transaksi");

		$this->data['id_transaksi'] = $id_transaksi;
		$this->load->model("Detail_transaksi_model");

		$detail_transaksi_model = new Detail_Transaksi_Model();

		$total = $detail_transaksi_model->sum_total_pembelian($id_transaksi);
		
		$this->data["total"] = $total["total"];
		
		$this->load->view("admin/detail_transaksi_view", $this->data);
	}

	//unused
	public function daftar_barang_satuan() {
		$this->load->view('admin/daftar_barang_satuan');
	}

//unused
	public function daftar_barang_paket() {
		$this->load->view('admin/daftar_barang_paket');
	}

	public function input_tambah_barang() {
		$this->load->model("Kategori_model");
		$this->load->model("Brand_model");

		$kategori_model = new Kategori_Model();
		$brand_model = new Brand_Model();

		$this->data['kategori'] = $kategori_model->fetch_all();
		$this->data['brands'] = $brand_model->fetch_all();

		$this->load->view('admin/input_tambah_barang_view', $this->data);
	}
	
//unused
	public function daftar_diskon_barang_paket() {
		$this->load->view("admin/list_diskon_barang_paket_view");
	}
//unused
	public function daftar_diskon_barang_satuan() {
		$this->load->view("admin/");
	}
//unused
	public function stok_barang_paket() {
		$this->load->model("Barang_paket_model");

		$barang_paket_model = new Barang_Paket_Model();
		$barang_paket =  $barang_paket_model->fetch_all();

		$this->data["barang_paket"] = $barang_paket;
		$this->data["jumlah_total_barang"] = count($barang_paket); 

		$this->load->view("admin/stok_barang_paket_view", $this->data);
	}
//unused
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