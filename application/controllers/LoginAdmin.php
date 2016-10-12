<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class LoginAdmin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->library("session");
	}

	function index()
	{
		$data["titulo"] = "Login Blog";
		$this->load->view("admin/login.php", $data);
	}

	function ingresando()
	{
		// aqui validaremos el usuario para poder acceder al administrador del blog
		$data["titulo"] = "Prueba";
		$data["name"] = $this->input->post("user-name");
		$data["password"] = $this->input->post("user-password");
		$data["rememberme"] = $this->input->post("user-rememberme");
		$data["type"] = gettype($this->input->post("user-rememberme"));
		$this->load->view("admin/prueba.php", $data);
	}
}
?>