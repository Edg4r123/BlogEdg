<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Main extends CI_Controller
{
	
	function index(){
		$data['titulo'] = "mi pagina web";
		$this->_load_layout("index", $data);
	}

	function _load_layout($page , $data = []){
		$this->load->view("layout/header.php", $data);
		$this->load->view($page, $data);
		$this->load->view("layout/footer.php", $data);
	}
}