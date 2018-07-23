<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result_Model extends MY_Model {
	public $table = 'customers';

	public function __construct(){
		parent::__construct();
		 
		}

		public function search(){
		$result = $this->Result->getBy( array( 'cpf' => $this->input->post('cpf')) );
		return $result;
	}
}
	