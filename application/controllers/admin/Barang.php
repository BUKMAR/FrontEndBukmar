<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

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
		$jenis_barang = $this->input->post("jenis-barang");
		$kategori_usia = $this->input->post("kategori-usia");
		$berat_barang = $this->input->post("berat-barang");
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
		} else {
			$upload_data_produk_1 = $this->upload->data();
			$file_name_produk_1 = 'assets/uploads/'. $upload_data_produk_1['file_name'];

			$date = new DateTime();

			if($jenis_barang == "Satuan")
				$id_barang = "BG". $date->getTimestamp();
			else if($jenis_barang == "Paket")
				$id_barang = "PKT". $date->getTimestamp();

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
				"jenis_barang" => $jenis_barang,
				"stok" => $stok_barang,
				"tgl_kadaluarsa" => $tgl_kadaluarsa,
				"kategori_usia" => $kategori_usia,
				"berat" => $berat_barang
			);

			$this->load->model("barang_model");
			$this->load->model("Foto_barang_model");

			$barang_model = new Barang_Model();
			$foto_barang_model = new Foto_barang_Model();

			$barang_model->insert($data_barang);

			$foto_barang_model->insert(array(
					"id_barang" => $id_barang,
					"foto_barang" => $file_name_produk_1
			));
			
			if($jenis_barang != "Paket") {
				$this->simpan_foto($foto_produk_2, $id_barang,'foto-produk-2');
				$this->simpan_foto($foto_produk_3, $id_barang,'foto-produk-3');
			}
			
			redirect(site_url() ."/admin/home/daftar_barang");
		}
	}
	
	public function edit_barang() {
		$this->load->model("Barang_model");
		$this->load->model("Kategori_model");

		$kategori_model = new Kategori_Model();
		$barang_model = new Barang_Model();

		$this->data['kategori'] = $kategori_model->fetch_all();
		$this->data["barang"] = $barang_model->fetch_by_id($this->input->get("id_barang"));

		$this->load->view("admin/edit_barang_view", $this->data);
	}

	public function ajax_list_barang() {
		$this->load->model("Foto_barang_model");
		$this->load->model("Barang_model");

		$barang_paket_model = new Barang_Model();
		$foto_barang_model = new Foto_barang_Model();

		$list = $barang_paket_model->get_datatables();
	    $data = array();
	    $no = $_POST['start'];

	    //i berfungsi untuk id modal untuk data target
	    $i = 0;
	    foreach ($list as $barang) {
	        $no++;
	        $row = array();

	        $date_formated = date_format(date_create($barang->tgl_upload), "d-m-Y");
	        $harga_jual = "Rp. ". number_format($barang->harga_jual, 0, ".", ".");
	        $harga_beli = "Rp. ". number_format($barang->harga_beli, 0, ".", ".");

	        $row[] = $no;
	        $row[] = $barang->id_barang;
	        $row[] = $barang->nama_barang;
	        $row[] = $date_formated;
	        $row[] = $harga_jual;
	        $row[] = $harga_beli;

	        $foto_barang = $foto_barang_model->fetch_by_id_barang($barang->id_barang);

	        $img = count($foto_barang) > 0 ? $foto_barang['foto_barang'] : '' ;

	        $row[] = "<img style='
	            			height: 58px;
	            			width: 75px;
	            			padding: 5px 5px 5px 5px;
	            			border: 1px solid #dedede;
	            			border-radius: 3px 3px 3px 3px;' src='". base_url($img) ."' />";

	        $row[] = "<a class='btn btn-sm btn-info' href='". base_url('index.php/admin/barang') ."/edit_barang?id_barang=". $barang->id_barang ."'>
 						   <span class='glyphicon glyphicon-pencil'></span>
	             		   </a>

	             		   <button class='btn btn-sm btn-danger brg-delete'
	             		   data-brg-id='". $barang->id_barang ."'
	             		   data-brg-nama='". $barang->nama_barang ."'>
	             		   <span class='glyphicon glyphicon-trash'></span></button>

	             		   <button class='btn btn-sm btn-success' data-toggle='modal' data-target='#id-$i'>
						   <span class='glyphicon glyphicon-zoom-in'></span>
	             		   </button>";

	        $data[] = $row;
	        $i++;
	    }

	    $output = array(
	       	"draw" => $_POST['draw'],
	        "recordsTotal" => $barang_paket_model->count_all(),
	        "recordsFiltered" => $barang_paket_model->count_filtered(),
	        "data" => $data,
	    );

	    //output to json format
	    echo json_encode($output);
	}

	public function submit_edit_barang() {
		$id_barang = $this->input->post("id-barang");
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
		$jenis_barang = $this->input->post("jenis-barang");
		$kategori_usia = $this->input->post("kategori-usia");
		$berat_barang = $this->input->post("berat-barang");
		$tgl_kadaluarsa = date_format(date_create($this->input->post("tgl-kadaluarsa")), date("Y-m-d"));

		$this->load->model("Foto_Barang_Model");

		$foto_barang_model = new Foto_Barang_Model();

		$foto_barang = $foto_barang_model->fetch_by_id_barang($id_barang);

		echo json_encode($foto_barang);

		$path = realpath(APPPATH . '../assets/uploads');

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png|ico';
		$config['max_size'] = 4000;
		$config['max_width'] = 2024;
		$config['max_height'] = 2024;

		$this->load->library('upload', $config);

		if(empty($foto_produk_1)) {
			echo "foto 1 Kosong<br/>";
		} else {
			echo "foto 1 ada<br/>"; 
		}

		if(empty($foto_produk_2)) {
			echo "foto 2 Kosong<br/>";
		} else {
			echo "foto 2 ada<br/>"; 
		}

		if(empty($foto_produk_3)) {
			echo "foto 3 Kosong<br/>";
		} else {
			echo "foto 3 ada<br/>"; 
		}
	}

	private function update_barang($id_barang, $id_foto, $foto) {
		if (!$this->upload->do_upload($foto)) {
			$error = array('error' => $this->upload->display_errors());

			print_r($error);
		}
		else {
			$upload_data_produk = $this->upload->data();
			$file_name_produk = 'assets/uploads/'. $upload_data_produk['file_name'];

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
				"jenis_barang" => $jenis_barang,
				"stok" => $stok_barang,
				"tgl_kadaluarsa" => $tgl_kadaluarsa,
				"kategori_usia" => $kategori_usia,
				"berat" => $berat_barang
			);

			$this->load->model("barang_model");
			$this->load->model("Foto_barang_model");

			$barang_model = new Barang_Model();
			$foto_barang_model = new Foto_barang_Model();

			$barang_model->update($id_barang, $data_barang);

			$foto_barang_model->update($id_foto, array(
					"foto_barang" => $file_name_produk
			));
		}
	}

	public function simpan_foto($input, $id_barang, $data) {
		$foto_barang_model = new Foto_barang_Model();
		
		$this->upload->do_upload($data);

		$upload_data_produk = $this->upload->data();
		$file_name_produk = 'assets/uploads/'. $upload_data_produk['file_name'];

		$foto_barang_model->insert(array(
			"id_barang" => $id_barang,
			"foto_barang" => $file_name_produk
		));
	}

	public function ajax_delete_barang() {
		$this->load->model("barang_model");

		$barang_model = new barang_Model();

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
