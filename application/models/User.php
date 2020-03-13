<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{

	public function add($data)
	{
		return $this->db->insert('users', $data);
	}

	public function load($id)
	{
		return $this->db->select("id, name, email")->get_where('users', array('id' => $id))->row();
	}

	public function loadByEmail($email)
	{
		return $this->db->get_where('users', array('email' => $email))->row();
	}
}
