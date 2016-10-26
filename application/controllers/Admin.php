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
	

	public function index()
	{
		$this->load->view('admin/home_admin_view');
	}

	public function input_barang_paket() 
	{
		$this->load->view("admin/input_barang_paket_view");
	}

	public function daftar_barang_satuan() {
		$this->load->view("admin/daftar_barang_satuan");
	}

	public function daftar_barang_paket() {
		$this->load->view("admin/daftar_barang_paket");
	}

	public function input_barang_satuan() 
	{
		$this->load->view("admin/input_barang_nonpaket_view");
	}

	public function daftar_diskon_barang_paket() {
		$this->load->view("admin/list_diskon_barang_paket_view");
	}

	public function daftar_diskon_barang_satuan() {
		$this->load->view("admin/list_diskon_barang_satuan_view");
	}

	public function stok_barang_paket() {
		$this->load->view("admin/list_stok_barang_paket_view");
	}

	public function stok_barang_satuan() {
		$this->load->view("admin/list_stok_barang_satuan_view");
	}

	public function masukan_kategori_barang() {
		$this->load->view("admin/input_kategori_barang_view");
	}

	public function daftar_kategori_barang() {
		$this->load->view("admin/list_kategori_barang_view");
	}

	public function register_member() {
		$this->load->view("admin/register_member_view");
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


	/**
	 *
	 * tambah  submit data
	 *
	 */
	

	public function submit_tambah_barang_paket() 
	{
		// $nama_paket 	= $this->input->post("nama-paket");
		// $keterangan 	= $this->input->post("keterangan");
		// $stok_barang 	= $this->input->post("stok-barang");
		// $harga_beli 	= $this->input->post("harga-beli");
		// $harga_jual 	= $this->input->post("harga-jual");

		// $path = realpath(APPPATH. '../assets/uploads');

		// $config['upload_path'] 		= $path;
		// $config['allowed_types'] 	= 'gif|jpg|jpeg|png|ico';
		// $config['max_size']  		= 1000;
		// $config['max_width']  		= 1024;
		// $config['max_height']  		= 1024;
		
		// $this->load->library('upload', $config);
		
		// if ( !$this->upload->do_upload('foto-barang')){
		// 	$error = array('error' => $this->upload->display_errors());
		// 	print_r($error);
		// }
		// else{
		// 	$upload_data = $this->upload->data();

		// 	$file_name = '../assets/uploads'. $upload_data['file_name'];
		// 	$date = date('Y-m-d');

		// 	$data_barang = array(
		// 			"nama_paket"  => $nama_paket,
		// 			"deskripsi"   => $keterangan,
		// 			"harga_beli"  => $harga_beli,
		// 			"harga_jual"  => $harga_jual,
		// 			"stok_barang" => $stok_barang,
		// 			"foto" 		  => $file_name,
		// 			"tgl_upload"  => $date
		// 		);

		// 	$this->load->model("Barang_model");

		// 	$barang_model = new Barang_model(); // create object Barang_Model
		// 	// call function insert();
		// 	$id_barang = $barang_model->insert($data_barang);
		// }
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