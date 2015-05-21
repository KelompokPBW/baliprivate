<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail_pengajar extends CI_Controller 
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('detail_pengajar');
		$this->load->view('footer');
	}
}