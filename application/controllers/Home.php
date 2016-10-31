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
		if($this->is_member_logged_in()) {
			$this->load->model("Member_model");
			$member_model = new Member_Model();

			$id_member = $this->session->userdata('id_member');
			
			$this->data['member'] = $member_model->fetch_by_id($id_member);
			$this->load->model("Barang_satuan_model");

			$barang_satuan_model = new Barang_Satuan_Model();

			$barang_satuan = $barang_satuan_model->fetch_all();
			$jumlah_halaman = ceil(count($barang_satuan) / 16);

			$this->data['jumlah_keranjang'] = $this->shopping_cart->countItems();
			$this->data['barang_satuan'] = $barang_satuan;
			$this->data['jumlah_link'] = $jumlah_halaman;
			
			$this->load->view("home_view", $this->data);
		} else {
			$this->load->model("Barang_satuan_model");

			$barang_satuan_model = new Barang_Satuan_Model();

			$barang_satuan = $barang_satuan_model->fetch_all();

			$this->data['jumlah_keranjang'] = $this->shopping_cart->countItems();
			$this->data['barang_satuan'] = $barang_satuan;
			$this->data['jumlah_link'] = ceil(count($barang_satuan) / 16);
			
			$this->load->view("home_view", $this->data);
		}
	}

	public function registrasi() {
		$this->load->view('registrasi_view');
	}

	public function login() {
		$this->load->view('login_view');
	}

	public function logout() {
		$this->session->unset_userdata('username');

		redirect(site_url());
	}

	public function do_login() {
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$this->load->model("Member_model");

		$member_model = new Member_Model();

		$member = $member_model->login(
			$this->input->post("username"),
			$this->input->post("password")
		);

	 	if(count($member) > 0) {
			$item = $member[0];

			$this->session->set_userdata(array(
				"id_member" => $item['id_member'],
				"nama_depan" => $item['nama_depan'],
				"username" => $item['username']
			));
				
			redirect(site_url());
	 	} else {

	 	}
	}

	public function troli() {
		$keranjang = $this->shopping_cart->fetch_all();

		if(count($keranjang) > 0) {
			$id_barang_array = array();
			$total = 0;
			
			$this->load->model("Barang_satuan_model");
			$this->load->model("Member_model");
			$this->load->model("Foto_barang_satuan_model");
				
			$barang_satuan_model = new Barang_Satuan_Model();
			$member_model = new Member_Model();
			$foto_barang_satuan_model = new Foto_Barang_Satuan_Model();

			foreach($keranjang as $item) {
				$id_barang = $item['id'];
				$qty = $item['qty'];
				$subtotal = $item['subtotal'];

				$tmp = $barang_satuan_model->fetch_by_id($id_barang);

				$foto_barang_satuan = $foto_barang_satuan_model->fetch_by_id_barang_satuan($id_barang);

				$tmp['foto_barang'] = $foto_barang_satuan['foto_barang'];
				$tmp['qty'] = $qty;
				$tmp['subtotal'] = $subtotal;

				$total += $subtotal;
				$barang[] = $tmp;
			}

			$member = $member_model->fetch_by_id('M-20160929-1475153193');

			$this->data['member'] = $member;
			$this->data['total'] = $total;
			$this->data['barang'] = $barang;
			$this->data['jumlah_keranjang'] = $this->shopping_cart->countItems();

			$this->load->view("keranjang_belanja_view", $this->data);
		} else {
			$this->load->view("keranjang_belanja_view");
		}
	}

	public function tambah_ke_keranjang() {
		if($this->input->post("status") == "false") {
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
				$this->shopping_cart->updateCart($id_barang, $kuantitas);
			else 
				$this->shopping_cart->addToCart($data);

			$chart = $this->shopping_cart->fetch_all();

			redirect(site_url());
		} else {
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
				$this->shopping_cart->updateCart($id_barang, $kuantitas);
			else 
				$this->shopping_cart->addToCart($data);

			$chart = $this->shopping_cart->fetch_all();

			redirect(site_url('home/troli'));
		}
	}

	public function detail_produk_paket() {
		$this->data['jumlah_keranjang'] = $this->shopping_cart->countItems();
		
		$this->load->view('detail_produk_paket_view', $this->data);
	}

	public function detail_produk() {
		$this->load->model("Barang_satuan_model");
		$this->load->model("Foto_barang_satuan_model");
		$this->load->model("Member_model");

		$id_member = $this->session->userdata('id_member');
		
		$member_model = new Member_Model();

		$this->data['member'] = $member_model->fetch_by_id($id_member);

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

		$this->data['jumlah_keranjang'] = $this->shopping_cart->countItems();
		$this->data['foto_barang_satuan'] = $foto_barang_satuan;
		$this->data['barang_satuan'] = $barang_satuan;

		$this->load->view('detail_produk_satuan_view', $this->data);
	}

	function is_member_logged_in() {
		$state = $this->session->userdata('username');
		 
		return !empty($state) ? true : false;
	}

	public function checkout() {
		if($this->is_member_logged_in()) {
			$keranjang = $this->shopping_cart->fetch_all();

			if(count($keranjang) > 0) {
				$id_barang_array = array();
				$total = 0;
				
				$this->load->model("Barang_satuan_model");
				$this->load->model("Member_model");
				$this->load->model("Foto_barang_satuan_model");
				$this->load->model("Diskon_model");
					
				$barang_satuan_model = new Barang_Satuan_Model();
				$member_model = new Member_Model();
				$foto_barang_satuan_model = new Foto_Barang_Satuan_Model();
				$diskon_model = new Diskon_Model();

				foreach($keranjang as $item) {
					$id_barang = $item['id'];
					$qty = $item['qty'];
					$subtotal = $item['subtotal'];

					$tmp = $barang_satuan_model->fetch_by_id($id_barang);

					$foto_barang_satuan = $foto_barang_satuan_model->fetch_by_id_barang_satuan($id_barang);

					$tmp['foto_barang'] = $foto_barang_satuan['foto_barang'];
					$diskon = $diskon_model->fetch_by_id($id_barang);

					if(count($diskon) > 0)
						$tmp['diskon'] = $diskon['diskon'];
					else
						$tmp['diskon'] = 0;
					
					$tmp['qty'] = $qty;
					$tmp['tawaran'] = $item['price'];
					$tmp['subtotal'] = $subtotal;

					$total += $subtotal;
					$barang[] = $tmp;
				}

				$id_member = $this->session->userdata('id_member');
				$member = $member_model->fetch_by_id($id_member);

				$this->data['member'] = $member;
				$this->data['total'] = $total;
				$this->data['barang'] = $barang;
				$this->data['jumlah_keranjang'] = $this->shopping_cart->countItems();

				$this->load->view("cekout_view", $this->data);
			} 
		} else {
				$this->load->view('cekout_view');
		}
	}

}
