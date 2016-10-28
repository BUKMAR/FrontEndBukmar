  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Kategori extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input_kategori_barang() {
		$this->load->view('admin/in_detail_kategori_barang_view');
	}

	public function submit_tambah_detail_kategori_barang() {
		$this->load->model("Detail_kategori_model");

		$detail_kategori_model = new Detail_Kategori_Model();

		$detail_kategori_model->insert(
			array(
				"id_kategori" => $this->input->post("id-kategori"),
				"nama_detail_kategori" => $this->input->post("nama-detail-kategori")
			)
		);

		redirect(site_url() ."admin/detail_kategori/daftar_detail_kategori_barang");
	}

	public function daftar_detail_kategori_barang() {
		$id_kategori = $this->input->get("id_kategori");
		$this->load->model("Kategori_model");

		$kategori_model = new Kategori_Model();

		$this->data['kategori'] = $kategori_model->fetch_by_id($id_kategori);
		$this->data['id_kategori'] = $id_kategori;

		$this->load->view('admin/list_detail_kategori_barang_view', $this->data);
	}

	public function input_detail_kategori_barang() {
		$this->load->model("Kategori_model");

		$kategori_model = new Kategori_Model();

		$this->data['kategori'] = $kategori_model->fetch_by_id($this->input->get("id_kategori"));

		$this->load->view("admin/in_detail_kategori_barang_view", $this->data);
	}

	public function edit_detail_kategori_barang() {
		$this->load->model("Detail_kategori_model");

		$detail_kategori_model = new Detail_Kategori_Model();

		$this->data['detail_kategori'] = $detail_kategori_model->fetch_by_id($this->input->get("id_detail_kategori"));

		$this->load->view('admin/edit_detail_kategori_barang_view', $this->data);
	}

	public function ajax_list_detail_kategori_barang() {
		$this->load->model("Detail_kategori_model");

			$detail_kategori_model = new Detail_Kategori_Model();

			$list = $detail_kategori_model->get_datatables($this->input->get('id_kategori'));
	        $data = array();
	        $no = $_POST['start'];

	        //i berfungsi untuk id modal untuk data target
	        $i = 0;
	        foreach ($list as $detail_kategori) {
	            $no++;
	            $row = array();

	            $row[] = $no;
	            $row[] = $detail_kategori->id_kategori;
	            $row[] = $detail_kategori->nama_detail_kategori;
	           	$url_edit = 
	           	base_url("index.php/admin/detail_kategori/edit_detail_kategori_barang?id_detail_kategori=". $detail_kategori->id_detail_kategori);

	            $row[] = "<a class='btn btn-md btn-info' href='$url_edit'>
 						   <span class='glyphicon glyphicon-pencil'></span>
	             		   </a>

	             		   <button class='btn btn-md btn-danger ktg-detail-delete'
	             		   data-id-detail-kategori='". $detail_kategori->id_detail_kategori ."'
	             		   data-nama-detail-kategori='". $detail_kategori->nama_detail_kategori ."'>
	             		   <span class='glyphicon glyphicon-trash'></span></button>";

	            $data[] = $row;
	            $i++;
	        }

	        $output = array(
	        	"draw" => $_POST['draw'],
	            "recordsTotal" => $detail_kategori_model->count_all(),
	            "recordsFiltered" => $detail_kategori_model->count_filtered(),
	            "data" => $data,
	        );

	        //output to json format
	        echo json_encode($output);
	}

	public function ajax_delete_detail_kategori() {
		$this->load->model("Detail_kategori_model");

		$detail_kategori_model = new Detail_Kategori_Model();

		$detail_kategori_model->delete($this->input->post("id"));

		echo json_encode(array("sukses"));
	}

}