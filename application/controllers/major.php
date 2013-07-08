<?php 

class  Major extends CI_Controller
{

   public function __construct()
   {
        parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');

   }
       
	public function index()
	{
		$this->load->view('pages/college');
	
	}

	public function create_new()
	{
		$table=$this->load->model('college');

			

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('myform');
		}
		else
		{
			$this->load->view('formsuccess');
		}

	}

	public function edit()
	{
		$table=$this->load->model('college');

		$table->newCollege($this->input->post('programid'),$this->input->post('majordesc'),$this->input->post('majorcode'));

	}

	public function delete()
	{
		$table=$this->load->model('college');

		$table->newCollege($this->input->post('programid'),$this->input->post('majordesc'),$this->input->post('majorcode'));

	}







}




 ?>