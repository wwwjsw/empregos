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
		//carrega a library de validação, para retorno de erros no template/footer
		$this->load->library('form_validation');
		// carrega library de paginação
		$this->load->library('pagination');
		//carrega model dos cards
		$this->load->model('card');

		$config = array();
        $config["base_url"] = base_url();
        $total_row = $this->card->record_count();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 4;
        $config['use_page_numbers'] = false;
        $config['num_links'] = $total_row;
        $config['full_tag_open'] = '<ul class="pagination center-align">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="waves-effect active red"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="waves-effect">';
		$config['num_tag_close'] = '</li>';

        $config['next_link'] = '<i class="material-icons">chevron_right</i>';
        $config['next_tag_open'] = '<li class="waves-effect">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '<i class="material-icons">chevron_left</i>';
        $config['prev_tag_open'] = '<li class="waves-effect">';
        $config['prev_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        if($this->uri->segment(1)){
        	$range = ($this->uri->segment(1)) ;
          }
        else{
			$range = 0;
        }
        $data["results"] = $this->card->fetch_data($config["per_page"], $range);
        $data["links"] = $this->pagination->create_links();
        
		//carrega as views da pagina inicial
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('home', $data);
		$this->load->view('template/footer');
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
				//primeira validação de formulario
				$this->load->model('usuario');
				
				$fb_id		=	$this->input->post('fb_id');
				$fb_name	=	$this->input->post('fb_name');
				
				//verifica se usuario do facebook já existe e retorna id
				if($this->usuario->verifyFbUser($fb_id))
				{
					$id = $this->usuario->verifyFbUser($fb_id);
					//echo $id;
				}else{
					$id = $this->usuario->insertFbUser($fb_id,$fb_name);
					//echo $id;
				}

				//regras de validação para o card 
				$this->form_validation->set_rules('tipo', 'Tipo', 'required|in_list[servico,vaga]');
				$this->form_validation->set_rules('beneficios_clt',			'C.L.T',				'alpha');
				$this->form_validation->set_rules('beneficios_diaria',		'Diaria',				'alpha');
				$this->form_validation->set_rules('beneficios_odonto',		'Plano odontológico',	'alpha');
				$this->form_validation->set_rules('beneficios_vida',		'Seguro de vida',		'alpha');
				$this->form_validation->set_rules('beneficios_alimentacao',	'Vale alimentação',		'alpha');
				$this->form_validation->set_rules('beneficios_saude',		'Plano de saúde',		'alpha');
				$this->form_validation->set_rules('beneficios_comissao',	'Comissão',				'alpha');
				$this->form_validation->set_rules('beneficios_vt',			'Vale transporte',		'alpha');
				$this->form_validation->set_rules('numero',					'Numero',				'required|min_length[9]|max_length[17]|trim');
				$this->form_validation->set_rules('cor',					'Cor',					'required');
				$this->form_validation->set_rules('cargo',					'Cargo',				'required');


				//tradução da validação 
				$this->form_validation->set_message('required', '{field} é um campo obrigatório.');
				$this->form_validation->set_message('in_list', '{field} é um campo que permite apenas {param}');
				$this->form_validation->set_message('alpha', '{field} é um campo que aceita apenas caracteres alfabéticos');
				$this->form_validation->set_message('min_length', '{field} deve conter no mínimo {param} caracteres');
				$this->form_validation->set_message('max_length', '{field} deve conter no máximo {param} caracteres');

				if($this->form_validation->run() == FALSE){
					$this->index();
				}else
				{
					$this->load->model('card');

					$tipo			=	$this->input->post('tipo');
					$clt			=	($this->input->post('beneficios_clt') == 'on' ? TRUE : FALSE);
					$diaria 		=	($this->input->post('beneficios_diaria') == 'on' ? TRUE : FALSE);
					$odontologico	=	($this->input->post('beneficios_odonto') == 'on' ? TRUE : FALSE);
					$vida			=	($this->input->post('beneficios_vida') == 'on' ? TRUE : FALSE);
					$alimentacao	=	($this->input->post('beneficios_alimentacao') == 'on' ? TRUE : FALSE);
					$saude			=	($this->input->post('beneficios_saude') == 'on' ? TRUE : FALSE);
					$comissao		=	($this->input->post('beneficios_comissao') == 'on' ? TRUE : FALSE);
					$vt				=	($this->input->post('beneficios_vt') == 'on' ? TRUE : FALSE);
					$numero			=	$this->input->post('numero');
					$cor			=	$this->input->post('cor');
					$cargo 			=	$this->input->post('cargo');

					$cardSalvo = $this->card->SaveCard($id,$tipo,$clt,$diaria,$odontologico,$vida,$alimentacao,$saude,$comissao,$vt,$numero,$cor,$cargo);
					if(isset($cardSalvo))
                    {
                        redirect(base_url('?share='.$cardSalvo));
                    }
				}

			}
		}else
		{
			redirect(base_url());
		}
	}
	public function empregos()
	{
		//carrega a library de validação, para retorno de erros no template/footer
		$this->load->library('form_validation');
		// carrega library de paginação
		$this->load->library('pagination');
		//carrega model dos cards
		$this->load->model('card');

		$config = array();
        $config["base_url"] = base_url('empregos');
        $total_row = $this->card->record_count('vaga');
        $config["total_rows"] = $total_row;
        $config["per_page"] = 4;
        $config['use_page_numbers'] = false;
        $config['num_links'] = $total_row;
        $config['full_tag_open'] = '<ul class="pagination center-align">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="waves-effect active red"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="waves-effect">';
		$config['num_tag_close'] = '</li>';

        $config['next_link'] = '<i class="material-icons">chevron_right</i>';
        $config['next_tag_open'] = '<li class="waves-effect">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '<i class="material-icons">chevron_left</i>';
        $config['prev_tag_open'] = '<li class="waves-effect">';
        $config['prev_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        if($this->uri->segment(2)){
        	$range = ($this->uri->segment(2)) ;
          }
        else{
			$range = 0;
        }
        $data["results"] = $this->card->fetch_data($config["per_page"], $range, 'vaga');
        $data["links"] = $this->pagination->create_links();

        $this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}	
	public function candidatos()
	{
		//carrega a library de validação, para retorno de erros no template/footer
		$this->load->library('form_validation');
		// carrega library de paginação
		$this->load->library('pagination');
		//carrega model dos cards
		$this->load->model('card');

		$config = array();
        $config["base_url"] = base_url('candidatos');
        $total_row = $this->card->record_count('servico');
        $config["total_rows"] = $total_row;
        $config["per_page"] = 4;
        $config['use_page_numbers'] = false;
        $config['num_links'] = $total_row;
        $config['full_tag_open'] = '<ul class="pagination center-align">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="waves-effect active red"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="waves-effect">';
		$config['num_tag_close'] = '</li>';

        $config['next_link'] = '<i class="material-icons">chevron_right</i>';
        $config['next_tag_open'] = '<li class="waves-effect">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '<i class="material-icons">chevron_left</i>';
        $config['prev_tag_open'] = '<li class="waves-effect">';
        $config['prev_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        if($this->uri->segment(2)){
        	$range = ($this->uri->segment(2)) ;
          }
        else{
			$range = 0;
        }
        $data["results"] = $this->card->fetch_data($config["per_page"], $range, 'servico');
        $data["links"] = $this->pagination->create_links();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}
}