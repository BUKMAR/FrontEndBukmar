<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Model extends CI_Model {

	private $table = 'register_member';

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function tambah_data_member($data) 
	{
		$this->db->insert("register_member", $data);

			$insert_id = $this->db->insert_id();

   		return  $insert_id;
	}

	public function fetch_all() 
	{
		$this->db->select("*");
		$this->db->from("register_member");
		$query = $this->db->get();

		return $query->result_array();
	}

	public function count_all() 
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

}

/* End of file Register_model.php */
/* Location: ./application/models/Register_model.php */