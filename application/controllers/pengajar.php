<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengajar extends CI_Controller 
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('pengajar');
		$this->load->view('footer');
	}
}