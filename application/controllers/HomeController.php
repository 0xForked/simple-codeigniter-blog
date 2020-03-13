<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article', 'article');
	}

	public function index()
	{
		$articles = $this->article->all();
		$this->load->view('home', array(
			'articles' => $articles
		));
	}
}
