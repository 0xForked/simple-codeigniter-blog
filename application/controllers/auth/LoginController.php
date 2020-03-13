<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User", "user");
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login()
	{
		if (is_logged_in() != NULL) redirect('/');
		if (!$this->validateForm()) {
			dd("Failed Login Email and Password Required");
		}
		$user = (Object) $this->user->loadByEmail($this->input->post('email'));
		if (!password_verify($this->input->post('password'), $user->password)) {
			dd("Failed Login Password doesn't match");
		}
		$this->makeSession($user->id);
	}

	private function validateForm()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
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

	public function logout()
	{
		$this->session->unset_userdata(array(
			'id',
			"name",
			"email",
			"login_status"
		));
		$this->session->sess_destroy();
		session_start();
		$this->session->sess_regenerate(TRUE);
		return redirect('/');
	}
}
