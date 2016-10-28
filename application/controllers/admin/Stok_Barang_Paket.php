   <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_Barang_Paket extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function ajax_list_stok_barang_paket() {
		$this->load->model("barang_paket_model");

		$barang_paket_model = new barang_paket_Model();

		$list = $barang_paket_model->get_datatables();
	    $data = array();
	    $no = $_POST['start'];

	    //i berfungsi untuk id modal untuk data target
	    $i = 0;
	    foreach ($list as $barang_paket) {
	    	$no++;
	        $row = array();

	        $date_formated = date_format(date_create($barang_paket->tgl_upload), "d-m-Y");

	        $row[] = $no;
	        $row[] = $barang_paket->id_barang_paket;
	        $row[] = $barang_paket->nama_paket;
	        $row[] = $date_formated;
	        $img = $barang_paket->foto_barang;

	        $row[] = "<img style='
	            		height: 58px;
	            		width: 75px;
	            		padding: 5px 5px 5px 5px;
	            		border: 1px solid #dedede;
	            		border-radius: 3px 3px 3px 3px;' src='". base_url($img) ."' />";
	        $row[] = $barang_paket->stok;
	        $row[] = "<button class='btn btn-lg btn-info' data-toggle='modal' data-target='#id-$i'>
 						<span class='glyphicon glyphicon-pencil'></span>
	             		</button>

	             		<button class='btn btn-lg btn-danger brg-delete'
	             		data-brg-id='". $barang_paket->id_barang_paket ."'
	             		data-brg-nama='". $barang_paket->nama_paket ."'>
	             		<span class='glyphicon glyphicon-trash'></span></button>";

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

	public function ajax_delete_barang_paket() {
		$this->load->model("Barang_paket_model");

		$barang_paket_model = new barang_paket_model();

		$barang_paket_model->delete($this->input->post("id"));

		echo json_encode(array("sukses"));
	}

	public function submit_edit_barang_paket() {
		$this->load->model("Barang_paket_model");

		$barang_paket_model = new Barang_Paket_Model();

		$barang_paket_model->update(
			$this->input->post('id-barang'),
			array(
				"nama_paket" => $this->input->post("nama-paket"),
				"stok" => $this->input->post("stok")
			)
		);

		redirect(site_url() ."/admin/home/stok_barang_paket");
	}
	
}
