<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Category', 'category');
		$this->load->model('Article', 'article');
	}

	public function index()
	{
		$articles = $this->article->all();
		$this->load->view('pages/articles/index', array(
			'articles' => $articles
		));
	}

	public function create()
	{
		$categories = $this->category->all();
		$this->load->view('pages/articles/add', array(
			'categories' => $categories
		));
	}

	public function store()
	{
		$articles = $this->article->add(array(
			'title' =>	$this->input->post('title'),
			'content' => $this->input->post('editor1'),
			'user_id' => logged_in_session()->id,
			'category_id' => $this->input->post('category_id'),
			'created_at' => time()
		));
		if (!$articles) {
			dd("Failed add new Article Database Problem");
		}
		redirect('articles');
	}

	public function edit($id)
	{
		$this->load->view('pages/articles/edit');
	}

	public function update()
	{
		// update data on databases by {id}
	}

	public function delete()
	{
		// delete data from database by {id}
	}
}
