  <?php
	class Member_model extends CI_Model {

		private $table = 'member';
		private $column_order = 
		array(null, 'id_member','nama_depan'); //set column field database for datatable orderable
		private $column_search = 
		array('id_member','nama_depan'); //set column field database for datatable searchable 
		private $order = array('id_member' => 'asc'); // default order 

		public function __construct() {
			parent::__construct();
		}

		public function insert($data) {
			$this->db->insert("member", $data);

			$insert_id = $this->db->insert_id();

   			return  $insert_id;
		}

		public function delete($id) {
			$this->db->where("id_member", $id);
			$this->db->delete("member");
		}

		public function update($id, $data) {
			$this->db->where("id_member", $id);
			$this->db->update("member", $data);
		}

 		public function fetch_all() {
 			$this->db->select("*");
 			$this->db->from("member");
 			$query = $this->db->get();

 			return $query->result_array();
 		}
 		
 		public function login($username, $password) {
 			$this->db->select("*");
 			$this->db->from("member");
 			$this->db->where("`username`='". $username ."' AND `password`='". $password."'");
 			$query = $this->db->get();

 			$rows = $query->result_array();

 			return $rows;
 		}

 		public function fetch_by_id($id_member) {
 			$this->db->select("*");
 			$this->db->from("member");
 			$this->db->where("id_member='$id_member'");

 			$query = $this->db->get();

 			$tmp = $query->result_array();

 			if(count($tmp) > 0)
 				return $tmp[0];
 			else 
 				return $tmp;
 		}

	    private function _get_datatables_query() {
	        $this->db->from("member");
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