<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Model
{

	public function all()
	{
		$this->db->select('
		articles.id, articles.slug, articles.title, articles.content, articles.created_at, articles.category_id, articles.user_id, 
		categories.id as category_id, categories.title as category_title, users.id as user_id, users.name as user_name');
		$this->db->from('articles');
		$this->db->join('categories', 'categories.id = articles.category_id');
		$this->db->join('users', 'users.id = articles.user_id');
		return $this->db->get()->result();
	}

	public function find($id)
	{
		return $this->db->get_where('articles', array('id' => $id))->row();
	}

	public function findBySlug($slug)
	{
		$this->db->select('
		articles.id, articles.slug, articles.title, articles.content, articles.created_at, articles.category_id, articles.user_id, 
		categories.id as category_id, categories.title as category_title, users.id as user_id, users.name as user_name');
		$this->db->join('categories', 'categories.id = articles.category_id');
		$this->db->join('users', 'users.id = articles.user_id');
		return $this->db->get_where('articles', array('slug' => $slug))->row();
	}

	public function searchByCategory($category)
	{
		$this->db->select('
		articles.id, articles.slug, articles.title, articles.content, articles.created_at, articles.category_id, articles.user_id, 
		categories.id as category_id, categories.title as category_title, users.id as user_id, users.name as user_name');
		$this->db->join('categories', 'categories.id = articles.category_id');
		$this->db->join('users', 'users.id = articles.user_id');
		return $this->db->get_where('articles', array('categories.title' => $category))->result();
	}

	public function searchByTitle($title)
	{
		$this->db->select('
		articles.id, articles.slug, articles.title, articles.content, articles.created_at, articles.category_id, articles.user_id, 
		categories.id as category_id, categories.title as category_title, users.id as user_id, users.name as user_name');
		$this->db->join('categories', 'categories.id = articles.category_id');
		$this->db->join('users', 'users.id = articles.user_id');
		$this->db->like('articles.title', $title);
		return $this->db->get('articles')->result();
	}

	public function add($data)
	{
		return $this->db->insert('articles', $data);
	}

	public function edit($id, $data)
	{
		return $this->db->where('id', $id)->update('articles', $data);
	}

	public function delete($id)
	{
		return $this->db->delete('articles', array('id' => $id));
	}

}
