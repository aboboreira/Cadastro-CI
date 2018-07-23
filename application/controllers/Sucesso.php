<?php
class Sucesso extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index()	{

		$this->load->view('incs/header');
		$this->load->view('sucesso');
		$this->load->view('incs/footer');
	}

	
		
}
