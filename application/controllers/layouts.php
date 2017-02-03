<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layouts extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/index');
	}

	public function icons()
	{
		$this->load->view('layouts/icons');
	}

	public function tables()
	{
		$this->load->view('layouts/tables');
	}

	public function charts()
	{
		$this->load->view('layouts/charts');
	}

	public function notifications()
	{
		$this->load->view('layouts/notifications');
	}

	public function elements()
	{
		$this->load->view('layouts/elements');
	}

	public function panels()
	{
		$this->load->view('layouts/panels');
	}

	public function typography()
	{
		$this->load->view('layouts/typography');
	}

	public function login()
	{
		$this->load->view('layouts/page-login');
	}

	public function profile()
	{
		$this->load->view('layouts/page-profile');
	}

	public function lockscreen()
	{
		$this->load->view('layouts/page-lockscreen');
	}
}

/* End of file layouts.php */
/* Location: ./application/controllers/layouts.php */