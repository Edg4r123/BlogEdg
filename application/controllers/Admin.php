<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		if (!$this->session->has_userdata("ID")) {
			redirect(base_url() . "login");	
		}
	}

	function index(){
		$data['titulo'] = "Adminitración de Blog";
		$this->_load_layout("admin/index", $data);
	}

	function entradas(){
		$data['titulo'] = "Entradas de Blog";
		$this->_load_layout("admin/entradas.php", $data);	
	}

	function usuarios(){
		$data['titulo'] = "Usuarios";
		$this->_load_layout("admin/usuarios.php", $data);
	}

	function _load_layout($page , $data = []){
		$this->load->view("layout/header_admin.php", $data);
		$this->load->view($page, $data);
		$this->load->view("layout/footer_admin.php", $data);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url() . "login");	
	}
}