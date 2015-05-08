<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reg_logs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model("Login");

		
	}

	public function index()
	{
		$this->load->view("login");
	}
	

	public function registration()
	{	
		$this->load->helper(array('form', 'url'));
		$account = $this->input->post();
		var_dump($account);
		$this->load->library("Form_validation");
		$this->form_validation->set_rules("first_name","First Name", "required");
		
		$this->form_validation->set_rules("last_name", "last Name", "trim|required");	
		$this->form_validation->set_rules("email", "email", "valid_email");		
		if($this->form_validation->run() == FALSE)
		{
			echo "echo";
		     $this->session->set_flashdata("errors",validation_errors());
		     var_dump(validation_errors());
			die();
		     redirect("/");
		}
		else
		{	

			$this->Login->login_registration($account);
		    $success_message = "Success!";
		    $this->session->set_flashdata("success",$success_message);
		    redirect("/");
		}
		

		
		
	}

	public function login()
	{
		$login_info = $this->input->post();


		$email = $login_info["email"];
		$password = md5($login_info["password"]);
		$this->Login->login_login($log_info);
		
	}



	public function welcome()
	{
		$account = $this->session->user_data("account");
		$this->load->view("welcome",array("account" => $account));
	}

	public function logout()
	{

	}
}
//end of main controller