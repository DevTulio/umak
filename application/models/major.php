<?php 
	class Major extends CI_Model
	{

		public function new_major()
		{

			$data=array('ProgramID'=>$this->input->post('programid'),
						'MajorDesc'=>$this->input->post('majordesc'),
						'MajorCode'=>$this->input->post('majorcode')
						);
			$this->db->insert('major',$data);

		}

	}


 ?>