<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	/**
	 *
	 * Construct function.
	 *
	 */
	public function __construct()
	{
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
		//carega a library de sessão
		$this->load->library('session');
		//verifica sessão 
		if($this->session->logged_in == TRUE)
		{
			//carrega views para usuarios logados
			$this->load->view('administrativo/header');
			$this->load->view('administrativo/menu');
			$this->load->view('listagem');
			$this->load->view('administrativo/footer');
		}else
		{
			//carrega views para usuarios não logados
			$this->load->view('administrativo/header');
			$this->load->view('login');
			$this->load->view('administrativo/footer');
		}

		if($_POST) 
		{
			//regras de validação
			$this->form_validation->set_rules('login', 'Login', 'required|trim|min_length[5]');
			$this->form_validation->set_rules('pass', 'Senha', 'required|trim');

			//tradução da validação
			$this->form_validation->set_message('min_length', '{field} deve ter no mínimo {param} caracteres.');
			$this->form_validation->set_message('required', '{field} é um campo obrigatório.');


			//verifica se a validação ocorreu bem
			if($this->form_validation->run() == FALSE)
			{
				echo validation_errors();
			}else
			{
				$this->load->model('login');
				$user = $this->input->post('login');
				$pass = md5($this->input->post('pass'));
				//var_dump($this->login->authUser($user, $pass));
				//echo '</pre>';
				if ($this->login->authUser($user, $pass)) 
				{
					$mainUser = $this->login->authUser($user, $pass);
					$newdata = array(
        				'username'  => $mainUser[0]->username,
        				'nivel'     => $mainUser[0]->nivel,
        				'status'     => $mainUser[0]->status,
        				'logged_in' => TRUE
					);

					$this->session->set_userdata($newdata);
					redirect(base_url('administrativo'));
					//$this->session->set_userdata($mainUser);
				}else
				{
					echo "login não feito";
				}
				//echo 'post realizado e formulario verificado<br/>';
				//
				//
			}
		}
	}
	/**
	 *
	 * Index Page for this controller.
	 *
	 */
	public function logout()
	{
		session_destroy();
		redirect(base_url('administrativo'));
	}
}