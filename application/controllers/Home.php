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
	public function index() {
		$this->load->view('home_view');
	}

	public function registrasi() {
		$this->load->view('registrasi_view');
	}

	public function login() {
		$this->load->view('login_view');
	}

	public function troli() {
		$this->load->view('keranjang_belanja_view');
	}

	public function detail_produk_paket() {
		$this->load->view('detail_produk_paket_view');
	}

	public function detail_produk_satuan() {
		$this->load->view('detail_produk_satuan_view');
	}

	public function cekout() {
		$this->load->view('cekout_view');
	}

}
