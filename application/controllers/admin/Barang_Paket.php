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

			$id_barang_paket = "BG"+ $date_time->getTimestamp();

			$data_barang = array(
				"id_barang_paket" => $id_barang_paket,
				"nama_paket" => $nama_paket,
				"keterangan" => $keterangan,
				"tgl_upload" => $date,
				"foto_barang" => $file_name,
				"harga_beli" => $harga_beli,
				"harga_jual" => $harga_jual,
				"stok" => $stok_barang
			);

			$this->load->model("Barang_paket_model");

			$barang_paket_paket_model = new Barang_Paket_Model();

			$id_barang_paket = $barang_paket_paket_model->insert($data_barang);

			redirect(site_url() ."/admin/home");
		}
	}

	public function daftar_barang_paket() {
		$this->load->view("admin/daftar_barang_paket_view");
	}

	public function edit_barang_paket() {
		$this->load->model("Barang_paket_model");

		$barang_paket_model = new Barang_Paket_Model();

		$this->data["barang_paket"] = $barang_paket_model->fetch_by_id($this->input->get("id_barang_paket"));

		$this->load->view("admin/edit_barang_paket_view", $this->data);
	}

	public function submit_edit_barang_paket() {
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

			$date_time = new DateTime();

			$data_barang = array(
				"nama_paket" => $nama_paket,
				"keterangan" => $keterangan,
				"foto_barang" => $file_name,
				"harga_beli" => $harga_beli,
				"harga_jual" => $harga_jual,
				"stok" => $stok_barang
			);

			$this->load->model("Barang_paket_model");

			$barang_paket_paket_model = new Barang_Paket_Model();

			$id_barang_paket = $barang_paket_paket_model->update(
				$this->input->post("id-barang-paket"),
				$data_barang
			);

			redirect(site_url() ."/admin/barang_paket/daftar_barang_paket");
		}
	}

	public function ajax_list_barang_paket() {
		$this->load->model("Barang_paket_model");

		$barang_paket_paket_model = new Barang_Paket_Model();

		$list = $barang_paket_paket_model->get_datatables();
	    $data = array();
	    $no = $_POST['start'];

	    //i berfungsi untuk id modal untuk data target
	    $i = 0;
	    foreach ($list as $barang_paket) {
	        $no++;
	        $row = array();

	        $date_formated = date_format(date_create($barang_paket->tgl_upload), "d-m-Y");
	        $harga_jual = "Rp. ". number_format($barang_paket->harga_jual, 0, ".", ".");
	        $harga_beli = "Rp. ". number_format($barang_paket->harga_beli, 0, ".", ".");

	        $row[] = $no;
	        $row[] = $barang_paket->id_barang_paket;
	        $row[] = $barang_paket->nama_paket;
	        $row[] = $date_formated;
	        $row[] = $harga_jual;
	        $row[] = $harga_beli;
	        $row[] = "<img style='
	            			height: 58px;
	            			width: 75px;
	            			padding: 5px 5px 5px 5px;
	            			border: 1px solid #dedede;
	            			border-radius: 3px 3px 3px 3px;' src='". base_url($barang_paket->foto_barang) ."' />";
	        $row[] = "<a class='btn btn-sm btn-info' href='edit_barang_paket?id_barang_paket=". $barang_paket->id_barang_paket ."'>
 						   <span class='glyphicon glyphicon-pencil'></span>
	             		   </a>

	             		   <button class='btn btn-sm btn-danger brg-delete'
	             		   data-brg-id='". $barang_paket->id_barang_paket ."'
	             		   data-brg-nama-paket='". $barang_paket->nama_paket ."'>
	             		   <span class='glyphicon glyphicon-trash'></span></button>

	             		   <button class='btn btn-sm btn-success'>
						   <span class='glyphicon glyphicon-zoom-in'></span>
	             		   </button>";

	        $data[] = $row;
	        $i++;
	    }

	    $output = array(
	       	"draw" => $_POST['draw'],
	        "recordsTotal" => $barang_paket_paket_model->count_all(),
	        "recordsFiltered" => $barang_paket_paket_model->count_filtered(),
	        "data" => $data,
	    );

	    //output to json format
	    echo json_encode($output);
	}

	public function ajax_delete_barang_paket() {
		$this->load->model("Barang_paket_model");

		$barang_model = new Barang_Paket_Model();

		$barang_model->delete($this->input->post("id"));

		echo json_encode(array("sukses"));
	}
}
