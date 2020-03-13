<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article', 'article');
		$this->load->model('Category', 'category');

	}

	public function index()
	{
		if ($this->input->get('search')) {
			$articles = $this->article->searchByTitle($this->input->get('search'));
		} else if ($this->input->get('category')) {
			$articles = $this->article->searchByCategory($this->input->get('category'));
		} else {
			$articles = $this->article->all();
		}
//		dd($articles);
		$categories = $this->category->all();
		$this->load->view('home', array(
			'articles' => $articles,
			'categories' => $categories
		));
	}

	public function detail($slug)
	{
		$article = $this->article->findBySlug($slug);
		$this->load->view('detail', array(
			'article' => $article,
		));
	}
}
