<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->model("database_model");
			//Do your magic here
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
