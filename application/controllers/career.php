<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Career extends CI_Controller 
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('career');
		$this->load->view('footer');
	}
}