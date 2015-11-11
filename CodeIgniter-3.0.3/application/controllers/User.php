<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		$this->load->model('User_model', 'user');
	}

	public function login()
	{
		$this->load->model('mocamail/mail');
	}

	public function index()
	{
		$this->load->model('mocamail/login');
	}

	public function authenticate()
	{
		$this->load->model('User_model', 'user');

		$this->user->authenticate($username, $password);

		
	}

	public function validar()
	{
		$this->load->model('User_model', 'user');

		$this->user->validar($name, $lastname,$username, $email, $password);

		
	}
}	
