<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

//fazer construtor chamando model
	
	public function index()
	{
		$this->load->model('/Report_Model','Report');

		$this->data['data'] = $this->Report->getAll();

		$this->load->view('incs/header');
		$this->load->view('report' , $this->data );
		$this->load->view('incs/footer');
	}

	public function alterar(){

		$this->load->model('Report_Model','Report');
		$id = $this->input->post('id');		
		$nome = $this->input->post('nome');
		$cpf = $this->input->post('cpf');
		$rg = $this->input->post('rg');
		$telefone = $this->input->post('telefone');
		$dtnasc = $this->input->post('dtnasc');

		
		//var_dump($this->input->post);

		$data = array(
			'nome' => $nome,
			'cpf' => $cpf,
			'rg' => $rg,
			'dtnasc' => $dtnasc,
			'telefone' => $telefone

		);

		$this->Report->save( $data, array('id' => $id) );

		
	}

	

	public function deletar(){
		$this->load->model('Report_Model','Report');
		$this->Report->delete( array('id' => $this->input->post('id') ) );
	}

}
