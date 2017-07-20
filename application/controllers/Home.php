<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	/**
	 *
	 * Construct function.
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	/**
	 *
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		//carrega a library de validação, para não haver erros no template/footer
		$this->load->library('form_validation');

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('home');
		$this->load->view('template/footer');
		$this->output->enable_profiler(true);
	}
	/**
	 *
	 * lerAnuncio link interno do card.
	 *
	 */	
	public function lerAnuncio($name)
	{
		$this->load->view('template/header');
		echo $name;
		echo '<br/>';
		echo base_url(uri_string());
		echo '<br/>';
		echo current_url();
		$this->output->enable_profiler(true);
	}
	/**
	 *
	 * enviarServicoVaga envia servico ou vaga.
	 *
	 */	
	public function enviarServicoVaga()
	{
		if($_POST) 
		{
			$this->load->library('form_validation');

			//regras de validação do usuario do facebook
			$this->form_validation->set_rules('fb_id', 'Facebook id', 'required|trim');
			$this->form_validation->set_rules('fb_name', 'Nome', 'required|trim');

			//tradução da validação
			$this->form_validation->set_message('required', '{field} é um campo obrigatório.');

			//verifica se a validação do facebook ocorreu bem
			if($this->form_validation->run() == FALSE)
			{
				$this->index();
			}else
			{
				$this->load->model('usuario');
				
				$fb_id		=	$this->input->post('fb_id');
				$fb_name	=	$this->input->post('fb_name');
				
				if($this->usuario->verifyFbUser($fb_id))
				{
					$id = $this->usuario->verifyFbUser($fb_id);
					echo 'usuario existe<br>';
					echo $id;
				}else{
					echo "usuario não existe";
					$id = $this->usuario->insertFbUser($fb_id,$fb_name);
					echo $id;
				}



				$this->output->enable_profiler(true);
			}
		}else
		{
			redirect(base_url());
		}
	}	
}