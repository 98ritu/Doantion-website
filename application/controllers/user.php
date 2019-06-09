<?php
class User extends MY_Controller
{
	public function index()
	{
	$this->load->view('public/giggles');
	}
	public function donate()
	{
		$this->load->view('public/form');
	}
	public function valid()
	{
		$this->load->library('form_validation');
		if($this->form_validation->run('form_rules'))
		{
			$post=$this->input->post();
			$this->load->model('insertmodel');
			if($this->insertmodel->insertdata($post))
			{
				$this->load->library('session');
            $this->session->set_userdata('amount',$post['amount']);
			$this->load->view('public/final_donation');
			}
			else{
				$this->session->set_flashdata('feedback',"Database error,Try again");
				$this->session->set_flashdata('feedback_class','alert-danger');
	}
		}
	else
	{
		$this->load->view('public/form');
	}
}
}