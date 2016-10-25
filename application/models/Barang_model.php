<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	private $table = 'barang';
	private $colomn_order = 
		array(
			null,
			'id_barang',
			'nama_paket',
			'tgl_upload',
			'harga_beli',
			'harga_jual',
			'foto'
		);

	private $colomn_search = 
		array(
			'id_barang',
			'nama_paket',
			'tgl_upload',
			'harga_beli',
			'harga_jual',
			'foto'
		);

	public function __construct() {
		parent::__construct();
	}

	public function insert($data) {
		$this->db->insert("barang_paket", $data);

		$insert_id = $this->db->insert_id();

		return $insert_id;
	}

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */