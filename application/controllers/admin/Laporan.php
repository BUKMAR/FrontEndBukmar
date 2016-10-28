<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->load->view('admin/laporan_penjualan_view');
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/admin/Laporan.php */