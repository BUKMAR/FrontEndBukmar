<?php
	class Detail_Kategori_Model extends CI_Model {

		private $table = 'detail_kategori';
		private $column_order = 
		array(null, 'id_detail_kategori','nama_detail_kategori'); //set column field database for datatable orderable
		private $column_search = 
		array('id_detail_kategori','nama_detail_kategori'); //set column field database for datatable searchable 
		private $order = array('id_detail_kategori' => 'asc'); // default order 
		private $id_kategori = 0;

		public function __construct() {
			parent::__construct();
		}

		public function insert($data) {
			$this->db->insert("detail_kategori", $data);

			$insert_id = $this->db->insert_id();

   			return  $insert_id;
		}

		public function delete($id) {
			$this->db->where("id_detail_kategori", $id);
			$this->db->delete("detail_kategori");
		}

		public function update($id, $data) {
			$this->db->where("id_detail_kategori", $id);
			$this->db->update("detail_kategori", $data);
		}

 		public function fetch_all() {
 			$this->db->select("*");
 			$this->db->from("detail_kategori");
 			$query = $this->db->get();

 			return $query->result_array();
 		}

 		public function fetch_by_id($id_detail_kategori) {
 			$this->db->select("	`detail_kategori`.`id_detail_kategori`,
								`detail_kategori`.`nama_detail_kategori`,
								`kategori`.`id_kategori`,
								`kategori`.`nama_kategori`");
 			$this->db->from("`detail_kategori`,`kategori`");
 			$this->db->where("`detail_kategori`.`id_detail_kategori` = $id_detail_kategori
AND
	`detail_kategori`.`id_kategori` = `kategori`.`id_kategori`");

 			$query = $this->db->get();

 			$tmp = $query->result_array();

 			if(count($tmp) > 0)
 				return $tmp[0];
 			else 
				return $tmp;
 		}

 		public function fetch_by_id_kategori($id_kategori) {
 			$this->db->select("*");
 			$this->db->from("detail_kategori");
 			$this->db->where("id_kategori=$id_kategori");

 			$query = $this->db->get();

 			$tmp = $query->result_array();

			return $tmp;
 		}

	    private function _get_datatables_query($id_kategori) {
	        $this->db->from("detail_kategori");
	        $this->db->where("id_kategori='$id_kategori'");
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
	 
	    function get_datatables($id_kategori) {
	    	$this->id_kategori = $id_kategori;
	        $this->_get_datatables_query($id_kategori);
	        
	        if(isset($_POST['length']) != -1 && isset($_POST['start'])) {
	        	$this->db->limit($_POST['length'], $_POST['start']);
	        }
	        
	        $query = $this->db->get();
	        
	        return $query->result();
	    }
	 
	    function count_filtered() {
	        $this->_get_datatables_query($this->id_kategori);
	        $query = $this->db->get();

	        return $query->num_rows();
	    }
	 
	    public function count_all() {
	        $this->db->from($this->table);
	        return $this->db->count_all_results();
	    }
	}
?>