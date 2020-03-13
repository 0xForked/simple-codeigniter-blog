<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Model
{

	public function all()
	{
		return $this->db->get('categories')->result();
	}

	public function find($id)
	{
		return $this->db->get_where('categories', array('id' => $id))->row();
	}

	public function add($data)
	{
		return $this->db->insert('categories', $data);
	}

	public function edit($id, $data)
	{
		return $this->db->where('id', $id)->update('categories', $data);
	}

	public function delete($id)
	{
		return $this->db->delete('categories', array('id' => $id));
	}
}
