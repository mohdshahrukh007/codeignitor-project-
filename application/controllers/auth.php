<?php
class auth extends CI_Controller {

	public function index(){

				 $this->load->model('auth_model');  
         //load the method of model  
         $data['fetch_data']=$this->auth_model->fetch_data();  
         //return the data in view  
         $this->load->view('satt', $data); 

	}

	public function add_stu_attendence(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('student_name','Student name','required');
    $this->form_validation->set_rules('attendance_date','Attendence','required');
    $this->form_validation->set_rules('student_id','Student id','required');
    $this->form_validation->set_rules('attendance_status','Attendence status');
    $this->form_validation->set_rules('grade','Grade','required');

	if($this->form_validation->run())
	    {
				// $this->load->view('satt');
				$this->load->model('auth_model');

				$data =array(
		 		 "student_name" => $this->input->post('student_name'),
		 		 "attendance_date"=>$this->input->post('attendance_date'),
		 		 "student_id"=>$this->input->post('student_id'),
		 		 "attendance_status" => $this->input->post('attendance_status'),
		 		 "grade"=>$this->input->post('grade'),
		 		);
		 		print_r($data); 
				$this->auth_model->add($data);
		         // $this->load->view('inserted');
				redirect(base_url() . "auth/inserted");

				}

	else{
		$this->index();	
		}

	}

	 public function inserted(){
		 	$this->index();		
		 	 }

     public function delete()  
      {  
         //data is retrive from this query  
         $id = $this->uri->segment(3);
         print_r($id);  
         $this->load->model('auth_model');
         $this->auth_model->delete_data($id);
				redirect(base_url()."auth/deleted");
                  // return $query;  
      }  

     public function deleted(){
		 	$this->index();		
		 	 }

 }

?>