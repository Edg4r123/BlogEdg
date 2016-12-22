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
		$this->load->helper(array("url", "cookie"));
		$this->load->model("admin_blog", "admin_db", TRUE);
		$this->load->library(array("session", "encrypt"));
		$this->config->load("config");
	}

	function index()
	{
		$data["titulo"] = "Login Blog";
		$data["log"] = $this->input->get("log");
		$data["cookie_email"] = $this->input->cookie("user_email");
		$data["cookie_pass"] = $this->input->cookie("user_pass");
		$this->load->view("admin/login.php", $data);
	}

	function ingresando()
	{
		// aqui validaremos el usuario para poder acceder al administrador del blog
		$key = $this->config->item("encryption_key");
		$user_password = $this->input->post("user-password");
		$data["name"] = $this->input->post("user-name");
		$data["password"] = md5($user_password . $key); // contrasena encriptada
		$data["rememberme"] = $this->input->post("user-rememberme"); // comparar con NULL
		// Enviamos al modelo los datos del login y nos regresara un result
		$user_data = $this->admin_db->login_admin($data["name"],$data["password"]);
		if (count($user_data) == 1) 
		{
			$row = $user_data[0];
			$this->session->set_userdata(
				array(
					"ID" => $row->ID,
					"user_email" => $row->user_email,
					"user_status" => $row->user_status,
					"display_name" => $row->display_name
				)
			);
			if ($data["rememberme"] != NULL) { // Recordar usuario y contrasena
				set_cookie("user_email", $data["name"], (60*60*24*7));
				set_cookie("user_pass", $user_password, (60*60*24*7));
			}
			redirect(base_url() . "administrador/");
		} else {
			redirect(base_url() . "login?log=false");
		}
		
	}
}
?>