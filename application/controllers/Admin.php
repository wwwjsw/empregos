<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	/**
	 *
	 * Construct function.
	 *
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	/**
	 *
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		$this->load->view('administrativo/header');
		$this->load->view('login');
		$this->load->view('administrativo/footer');

		if($_POST) {
			//regras de validação
			$this->form_validation->set_rules('login', 'Login', 'required|trim|min_length[5]');
			$this->form_validation->set_rules('pass', 'Senha', 'required|trim');

			//tradução da validação
			$this->form_validation->set_message('min_length', '{field} deve ter no mínimo {param} caracteres.');
			$this->form_validation->set_message('required', '{field} é um campo obrigatório.');


			//verifica se a validação ocorreu bem
			if($this->form_validation->run() == FALSE){
				echo validation_errors();
			}else{
				$this->load->model('login');
				echo 'post realizado e formulario verificado';
			}
		}
	}
}