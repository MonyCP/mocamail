<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		echo "Hola";
	}

	function __construct()
	{
		/*$this->load->model('User_model', 'user');*/
	}
	
	public function login()
	{
		$this->load->view('mocamail/mail');
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