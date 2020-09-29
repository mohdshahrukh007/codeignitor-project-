<?php

class auth_model extends CI_model
{
  //save students data in db
		 public function add($data)
		 {

				 
		 	$this->db->insert('student', $data);//1-tb name 2-array
		 		

		 }

		 public function fetch_data()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('student');  
         return $query;  
      }  

		 public function delete_data($id){
          $this->db->where('student_id',$id);  
         $this->db->delete('student');  
         // return $query;  
			
		 }  




}


  ?>