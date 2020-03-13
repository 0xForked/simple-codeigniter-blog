<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Category", 'category');
	}

	public function index()
	{
		$categories = $this->category->all();
		$this->load->view('pages/categories/index', array(
			'categories' => $categories
		));
	}

	public function show($id)
	{
		$category = $this->category->find($id);
		header('Content-Type: application/json');
		echo json_encode($category);
	}

	public function store()
	{
		if (!$this->validateForm()) {
			dd("Failed add new Category All Data Required");
		}
		$category = $this->category->add(array(
			'title' =>	$this->input->post('title'),
			'description' => $this->input->post('description')
		));
		if (!$category) {
			dd("Failed add new Category Database Problem");
		}
		redirect('categories');
	}

	public function update()
	{
		$category = $this->category->edit(
			$this->input->post('id'),
			array(
				'title' =>$this->input->post('title'),
				'description' =>$this->input->post('description'),
			)
		);
		if (!$category) {
			dd("Failed update an category");
		}
		redirect("categories");
	}

	public function delete($id)
	{
		$category = $this->category->destroy($id);
		if (!$category) {
			dd("Failed delete an category");
		}
		redirect("categories");
	}

	private function validateForm()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		if ($this->form_validation->run() == FALSE){
			return FALSE;
		} else {
			return TRUE;
		}
	}
}
