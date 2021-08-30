<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->library('email');
		$this->load->helper('html');
//		$this->load->model('AdminModels');
//		$this->load->database();
		header('Content-Type: text/html; charset=utf-8');
	}

	/*Стр: Главная*/
	public function index()
	{
		$this->load->view('site/header');
		$this->load->view('site/index');
        $this->load->view('site/footer');
	}

	/*Стр: О нас*/
	public function about()
	{
		$this->load->view('site/header');
		$this->load->view('site/about');
		$this->load->view('site/footer');
	}
}
