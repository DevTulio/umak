<?php 
	class College_model extends CI_Model
	{

		public function create_new()
		{
			$this->load->database();
			$data=array('collegedesc'=>$this->input->post('collegedesc'),
						'collegecode'=>$this->input->post('collegecode')				
						);


			$this->db->insert('college',$data);

		}

		public function view_college()
		{
			$query=$this->db->get('college');


			return $query;
		}

		public function viewsp_college($var)
		{
			$query=$this->db->get_where('college',array('id'=>$var));

			return $query->row_array();
		}

		public function edit($var)

		{
			$data=array('collegecode'=>$this->input->post('collegecode'),
						'collegedesc'=>$this->input->post('collegedesc')
				);

			$this->db->where('id',$var);
			$this->db->update('college',$data);
		}

	}


 ?>