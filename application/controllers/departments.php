<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departments extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('department_model');
    }
	
	public function index()
	{
		$data = array();

		$data['records'] = $this->department_model->get_all();

		$data['content'] = 'backend/departments/index';

		$this->load->view('backend/base_template',$data);
	}

	public function create()
	{
		if ($this->form_validation->run() == FALSE) 
		{
			$data = array();

			$data['content'] = 'backend/departments/create';

			$this->load->view('backend/base_template',$data);
		}
		else{
			$data = array(
					'department_name'=>$this->input->post('department_name')
					);
			$this->department_model->create($data);
			$this->session->set_flashdata('success', 'Record created');
			redirect("departments", 'refresh');
		}
	}

	public function edit()
	{
		$department_id = $this->uri->segment(3, 0);

		if ($this->form_validation->run() == FALSE) 
		{
			if (empty($department_id)) {
				$department_id = $this->input->post('department_id');
			}

			$data['records'] = $this->department_model->get($department_id);
			
			$data['content'] = 'backend/departments/edit';

			$this->load->view('backend/base_template',$data);
		}
		else{
			$data = array(
					'department_name'=>$this->input->post('department_name')
					);
			$this->department_model->update($department_id,$data);
			$this->session->set_flashdata('success', 'Record updated');
			redirect("posts/edit/$department_id", 'refresh');
		}
	}

	public function show()
	{
		$department_id = $this->uri->segment(3, 0);

		$data['records'] = $this->department_model->get($department_id);
		
		$data['content'] = 'backend/departments/show';

		$this->load->view('backend/base_template',$data);
	}

	public function delete()
	{
		$department_id = $this->input->post('department_id');
		
		$this->department_model->delete($department_id);

		$this->session->set_flashdata('success', 'Record deleted');
		redirect("posts", 'refresh');

	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */