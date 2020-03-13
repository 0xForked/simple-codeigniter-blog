<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User", 'user');
	}

	public function index()
	{
		$this->load->view('auth/register');
	}

	public function register()
	{
		if (!$this->validateForm()) {
			dd("error tidak bisa melanjutkan karena semua data dibutuhkan");
		}
		$this->user->add(array(
			'name' =>  $this->input->post('name'),
			'email' =>  $this->input->post('email'),
			'password' => hashPassword($this->input->post('password')),
		));
		$user_id = $this->db->insert_id();
		$this->makeSession($user_id);
	}

	private function validateForm()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules(
			'confirm_password',
			'Password Confirmation',
			'trim|required|matches[password]'
		);
		if ($this->form_validation->run() == FALSE){
			return FALSE;
		} else {
			return TRUE;
		}
	}

	private function makeSession($user_id)
	{
		$user = (Object)$this->user->load($user_id);
		$this->session->set_userdata(array(
			'id' => $user->id,
			"name" => $user->name,
			"email" => $user->email,
			"login_status" => true
		));
		return redirect("/");
	}

}
