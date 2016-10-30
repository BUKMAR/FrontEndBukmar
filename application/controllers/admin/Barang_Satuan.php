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

		if (!$this->upload->do_upload('foto-produk-1')) {
			$error = array('error' => $this->upload->display_errors());

			print_r($error);
		}
		else {
			$upload_data_produk_1 = $this->upload->data();
			$file_name_produk_1 = 'assets/uploads/'. $upload_data_produk_1['file_name'];

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

			$barang_model->insert($data_barang);

			$foto_barang_satuan_model->insert(array(
					"id_barang" => $id_barang_satuan,
					"foto_barang" => $file_name_produk_1
			));
			
			$this->simpan_foto($foto_produk_2, $id_barang_satuan,'foto-produk-2');
			$this->simpan_foto($foto_produk_3, $id_barang_satuan,'foto-produk-3');

			redirect(site_url() ."/admin/barang_satuan/daftar_barang_satuan");
		}
	}
	
	public function edit_barang_satuan() {
		$this->load->model("Barang_satuan_model");
		$this->load->model("Kategori_model");

		$kategori_model = new Kategori_Model();
		$barang_satuan_model = new Barang_Satuan_Model();

		$this->data['kategori'] = $kategori_model->fetch_all();
		$this->data["barang_satuan"] = $barang_satuan_model->fetch_by_id($this->input->get("id_barang_satuan"));

		$this->load->view("admin/edit_barang_satuan_view", $this->data);
	}

	public function submit_edit_barang_satuan() {
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
			$upload_data_produk_1 = $this->upload->data();
			$file_name_produk_1 = 'assets/uploads/'. $upload_data_produk_1['file_name'];

			echo $file_name_produk_1;
			/*
			$date = new DateTime();

			$id_barang = "BG". $date->getTimestamp();
			$tgl_upload = date('Y-m-d');

			$data_barang = array(
				"id_barang" => $id_barang,
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

			$id_barang_satuan = $barang_model->insert($data_barang);
			
			$foto_barang_satuan_model->insert(array(
					"id_barang" => $id_barang_satuan,
					"foto_barang" => $file_name_produk_1
			));
			
			$this->simpan_foto($foto_produk_2, $id_barang_satuan,'foto-produk-2');
			$this->simpan_foto($foto_produk_3, $id_barang,'foto-produk-3');

			//redirect(site_url() ."admin / list_data_barang");
			*/
		}
	}

	public function simpan_foto($input, $id_barang, $data) {
		$foto_barang_satuan_model = new Foto_Barang_Satuan_Model();
		
		$this->upload->do_upload($data);

		$upload_data_produk = $this->upload->data();
		$file_name_produk = 'assets/uploads/'. $upload_data_produk['file_name'];

		$foto_barang_satuan_model->insert(array(
			"id_barang" => $id_barang,
			"foto_barang" => $file_name_produk
		));
	}

	public function daftar_barang_satuan() {
		$this->load->view("admin/daftar_barang_satuan_view");
	}

	public function ajax_list_barang_satuan() {
		$this->load->model("Foto_barang_satuan_model");
		$this->load->model("Barang_satuan_model");

		$barang_satuan_paket_model = new Barang_Satuan_Model();
		$foto_barang_satuan_model = new Foto_Barang_Satuan_Model();

		$list = $barang_satuan_paket_model->get_datatables();
	    $data = array();
	    $no = $_POST['start'];

	    //i berfungsi untuk id modal untuk data target
	    $i = 0;
	    foreach ($list as $barang_satuan) {
	        $no++;
	        $row = array();

	        $date_formated = date_format(date_create($barang_satuan->tgl_upload), "d-m-Y");
	        $harga_jual = "Rp. ". number_format($barang_satuan->harga_jual, 0, ".", ".");
	        $harga_beli = "Rp. ". number_format($barang_satuan->harga_beli, 0, ".", ".");

	        $row[] = $no;
	        $row[] = $barang_satuan->id_barang_satuan;
	        $row[] = $barang_satuan->nama_barang;
	        $row[] = $date_formated;
	        $row[] = $harga_jual;
	        $row[] = $harga_beli;

	        $foto_barang_satuan = $foto_barang_satuan_model->fetch_by_id_barang_satuan($barang_satuan->id_barang_satuan);

	        $img = count($foto_barang_satuan) > 0 ? $foto_barang_satuan['foto_barang'] : '' ;

	        $row[] = "<img style='
	            			height: 58px;
	            			width: 75px;
	            			padding: 5px 5px 5px 5px;
	            			border: 1px solid #dedede;
	            			border-radius: 3px 3px 3px 3px;' src='". base_url($img) ."' />";

	        $row[] = "<a class='btn btn-sm btn-info' href='edit_barang_satuan?id_barang_satuan=". $barang_satuan->id_barang_satuan ."'>
 						   <span class='glyphicon glyphicon-pencil'></span>
	             		   </a>

	             		   <button class='btn btn-sm btn-danger brg-delete'
	             		   data-brg-id='". $barang_satuan->id_barang_satuan ."'
	             		   data-brg-nama='". $barang_satuan->nama_barang ."'>
	             		   <span class='glyphicon glyphicon-trash'></span></button>

	             		   <button class='btn btn-sm btn-success'>
						   <span class='glyphicon glyphicon-zoom-in'></span>
	             		   </button>";

	        $data[] = $row;
	        $i++;
	    }

	    $output = array(
	       	"draw" => $_POST['draw'],
	        "recordsTotal" => $barang_satuan_paket_model->count_all(),
	        "recordsFiltered" => $barang_satuan_paket_model->count_filtered(),
	        "data" => $data,
	    );

	    //output to json format
	    echo json_encode($output);
	}

	public function ajax_delete_barang_satuan() {
		$this->load->model("Barang_satuan_model");

		$barang_model = new Barang_Satuan_Model();

		$barang_model->delete($this->input->post("id"));

		echo json_encode(array("sukses"));
	}	
	
	public function ajax_fetch_detail_kategori() {
		$id_kategori = $this->input->get("id_kategori");

		$this->load->model("Detail_kategori_model");

		$detail_kategori_model = new Detail_Kategori_Model();

		$detail_kategori = $detail_kategori_model->fetch_by_id_kategori($id_kategori);

		echo json_encode($detail_kategori);
	}
	
}
