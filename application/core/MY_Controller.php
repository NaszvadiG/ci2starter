<?php

class MY_Controller extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('user_id');
		// check is logged in here

        if (!$this->ion_auth->logged_in())
		{
			// redirect('auth/login');
		}
		
		$data = new stdClass();
		
		$data->the_user = $this->user_data();
		$this->the_user = $data->the_user;
		$this->load->vars($data);
		$this->current_datetime = date("Y-m-d H:i:s");			
	}
	
	function user_data()
	{		
		$user_data = array();

		if($this->ion_auth->is_admin())
		{
			$this->load->model('user_model');
			$user_data = $this->user_model->user_info()->get_by('user_id', $this->user_id);
			
			if (empty($user_data->site_language)) {
				$user_data->site_language = 'malay';
			}			
		}
		else if($this->ion_auth->in_group('general_admin')) //reserved for future
		{

		}
		else if($this->ion_auth->in_group('members'))
		{
			$this->load->model('user_model');
			$user_data = $this->user_model->user_info()->get_by('user_id', $this->user_id);
		}

		return $user_data;
	}

}