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
		// carrega library de paginação
		$this->load->library('pagination');
		//carrega model dos cards
		$this->load->model('administrativo');

		$config = array();
        $config["base_url"] = base_url('administrativo');
        $total_row = $this->administrativo->record_count();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 10;
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
        $data["results"] = $this->administrativo->fetch_data($config["per_page"], $range);
        $data["links"] = $this->pagination->create_links();			
			//carrega views para usuarios logados
			$this->load->view('administrativo/header');
			$this->load->view('administrativo/menu');
			$this->load->view('listagem', $data);
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
	 * Actions Page for this controller.
	 *
	 */
	public function actions($action, $id)
    {
        if($this->session->logged_in == TRUE)
        {
            switch ($action)
            {
                case 'block':
                    $this->blockCard($id, $action);
                    break;
                case 'delete':
                    $this->deleteCard($id, $action);
                    break;
                case 'ads':
                    $this->adsCard($id, $action);
                    break;
                case 'edit':
                    $this->editCard($id, $action);
                    break;
                case 'unblock':
                    $this->unblockCard($id, $action);
                    break;
                case 'removeads':
                    $this->removeAdsCard($id, $action);
                    break;
            }
        }
    }
    /**
     *
     * listagem de empregos disponiveis
     *
     */
    public function empregos()
    {
        $this->load->library('pagination');
        $this->load->model('empregos');

        if($this->input->post()){
            //regras de validação
            $this->form_validation->set_rules('profissao', 'Profissão', 'required|trim|min_length[3]|max_length[32]|is_unique[empregos.nome_cargo]');

            //tradução da validação
            $this->form_validation->set_message('min_length', '{field} deve ter no mínimo {param} caracteres.');
            $this->form_validation->set_message('max_length', '{field} deve ter no máximo {param} caracteres.');
            $this->form_validation->set_message('is_unique', 'A {field} já existe.');
            $this->form_validation->set_message('required', '{field} é um campo obrigatório.');


            //verifica se a validação ocorreu bem
            if($this->form_validation->run() == FALSE)
            {
                //echo validation_errors();
            }else
            {
                $cargo = $this->input->post('profissao');
                $this->empregos->addEmpregos($cargo);
            }
        }
        $data["results"] = $this->empregos->getEmpregos();
        //load views
        $this->load->view('administrativo/header');
        $this->load->view('administrativo/menu');
        $this->load->view('empregos', $data);
        $this->load->view('administrativo/footer');
    }
    /**
     *
     * listagem de users (são usuarios do facebook e administradores do sistema)
     *
     */
    public function users()
    {
        $this->load->view('administrativo/header');
        $this->load->view('administrativo/menu');
        $this->load->view('usuarios');
        $this->load->view('administrativo/footer');
    }
    /**
     *
     * excluir empregos
     *
     */
    public function empregosExcluir($id)
    {
        $this->load->model('empregos');
        if($this->empregos->removeEmpregos($id) == true){
            redirect(base_url('administrativo/empregos'));
        }
    }
    /**
     *
     * Block card function.
     *
     */
    public function blockCard($id, $action)
    {
        $this->load->model('actions');
        if($this->actions->block($id))
        {
            redirect(base_url('administrativo'));
        }
    }
    /**
     *
     * Unblock card function.
     *
     */
    public function unblockCard($id, $action)
    {
        $this->load->model('actions');
        if($this->actions->unblock($id))
        {
            redirect(base_url('administrativo'));
        }
    }
    /**
     *
     * Delete card function.
     *
     */
    public function deleteCard($id, $action)
    {
        $this->load->model('actions');
        if($this->actions->delete($id))
        {
            redirect(base_url('administrativo'));
        }
    }
    /**
     *
     * Ads card function.
     *
     */
    public function adsCard($id, $action)
    {
        $this->load->model('actions');
        if($this->actions->ads($id))
        {
            redirect(base_url('administrativo'));
        }

    }
    /**
     *
     * Remove ads card function.
     *
     */
    public function removeAdsCard($id, $action)
    {
        $this->load->model('actions');
        if($this->actions->removeAds($id))
        {
            redirect(base_url('administrativo'));
        }

    }
    /**
     *
     * Edit card function.
     *
     */
    public function editCard($id, $action)
    {
        /*
         *inicio do post
         */
        if($_POST)
        {
            $this->load->library('form_validation');

                //regras de validação para o card
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
                    $this->editComponent($id);
                }else
                {
                    $this->load->model('actions');

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

                    if($this->actions->edit($id,$clt,$diaria,$odontologico,$vida,$alimentacao,$saude,$comissao,$vt,$numero,$cor,$cargo))
                    {
                        redirect(base_url('administrativo'));
                    }
                }
        }else{
            $this->editComponent($id);
        }
        /*
         *final do post
         */

    }
    public function editComponent($id)
    {
        // carrega model interna
        $this->load->model('interna');
        //generate data
        $data["results"] = $this->interna->cardData($id);
        //empregos
        $this->load->model("empregos");
        $data["emprego"] = $this->empregos->getEmpregos();

        //load views
        $this->load->view('administrativo/header');
        $this->load->view('administrativo/menu');
        $this->load->view('editor', $data);
        $this->load->view('administrativo/footer');
    }
    /**
     *
     * Actions Page for this controller.
     *
     */
	public function logout()
	{
		session_destroy();
		redirect(base_url('administrativo'));
	}
}