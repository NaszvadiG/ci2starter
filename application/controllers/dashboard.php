<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$data = array();

		$data['content'] = 'backend/tables.php';

		$this->load->view('backend/base_template',$data);
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */