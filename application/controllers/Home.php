<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	/**
	 *
	 * Construct function.
	 *
	 */
	public function __construct(){
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
}