<?php
class Result extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Result_Model','Result');
		$this->data['data'] = $this->Result->search();
		}

	public function index()	{
		$this->load->view('incs/header');
		$this->load->view('result', $this->data);		
		$this->load->view('incs/footer');
	}

	
}
