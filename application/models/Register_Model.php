<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Model extends MY_Model {
	protected $table = 'customers';

	public function __construct(){
		parent::__construct();
	}

	public function getAll(){
		$result = $this->Register->getList($this->table);
		return $result;
	}
}