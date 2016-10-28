<?php
	class Foto_Barang_Satuan_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function insert($data) {
			$this->db->insert("foto_barang_satuan", $data);

			$insert_id = $this->db->insert_id();

   			return  $insert_id;
		}

		public function delete($id) {
			$this->db->where("id_foto_barang_satuan", $id);
			$this->db->delete("foto_barang_satuan");
		}

		public function update($id, $data) {
			$this->db->where("id_foto_barang_satuan", $id);
			$this->db->update("foto_barang_satuan", $data);
		}

 		public function fetch_all() {
 			$this->db->select("*");
 			$this->db->from("foto_barang_satuan");
 			$query = $this->db->get();

 			return $query->result_array();
 		}

 		public function fetch_by_id($id_foto_barang_satuan) {
 			$this->db->select("*");
 			$this->db->from("foto_barang_satuan");
 			$this->db->where("id_foto_barang_satuan=$id_foto_barang_satuan");

 			$query = $this->db->get();

 			$tmp = $query->result_array();

 			if(count($tmp) > 0)
 				return $tmp[0];
 			else 
 				return $tmp;
 		}

 		public function fetch_by_id_barang_satuan($id_barang_satuan) {
 			$this->db->select("*");
 			$this->db->from("foto_barang_satuan");
 			$this->db->where("id_barang='$id_barang_satuan'");

 			$query = $this->db->get();

 			$tmp = $query->result_array();

 			if(count($tmp) > 0)
 				return $tmp[0];
 			else 
 				return $tmp;
 		}
	 
	    public function count_all() {
	        $this->db->from($this->table);
	        return $this->db->count_all_results();
	    }
	}
?>