   <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function submit_edit_transaksi() {
		$id_transaksi = $this->input->post('id-transaksi');
		$this->load->model("Transaksi_model");

		$transaksi_model = new Transaksi_Model();

		$transaksi_model->update(
			$id_transaksi,
			array(
				"status_pengiriman" => $this->input->post("status-pengiriman")
			)
		);

		redirect(base_url("index.php/admin/home/daftar_transaksi"));
	}

	public function ajax_list_transaksi() {
		$this->load->model("Transaksi_model");

		$transaksi_model = new Transaksi_Model();

		$list = $transaksi_model->get_datatables();
	    $data = array();
	    $no = $_POST['start'];

	    //i berfungsi untuk id modal untuk data target
	    $i = 0;
	    foreach ($list as $transaksi) {
	        $no++;
	        $row = array();

	        $row[] = $no;
	        $row[] = $transaksi->id_transaksi;
	        $row[] = $transaksi->nama_member;
	        $row[] = date_format(date_create($transaksi->tgl_transaksi), date('d-m-Y'));
	        $row[] = $transaksi->status_pengiriman;
	        $row[] = $transaksi->waktu_pengiriman;

	        $row[] = "<button class='btn btn-sm btn-info' data-toggle='modal' data-target='#id-$i'>
 						   <span class='glyphicon glyphicon-pencil'></span>
	             		   </button>

	             		   <button class='btn btn-sm btn-danger transaksi-delete'
	             		   data-transaksi-id='". $transaksi->id_transaksi ."'
	             		   data-transaksi-nama='". $transaksi->nama_member ."'>
	             		   <span class='glyphicon glyphicon-trash'></span></button>

	             		   <a class='btn btn-sm btn-success' href='". base_url('index.php/admin/home/detail_transaksi?id_transaksi='. $transaksi->id_transaksi) ."'>
						   <span class='glyphicon glyphicon-zoom-in'></span>
	             		   </a>";

	        $data[] = $row;
	        $i++;
	    }

	    $output = array(
	       	"draw" => $_POST['draw'],
	        "recordsTotal" => $transaksi_model->count_all(),
	        "recordsFiltered" => $transaksi_model->count_filtered(),
	        "data" => $data,
	    );

	    //output to json format
	    echo json_encode($output);
	}

	public function ajax_delete_transaksi() {
		$this->load->model("transaksi_model");

		$barang_model = new transaksi_Model();

		$barang_model->delete($this->input->post("id"));

		echo json_encode(array("sukses"));
	}	

}
