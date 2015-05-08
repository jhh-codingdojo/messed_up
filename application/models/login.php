<?php

class Login extends CI_Controller{
	public function login_registration($post){
		$query="INSERT INTO users(first_name,last_name,email,password, created_at, updated_at) VALUES (?,?,?,?,NOW(),NOW())";
		$this->db->query($query, array($post["first_name"],$post["last_name"],$post["email"],$post["password"]));
	}

	public function login_login($email,$password){
		$query = "SELECT * FROM users WHERE email = ? and password = ?";
		$account =  $this->db->query($query,array($email,$password))->row_array();
		$this->session->set_userdata(array("account"=>$account));
	}

	
}

?>