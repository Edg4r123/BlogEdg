<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Admin_blog extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function login_admin($username,$userpassword)
	{
		$where = "(user_login='$username' OR user_email='$username') AND (user_pass='$userpassword')";
		$this->db->select("ID, user_email, user_status, display_name");
		$this->db->from("users"); // Nombre de la tabla 
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
}
?>