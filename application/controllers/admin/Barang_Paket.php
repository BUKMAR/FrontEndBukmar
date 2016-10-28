<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_Paket extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('admin/home_admin_view');
	}

	public function submit_tambah_barang() {
		$nama_paket = $this->input->post("nama-paket");
		$keterangan = $this->input->post("keterangan");
		$stok_barang = $this->input->post("stok-barang");
		$harga_beli = $this->input->post("harga-beli");
		$harga_jual = $this->input->post("harga-jual");

		$path = realpath(APPPATH . '../assets/uploads');

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png|ico';
		$config['max_size'] = 3000;
		$config['max_width'] = 3024;
		$config['max_height'] = 3024;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto-barang')) {
			$error = array('error' => $this->upload->display_errors());

			print_r($error);
		} else {
			$upload_data = $this->upload->data();

			$file_name = 'assets/uploads/'. $upload_data['file_name'];
			$date = date('Y-m-d');

			$date_time = new DateTime();

			$id_barang = "BG"+ $date_time->getTimestamp();

			$data_barang = array(
				"id_barang_paket" => $id_barang,
				"nama_paket" => $nama_paket,
				"keterangan" => $keterangan,
				"tgl_upload" => $date,
				"foto_barang" => $file_name,
				"harga_beli" => $harga_beli,
				"harga_jual" => $harga_jual,
				"stok" => $stok_barang
			);

			$this->load->model("Barang_paket_model");

			$barang_paket_model = new Barang_Paket_Model();

			$id_barang = $barang_paket_model->insert($data_barang);

			redirect(site_url() ."/admin/home");
		}
	}

}
