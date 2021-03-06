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

	/*Стр: О нас*/
	public function about()
	{
		$this->load->view('site/header');
		$this->load->view('site/about');
		$this->load->view('site/footer');
	}

	/*Стр: Продукция*/
	public function catalog()
	{
		$this->load->view('site/header');
		$this->load->view('site/catalog');
		$this->load->view('site/footer');
	}

	/*Стр: Гарантия*/
	public function warranty()
	{
		$this->load->view('site/header');
		$this->load->view('site/warranty');
		$this->load->view('site/footer');
	}

	/*Стр: Гарантия*/
	public function loan()
	{
		$this->load->view('site/header');
		$this->load->view('site/loan');
		$this->load->view('site/footer');
	}

	/*Стр: Новости*/
	public function news(){
		$this->load->view('site/header');
		$this->load->view('site/news');
		$this->load->view('site/footer');
	}


}
