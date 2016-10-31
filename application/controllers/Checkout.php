   <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

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
	public $shopping_cart;

	public function __construct() {
		parent::__construct();
		
		$this->shopping_cart = new Shopping_Cart();
		$this->shopping_cart->setInstance($this->get_instance());
	}

	public function selesai_belanja() {
		$waktu_pengiriman = date('Y-m-d H:i:s', strtotime($this->input->post("waktu-pengiriman"))); 
		$alamat_pengiriman = $this->input->post("alamat-pengiriman"); 
		$keranjang = $this->shopping_cart->fetch_all();
		$id_member = $this->session->userdata('id_member');

		$date = new DateTime();
		
		$id_transaksi = $id_member ."/". date("Y-m-d") ."/". $date->getTimeStamp(); 

		$this->load->model("Barang_satuan_model");
		$this->load->model("Barang_paket_model");
		$this->load->model("Transaksi_model");
		$this->load->model("Detail_transaksi_model");

		$barang_satuan_model = new Barang_Satuan_Model();
		$barang_paket_model = new Barang_Paket_Model();
		$detail_transaksi_model = new Detail_Transaksi_Model();
		$transaksi_model = new Transaksi_Model();
		$now = date("Y-m-d");

		$transaksi_model->insert(
			array(
				"id_transaksi" => $id_transaksi,
				"id_member" => $id_member,
				"tgl_transaksi" => $now,
				"alamat_pengiriman" => $alamat_pengiriman,
				"waktu_pengiriman" => $waktu_pengiriman
			)
		);

		foreach($keranjang as $item) {
			$id_barang = $item['id'];
			$qty = $item['qty'];
			$subtotal = $item['subtotal'];

			$barang_satuan = $barang_satuan_model->fetch_by_id($id_barang);

			if(count($barang_satuan) > 0) {
				$detail_transaksi_model->insert(
					array(
						"id_transaksi" => $id_transaksi,
						"id_barang_satuan" => $barang_satuan['id_barang_satuan'],
						"quantitas" => $qty,
						"subtotal" => $subtotal
					)
				);
			} else {
				$detail_transaksi_model->insert(
					array(
						"id_transaksi" => $id_transaksi,
						"id_barang_paket" => $id_barang,
						"quantitas" => $qty,
						"subtotal" => $subtotal
					)
				);
			}
		}

		$this->shopping_cart->clearAll();
		redirect(site_url());
	}

}
