<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function index()
	{
		$this->load->view('member/home_member_view');
	}

	public function profile() {
		$this->load->view('member/profile_member_view');
	}

	public function history_belanja() {
		$this->load->view('member/history_belanja_view');
	}

	public function status_komisi() {
		$this->load->view('member/status_komisi_view');
	}

	public function history_status() {
		$this->load->view('member/member_history_status_view');
	}

	public function history_bonus() {
		$this->load->view('member/history_bonus_view');
	}

	public function informasi_jaringan() {
		$this->load->view('member/informasi_jaringan_view');
	}

	public function informasi() {
		$this->load->view('member/informasi_view');
	}

	public function logout() {
		$this->load->view('member/logout_view');
	}

	public function register_member() {
		$this->load->view('member/register_member_view');
	}

	public function list_member() {
		$this->load->view('member/list_member_view');
	}


}

/* End of file Member.php */
/* Location: ./application/controllers/Member.php */