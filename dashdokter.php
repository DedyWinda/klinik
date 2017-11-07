<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashdokter extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('name') == null){
			redirect(base_url().'index.php/login');
		}
	}
	
	public function logout(){
		$session_data_logout = array(
			'username','status','name','photo'
			);
		$this->session->unset_userdata($session_data_logout);
		redirect(base_url().'index.php/login');
	}
	
	public function index(){
		$this->load->view('vdashdokter');
	}
}
?>