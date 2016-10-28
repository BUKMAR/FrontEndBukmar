<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_Satuan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function submit_tambah_barang() {
		$id_detail_kategori = $this->input->post("id-detail-kategori");
		$nama_barang = $this->input->post("nama-barang");
		$keterangan = $this->input->post("keterangan");
		$stok_barang = $this->input->post("stok-barang");
		$id_brand = $this->input->post("id-brand");
		$harga_beli = $this->input->post("harga-beli");
		$harga_jual = $this->input->post("harga-jual");
		$harga_tawar = $this->input->post("harga-tawar");
		$foto_produk_1 = $this->input->post("foto-produk-1");
		$foto_produk_2 = $this->input->post("foto-produk-2");
		$foto_produk_3 = $this->input->post("foto-produk-3");
		$tgl_kadaluarsa = date_format(date_create($this->input->post("tgl-kadaluarsa")), date("Y-m-d"));

		$path = realpath(APPPATH . '../assets/uploads');

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png|ico';
		$config['max_size'] = 4000;
		$config['max_width'] = 2024;
		$config['max_height'] = 2024;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto-produk-1') && empty($foto_produk_1)) {
			$error = array('error' => $this->upload->display_errors());

			print_r($error);
		}
		else {
			$date = new DateTime();

			$id_barang_satuan = "BG". $date->getTimestamp();
			$tgl_upload = date('Y-m-d');

			$data_barang = array(
				"id_barang_satuan" => $id_barang_satuan,
				"id_detail_kategori" => $id_detail_kategori,
				"id_brand" => $id_brand,
				"nama_barang" => $nama_barang,
				"keterangan" => $keterangan,
				"tgl_upload" => $tgl_upload,
				"harga_beli" => $harga_beli,
				"harga_jual" => $harga_jual,
				"harga_tawar" => $harga_tawar,
				"stok" => $stok_barang,
				"tgl_kadaluarsa" => $tgl_kadaluarsa
			);

			$this->load->model("Barang_satuan_model");
			$this->load->model("Foto_barang_satuan_model");

			$barang_model = new Barang_Satuan_Model();
			$foto_barang_satuan_model = new Foto_Barang_Satuan_Model();

			$id_barang = $barang_model->insert($data_barang);

			$upload_data_produk_1 = $this->upload->data();
			$file_name_produk_1 = 'assets/uploads/'. $upload_data_produk_1['file_name'];
			
			$foto_barang_satuan_model->insert(array(
					"id_barang" => $id_barang_satuan,
					"foto_barang" => $file_name_produk_1
			));
			
			$this->simpan_foto($foto_produk_2, $id_barang_satuan,'foto-produk-2');
			$this->simpan_foto($foto_produk_3, $id_barang_satuan,'foto-produk-3');

			//redirect(site_url() ."admin / list_data_barang");
		}
	}

	public function simpan_foto($input, $id_barang_satuan, $data) {
		$foto_barang_satuan_model = new Foto_Barang_Satuan_Model();
		
		if (!empty($input)) {
			$this->upload->do_upload($data);

			$upload_data_produk = $this->upload->data();
			$file_name_produk = 'assets/uploads/'. $upload_data_produk['file_name'];

			$foto_barang_satuan_model->insert(array(
					"id_barang" => $id_barang_satuan,
					"foto_barang" => $file_name_produk
			));
		}
	}
	
	public function ajax_fetch_detail_kategori() {
		$id_kategori = $this->input->get("id_kategori");

		$this->load->model("Detail_kategori_model");

		$detail_kategori_model = new Detail_Kategori_Model();

		$detail_kategori = $detail_kategori_model->fetch_by_id_kategori($id_kategori);

		echo json_encode($detail_kategori);
	}
	
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */