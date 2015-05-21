<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi_pengajar extends CI_Controller 
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('registrasi_pengajar');
		$this->load->view('footer');
	}
}