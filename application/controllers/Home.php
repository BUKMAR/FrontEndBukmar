<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see http://codeigniter.com/user_guide/general/urls.html
	*/
	public $shopping_cart;

	public function __construct() {
		parent::__construct();
		
		$this->shopping_cart = new Shopping_Cart();
		$this->shopping_cart->setInstance($this->get_instance());
	}

	public function index() {
		$this->load->model("Barang_satuan_model");

		$barang_satuan_model = new Barang_Satuan_Model();

		$barang_satuan = $barang_satuan_model->fetch_all();
		//echo json_encode($barang_satuan);
		$this->data['barang_satuan'] = $barang_satuan;
		
		$this->load->view("home_view", $this->data);
	}

	public function registrasi() {
		$this->load->view('registrasi_view');
	}

	public function login() {
		$this->load->view('login_view');
	}

	public function troli() {
	}

	public function tambah_ke_keranjang() {
		$id_barang = $this->input->post("id-barang");
		$kuantitas = $this->input->post("kuantitas");
		$harga_tawar = $this->input->post("harga-tawar");

		$this->load->model("Barang_satuan_model");
		$barang_satuan_model = new Barang_Satuan_Model();

		$barang = $barang_satuan_model->fetch_by_id($id_barang);

		$data = array(
		   	'id' => $id_barang,
		    'name' => $barang['nama_barang'],
		    'qty' => $kuantitas,
		    'price' => $harga_tawar,
		    'options' => array()
		);

		if($this->shopping_cart->ifExist($id_barang)) 
			$this->shopping_cart->updateCart($id_barang, $quantitas);
		else 
			$this->shopping_cart->addToCart($data);

		$chart = $this->shopping_cart->fetch_all();

		redirect(site_url());
	}

	public function detail_produk_paket() {
		$this->load->view('detail_produk_paket_view');
	}

	public function detail_produk() {
		$this->load->model("Barang_satuan_model");
		$this->load->model("Foto_barang_satuan_model");

		$barang_satuan_model = new Barang_Satuan_Model();
		$foto_barang_satuan_model = new Foto_Barang_Satuan_Model();

		$barang_satuan = $barang_satuan_model->fetch_by_id($this->input->get("id_produk"));
		$foto_barang_satuan = $foto_barang_satuan_model->fetch_all_by_id_barang_satuan($this->input->get("id_produk"));

		$dilihat = $barang_satuan['dilihat'] + 1;

		$barang_satuan_model->update(
			$this->input->get("id_produk"),
			array(
				"dilihat" => $dilihat
			)
		);

		$this->data['foto_barang_satuan'] = $foto_barang_satuan;
		$this->data['barang_satuan'] = $barang_satuan;
		$this->load->view('detail_produk_satuan_view', $this->data);
	}

	public function cekout() {
		$this->load->view('cekout_view');
	}

}
