<?php
	class Barang_Model extends CI_Model {

		private $table = 'barang';
		private $column_order = 
		array(null, 'id_barang','nama_barang','tgl_upload','harga_jual', 'harga_jual', 'foto', 'stok', 'jenis_barang', 'kategori_usia'); //set column field database for datatable orderable
		private $column_search = 
		array('id_barang','nama_barang','tgl_upload','harga_jual', 'harga_jual', 'foto', 'stok', 'jenis_barang', 'stok', 'kategori_usia'); //set column field database for datatable searchable 
		private $order = array('id_barang' => 'asc'); // default order 

		public function __construct() {
			parent::__construct();
		}

		public function insert($data) {
			$this->db->insert("barang", $data);

			$insert_id = $this->db->insert_id();

   			return  $insert_id;
		}

		public function delete($id) {
			$this->db->where("id_barang", $id);
			$this->db->delete("barang");
		}

		public function update($id, $data) {
			$this->db->where("id_barang", $id);
			$this->db->update("barang", $data);
		}

		public function fetch_all_barang() {
			$this->db->select("*");
 			$this->db->from("barang");
 			
 			$query = $this->db->get();

 			return $query->result_array();
		}

 		public function fetch_all() {
 			$this->db->select("	`barang`.`id_barang`,
								`barang`.`nama_barang`,
								`barang`.`harga_jual`,
								`barang`.`harga_tawar`,
								`diskon`.`diskon`");
 			$this->db->from("barang");
 			$this->db->join("diskon", "`barang`.`id_barang`=`diskon`.`id_barang`", 'left');
 			
 			$query = $this->db->get();
 			
 			$this->load->model("Foto_barang_model");

 			$foto_barang_model = new Foto_barang_Model();

 			foreach($query->result() as $item) {
 				$foto_barang = $foto_barang_model->fetch_by_id_barang($item->id_barang);

 				if(isset($foto_barang['foto_barang']))
					$item->{"foto_barang"} = $foto_barang['foto_barang'];

 				$data[] = $item;
 			}

 			return $data;
 		}

 		public function fetch_by_id($id_barang) {
 			$this->db->select("	`barang`.`id_barang`,
								`barang`.`nama_barang`,
								`barang`.`berat`,
								`barang`.`dilihat`,
								`barang`.`harga_beli`,
								`barang`.`harga_jual`,
								`barang`.`harga_tawar`,
								`barang`.`id_brand`,
								`barang`.`id_detail_kategori`,
								`barang`.`jenis_barang`,
								`barang`.`kategori_usia`,
								`barang`.`keterangan`,
								`barang`.`stok`,
								`barang`.`tgl_kadaluarsa`,
								`barang`.`tgl_upload`,
								`detail_kategori`.`nama_detail_kategori`,
								`detail_kategori`.`id_kategori`");
 			$this->db->from("`barang`,
							`detail_kategori`");
 			$this->db->where("`barang`.`id_barang`='$id_barang'
								AND
							  `barang`.`id_detail_kategori`=`detail_kategori`.`id_detail_kategori`");

 			$query = $this->db->get();

 			$tmp = $query->result_array();

 			if(count($tmp) > 0)
 				return $tmp[0];
 			else 
 				return $tmp;
 		}

	    private function _get_datatables_query() {
	        $this->db->from("barang");
	        $i = 0;
	        
	     	// loop column 
	        foreach ($this->column_search as $item) {
	        	// if datatable send POST for search
	        	if(isset($_POST['search']['value'])) {
		            if($_POST['search']['value']) {
		                if($i === 0) {
		                	 // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
		                    $this->db->group_start(); 
		                    $this->db->like($item, $_POST['search']['value']);
		    			} else {
		                    $this->db->or_like($item, $_POST['search']['value']);
		                }
		 
		                if(count($this->column_search) - 1 == $i) //last loop
		                    $this->db->group_end(); //close bracket
		            }
	            }

	            $i++;
	        }
	        
	        // here order processing
	        if(isset($_POST['order'])) {
	            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
	        } else if(isset($this->order)) {
	            $order = $this->order;
	            $this->db->order_by(key($order), $order[key($order)]);
	        }
	    }
	 
	    function get_datatables() {
	        $this->_get_datatables_query();
	        
	        if(isset($_POST['length']) != -1 && isset($_POST['start'])) {
	        	$this->db->limit($_POST['length'], $_POST['start']);
	        }
	        
	        $query = $this->db->get();
	        
	        return $query->result();
	    }
	 
	    function count_filtered() {
	        $this->_get_datatables_query();
	        $query = $this->db->get();

	        return $query->num_rows();
	    }
	 
	    public function count_all() {
	        $this->db->from($this->table);
	        return $this->db->count_all_results();
	    }
	}
?>