  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_Barang extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input_kategori_barang() {
		$this->load->view('admin/in_kategori_barang_view');
	}

	public function submit_tambah_kategori_barang() {
		$this->load->model("Kategori_model");

		$kategori_barang = new Kategori_Model();
		$date_time = new DateTime();

		$id_kategori = "KTG". $date_time->getTimeStamp();

		$id_kategori = $kategori_barang->insert(
			array(
				"id_kategori" => $id_kategori,
				"nama_kategori" => $this->input->post("nama-kategori")
			)
		);

		if(!$id_kategori) {
			redirect(site_url() ."/admin/kategori_barang/daftar_kategori_barang");
		}
	}

	public function daftar_kategori_barang() {
		$this->load->view('admin/list_kategori_barang_view');
	}

	public function edit_kategori_barang() {
		$this->load->model("Kategori_model");

		$kategori_model = new Kategori_Model();

		$this->data['kategori'] = $kategori_model->fetch_by_id($this->input->get("id_kategori"));

		$this->load->view('admin/edit_kategori_barang_view', $this->data);
	}

	public function submit_edit_kategori_barang() {
		$this->load->model("Kategori_model");

		$kategori_model = new Kategori_Model();

		$kategori_model->update($this->input->post("id-kategori"), array(
			"nama_kategori" => $this->input->post("nama-kategori")
		));

		redirect(site_url() ."/admin/kategori_barang/daftar_kategori_barang");
	}

	public function ajax_list_kategori_barang() {
		$this->load->model("Kategori_model");

			$kategori_model = new Kategori_Model();

			$list = $kategori_model->get_datatables();
	        $data = array();
	        $no = $_POST['start'];

	        //i berfungsi untuk id modal untuk data target
	        $i = 0;
	        foreach ($list as $kategori) {
	            $no++;
	            $row = array();

	            $row[] = $no;
	            $row[] = $kategori->id_kategori;
	            $row[] = $kategori->nama_kategori;
	            $url_detail = 
	            base_url("index.php/admin/detail_kategori/daftar_detail_kategori_barang?id_kategori=". $kategori->id_kategori);
	            $url_edit = 
	           base_url("index.php/admin/kategori_barang/edit_kategori_barang?id_kategori=". $kategori->id_kategori);

	            $row[] = "<a class='btn btn-sm btn-info' href='$url_edit'>
 						   <span class='glyphicon glyphicon-pencil'></span>
	             		   </a>

	             		   <button class='btn btn-sm btn-danger ktg-delete'
	             		   data-id-kategori='". $kategori->id_kategori ."'
	             		   data-nama-kategori='". $kategori->nama_kategori ."'>
	             		   <span class='glyphicon glyphicon-trash'></span></button>

	             		   <a 
	             		   href='$url_detail' 
	             		   class='btn btn-sm btn-success'>
						   <span class='glyphicon glyphicon-zoom-in'></span> Detail
	             		   </a>";

	            $data[] = $row;
	            $i++;
	        }

	        $output = array(
	        	"draw" => $_POST['draw'],
	            "recordsTotal" => $kategori_model->count_all(),
	            "recordsFiltered" => $kategori_model->count_filtered(),
	            "data" => $data,
	        );

	        //output to json format
	        echo json_encode($output);
	}

	public function ajax_delete_kategori() {
		$this->load->model("Kategori_model");

		$kategori_model = new Kategori_Model();

		$kategori_model->delete($this->input->post("id"));

		echo json_encode(array("sukses"));
	}

}