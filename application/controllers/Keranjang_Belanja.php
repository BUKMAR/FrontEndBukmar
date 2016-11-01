<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang_Belanja extends CI_Controller {

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

	public function ajax_delete_barang_from_chart() {
		$id_barang = $this->input->post("id");

		$this->shopping_cart->removeFromCart($id_barang);

		echo json_encode("success");
	}

	public function ajax_tambah_kuantitas_barang() {
		$id_barang = $this->input->post("id");
		$qty = $this->input->post("kuantitas");

		$this->shopping_cart->updateCart($id_barang, $qty);

		echo json_encode("success");
	}

}
