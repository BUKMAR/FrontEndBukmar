    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Transaksi extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function cetak() {
		$id_transaksi = $this->input->post("id-transaksi");
		
		$this->load->model("Transaksi_model");
		$this->load->model("Detail_transaksi_model");

		$transaksi_model = new Transaksi_Model();
		$detail_transaksi_model = new Detail_Transaksi_Model();

		$header_faktur = $transaksi_model->fetch_header_faktur($id_transaksi);
		$faktur = $detail_transaksi_model->fetch_faktur($id_transaksi);
		$total = $detail_transaksi_model->sum_total_pembelian($id_transaksi);

		$this->data['header_faktur'] = $header_faktur;
		$this->data['faktur'] = $faktur;
		$this->data['total'] = $total;

		$this->load->view("admin/cetak_view", $this->data);
	}

	public function ajax_list_detail_transaksi() {
		$id_transaksi = $this->input->post("id");
		
		$this->load->model("Detail_transaksi_model");

		$detail_transaksi_model = new Detail_Transaksi_Model();

		$list = $detail_transaksi_model->get_datatables($id_transaksi);
	    $data = array();
	    $no = $_POST['start'];

	    $i = 0;
	    foreach ($list as $detail_transaksi) {
	        $no++;
	        $row = array();

	        $row[] = $no;
	        $row[] = $detail_transaksi->id_barang_satuan;
	        $row[] = $detail_transaksi->nama_barang;
	        $row[] = "Rp. ". number_format($detail_transaksi->harga_jual, 0, ".", ".");
	        $row[] = $detail_transaksi->quantitas;
	        $row[] = "Rp. ". number_format($detail_transaksi->subtotal, 0, ".", ".");
	        

	        $data[] = $row;
	        $i++;
	    }

	    $output = array(
	       	"draw" => $_POST['draw'],
	        "recordsTotal" => $detail_transaksi_model->count_all(),
	        "recordsFiltered" => $detail_transaksi_model->count_filtered(),
	        "data" => $data,
	    );

	    //output to json format
	    echo json_encode($output);
	}

}
