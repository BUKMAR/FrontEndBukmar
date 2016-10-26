<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

    /**
	 *
	 * view load page
	 *
	 */

	public function index() {
		$this->load->view('admin/home_admin_view');
	}

	public function barang_paket() {
		$this->load->view('admin/in_barang_paket_view');
	}

	public function barang_satuan() {
		$this->load->view('admin/in_barang_nonpaket_view');
	}

	public function register_member() {
		$this->load->view('admin/register_member_view');
	}

	/**
	 *
	 * view data member
	 *
	 */

	public function list_member() {
		$this->load->model("Register_model");

		$register_model = new Register_Model();

		$jumlah_data = $register_model->count_all();
		$data_ku = $register_model->fetch_all();
		
		$this->data['jumlah_data'] = $jumlah_data;
		$this->data['data_register'] = $data_ku;
		// load view list data member dan sent data

		$this->load->view("admin/list_member_view", $this->data);
	}

	
	public function submit_tambah_barang() {
		$nama_barang = $this->input->post("nama-barang");
		$keterangan = $this->input->post("keterangan");
		$stok_barang = $this->input->post("stok-barang");
		$id_brand = $this->input->post("id_brand");
		$harga_beli = $this->input->post("harga-beli");
		$harga_jual = $this->input->post("harga-jual");
		$harga_tawar = $this->input->post("harga-tawar");
		$foto_produk_1 = $this->input->post("foto-produk-1");
		$foto_produk_2 = $this->input->post("foto-produk-2");
		$foto_produk_3 = $this->input->post("foto-produk-3");

		$path = realpath(APPPATH . '../assets/uploads');

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png|ico';
		$config['max_size'] = 1000;
		$config['max_width'] = 1024;
		$config['max_height'] = 1024;

		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('foto-produk-1') && empty($foto_produk_1)) {
			$error = array('error' => $this->upload->display_errors());

			print_r($error);
		}
		else {
			$upload_data_produk_1 = $this->upload->data();
			$file_name_produk_1 = 'assets/uploads/'. $upload_data_produk_1['file_name'];
						
			if(!empty($foto_produk_2) && !empty($foto_produk_3)) {
				
			}

			$date = date('Y-m-d');

			$data_barang = array(
				"nama_barang" => $nama_barang,
				"keterangan" => $keterangan,
				"tgl_upload" => $date,
				"foto" => $file_name_produk_1,
				"harga_beli" => $harga_beli,
				"harga_jual" => $harga_jual,
				"stok" => $stok_barang
			);

			$this->load->model("Barang_Model");

			$barang_model = new Barang_Model();

			$id_barang = $barang_model->insert($data_barang);

			redirect(site_url() ."admin/list_data_barang");
		}
		
	}

	public function submit_tambah_register() {
		$username 			= $this->input->post('username');
		$nama_lengkap 		= $this->input->post('nama-lengkap');
		$alamat_member 		= $this->input->post('alamat-member');
		$kelurahan 			= $this->input->post('kelurahan');
		$kecamatan 			= $this->input->post('kecamatan');
		$kabupaten 			= $this->input->post('kabupaten');
		$nomor_handphone 	= $this->input->post('nomor-handphone');
		$jumlah_anggota 	= $this->input->post('jumlah-anggota');
		$pekerjaan 			= $this->input->post('pekerjaan');
		$alamat_email		= $this->input->post('alamat-email');
		$jenis_kelamin    	= $this->input->post('jenis-kelamin');

		$tanggal_lahir		= $this->input->post('tanggal-lahir');
		$bulan_lahir		= $this->input->post('bulan-lahir');
		$tahun_lahir		= $this->input->post('tahun-lahir');

		$set_tgl_lahir = $tahun_lahir."/".$bulan_lahir."/".$tanggal_lahir;

		$data_tambah_register = array(
				'username' 			=> $username,
				'nama_lengkap' 		=> $nama_lengkap,
				'alamat_member' 	=> $alamat_member,
				'kelurahan' 		=> $kelurahan,
				'kecamatan' 		=> $kecamatan,
				'kabupaten' 		=> $kabupaten,
				'nomor_handphone' 	=> $nomor_handphone,
				'jumlah_anggota' 	=> $jumlah_anggota,
				'pekerjaan' 		=> $pekerjaan,
				'alamat_email'		=> $alamat_email,
				'jenis_kelamin'		=> $jenis_kelamin,
				'tanggal_lahir'		=> $set_tgl_lahir
			);

		echo "<pre>";
			print_r($data_tambah_register);
		echo "</pre>";

		$this->load->model('Register_Model');
		$register_model = new Register_Model();

		$id_register = $register_model->tambah_data_member($data_tambah_register);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */