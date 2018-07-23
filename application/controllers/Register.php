<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Register_Model','Register');
		
	}

	public function index()
	{
		$this->load->view('incs/header.php');	
		$this->load->view('register.php');
		$this->load->view('incs/footer.php');
	}

	public function registeres()
	{
		$this->load->view('incs/header.php');	
		$this->load->view('registeres.php');
		$this->load->view('incs/footer.php');
	}


	public function saveCustumer(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nome', 'nome','required');
		$this->form_validation->set_rules('rg', 'rg','required');
		$this->form_validation->set_rules('cpf', 'cpf','required|is_unique[customers.cpf]');	

		if ($this->form_validation->run() == FALSE) {
			$erros = array('mensagens' => validation_errors());
			$this->load->view('incs/header.php');
			$this->load->view('register', $erros);
			$this->load->view('incs/footer.php');
		} else {
			setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
			date_default_timezone_set('America/Sao_Paulo'); 

			$dtregister =  date('Y-m-d H:i');

			$data = array(	'nome' => $this->input->post('nome'),
				'cpf' => $this->input->post('cpf'),
				'dtnasc' => $this->input->post('dtnasc'),
				'rg' => $this->input->post('rg'),
				'telefone' => $this->input->post('telefone'),
				'dtregister' => $dtregister
			);
			$this->Register->save($data, array('id' => $this->input->post('id') ) );
			redirect('sucesso');
		}
	}

	public function saveCustumer18(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nome', 'nome','required');
		$this->form_validation->set_rules('dtnasc', 'dtnasc','required');
		$this->form_validation->set_rules('cpf', 'cpf','required|is_unique[customers.cpf]');	

		if ($this->form_validation->run() == FALSE) {
			$erros = array('mensagens' => validation_errors());
			$this->load->view('incs/header.php');
			$this->load->view('registeres', $erros);
			$this->load->view('incs/footer.php');
		} else {
			$dt = $this->input->post('dtnasc');
			$nova_data = explode("-", $dt);
			list($ano, $mes, $dia) = explode('-', $dt);

			$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
			$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

			$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
			
			if ($idade>18) {
				setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
				date_default_timezone_set('America/Sao_Paulo'); 

				$dtregister =  date('Y-m-d H:i');

				$data = array(	'nome' => $this->input->post('nome'),
					'cpf' => $this->input->post('cpf'),
					'dtnasc' => $this->input->post('dtnasc'),
					'rg' => $this->input->post('rg'),
					'telefone' => $this->input->post('telefone'),
					'dtregister' => $dtregister
				);
				$this->Register->save($data, array('id' => $this->input->post('id') ) );
					redirect('sucesso');
			}
			else{
				echo "Não foi cadastrado, pois é menor de idade...";

			}
		}
	}	
}





