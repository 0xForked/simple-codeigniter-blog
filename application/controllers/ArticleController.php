<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (is_logged_in() == NULL) redirect('login');
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
			'slug' => str_replace(' ', '-', $this->input->post('title')),
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
		$article = $this->article->find($id);
		$categories = $this->category->all();
		$this->load->view('pages/articles/edit', array(
			'article' => $article,
			'categories' => $categories
		));
	}

	public function update()
	{
		$category = $this->article->edit(
			$this->input->post('id'),
			array(
				'title' =>	$this->input->post('title'),
				'slug' => str_replace(' ', '-', $this->input->post('title')),
				'content' => $this->input->post('editor1'),
				'category_id' => $this->input->post('category_id'),
				'updated_at' => time()
			)
		);
		if (!$category) {
			dd("Failed update an article");
		}
		redirect("articles");
	}

	public function destroy($id)
	{
		$article = $this->article->delete($id);
		if (!$article) {
			dd("Failed delete an article");
		}
		redirect("articles");
	}
}
