<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Model
{

	public function all()
	{
		$this->db->select('
		articles.title, articles.content, articles.created_at, articles.category_id, articles.user_id, 
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

	public function add($data)
	{
		return $this->db->insert('articles', $data);
	}

}
