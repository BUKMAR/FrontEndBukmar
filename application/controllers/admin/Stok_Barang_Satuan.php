 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_Barang_Satuan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function ajax_list_stok_barang_satuan() {
		$this->load->model("Barang_satuan_model");
		$this->load->model("Foto_barang_satuan_model");

		$barang_satuan_model = new Barang_Satuan_Model();
		$foto_barang_satuan_model = new Foto_Barang_Satuan_Model();

		$list = $barang_satuan_model->get_datatables();
	    $data = array();
	    $no = $_POST['start'];

	    //i berfungsi untuk id modal untuk data target
	    $i = 0;
	    foreach ($list as $barang_satuan) {
	    	$no++;
	        $row = array();

	        $date_formated = date_format(date_create($barang_satuan->tgl_upload), "d-m-Y");

	        $row[] = $no;
	        $row[] = $barang_satuan->id_barang_satuan;
	        $row[] = $barang_satuan->nama_barang;
	        $row[] = $date_formated;

	        $foto_barang_satuan = $foto_barang_satuan_model->fetch_by_id_barang_satuan($barang_satuan->id_barang_satuan);
	        //echo json_encode($foto_barang_satuan);

	        $img = count($foto_barang_satuan) > 0 ? $foto_barang_satuan['foto_barang'] : '';

	        $row[] = "<img style='
	            		height: 58px;
	            		width: 75px;
	            		padding: 5px 5px 5px 5px;
	            		border: 1px solid #dedede;
	            		border-radius: 3px 3px 3px 3px;' src='". base_url($img) ."' />";
	        $row[] = $barang_satuan->stok;
	        $row[] = "<button class='btn btn-lg btn-info' data-toggle='modal' data-target='#id-$i'>
 						<span class='glyphicon glyphicon-pencil'></span>
	             		</button>

	             		<button class='btn btn-lg btn-danger brg-delete'
	             		data-brg-id='". $barang_satuan->id_barang_satuan ."'
	             		data-brg-nama='". $barang_satuan->nama_barang ."'>
	             		<span class='glyphicon glyphicon-trash'></span></button>";

	            $data[] = $row;

	            $i++;
	    }

	    $output = array(
	       	"draw" => $_POST['draw'],
	        "recordsTotal" => $barang_satuan_model->count_all(),
	        "recordsFiltered" => $barang_satuan_model->count_filtered(),
	        "data" => $data,
	    );

	    //output to json format
	    echo json_encode($output);
	}

	public function ajax_delete_barang_satuan() {
		$this->load->model("barang_satuan_model");

		$barang_satuan_model = new barang_satuan_model();

		$barang_satuan_model->delete($this->input->post("id"));

		echo json_encode(array("sukses"));
	}

	public function submit_edit_barang_satuan() {
		$this->load->model("Barang_satuan_model");

		$barang_satuan_model = new Barang_Satuan_Model();

		$barang_satuan_model->update(
			$this->input->post('id-barang'),
			array(
				"stok" => $this->input->post("stok")
			)
		);

		redirect(site_url() ."/admin/home/stok_barang_satuan");
	}
	
}
