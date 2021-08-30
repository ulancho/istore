<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	/*Стр: Главная*/
	public function index()
	{
		$this->load->view('site/header');
		$this->load->view('site/index');
        $this->load->view('site/footer');
	}
}
