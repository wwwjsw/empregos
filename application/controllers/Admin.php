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
        echo $action.'</br>';
        echo $id;
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