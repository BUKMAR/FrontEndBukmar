  <?php
	class Transaksi_Model extends CI_Model {

		private $table = 'transaksi';
		private $column_order = 
		array(null, 'id_transaksi','id_member','tgl_transaksi','status_pengiriman', 'alamat_pengiriman', 'waktu_pengiriman'); //set column field database for datatable orderable
		private $column_search = 
		array('id_transaksi','id_member','tgl_transaksi','status_pengiriman', 'alamat_pengiriman', 'waktu_pengiriman'); //set column field database for datatable searchable 
		private $order = array('id_transaksi' => 'asc'); // default order 

		public function __construct() {
			parent::__construct();
		}

		public function insert($data) {
			$this->db->insert("transaksi", $data);

			$insert_id = $this->db->insert_id();

   			return  $insert_id;
		}

		public function delete($id) {
			$this->db->where("id_transaksi", $id);
			$this->db->delete("transaksi");
		}

		public function update($id, $data) {
			$this->db->where("id_transaksi", $id);
			$this->db->update("transaksi", $data);
		}

 		public function fetch_all() {
 			$this->db->select("*");
 			$this->db->from("transaksi");
 			$query = $this->db->get();

 			return $query->result_array();
 		}

 		public function fetch_by_id($id_transaksi) {
 			$this->db->select("*");
 			$this->db->from("transaksi");
 			$this->db->where("id_transaksi=$id_transaksi");

 			$query = $this->db->get();

 			$tmp = $query->result_array();

 			if(count($tmp) > 0)
 				return $tmp[0];
 			else 
 				return $tmp;
 		}

	    private function _get_datatables_query() {
	        $this->db->from("transaksi");
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