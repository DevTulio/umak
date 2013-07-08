<?php 

class  College extends CI_Controller
{

   public function __construct()
   {
        parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('collegedesc','College Description','required');
		$this->form_validation->set_rules('collegecode','College Code','required|is_unique[college.collegecode]');

   }
       
	public function index()
	{
		
		$table=$this->load->model('College_model');		

		$data['colleges']=$this->College_model->view_college();
		$this->load->view('view_college',$data);


	}

	public function create_new()
	{
		$this->load->model('College_model');

			

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('new_college');

		}
		else
		{	
			$this->College_model->create_new();
			$this->session->set_flashdata('success_message','1');
			redirect('college/index');

		}

	}


	public function edit($var)
	{


		$table=$this->load->model('College_model');		

		$data['colleges']=$this->College_model->viewsp_college($var);
		

		$this->form_validation->set_rules('collegecode', 'College Code', 'required');
		$this->form_validation->set_rules('collegedesc', 'College Description', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('edit_college',$data);
		}
		else
		{	

			# command sql update 			
			$this->College_model->edit($this->input->post('collegeid'));

			$_SESSION['message'] = "Changes to College id " . $this->input->post('collegeid') . " has been saved!";
			$this->College_model->edit($this->input->post('collegeid'));
						
			redirect(site_url('college'));

		}



	}

	public function update_college()
	{
			$this->load->model('College_model');

		

			if ($this->form_validation->run() == FALSE)
		{
			
				redirect('college/update');
		}
		else
		{	
			$this->session->set_flashdata('success_message','1');



		}


	}

	public function delete()
	{
		$table=$this->load->model('college');

		$table->newCollege($this->input->post('programid'),$this->input->post('majordesc'),$this->input->post('majorcode'));

	}








}




 ?>