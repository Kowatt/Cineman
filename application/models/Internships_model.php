<?php
    class Internships_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function get_students(){
            $query=$this->db->get('student');
            return $query->result_array();
        }

        public function add_student($id,$lastname,$firstname,$email){
            $data=array(
                'student'=>$id,
                'lastname'=>$lastname,
                'firstname'=>$firstname,
                'email'=>$email// Argument given to the method
            );
            return $this->db->insert('student',$data);
        }

        public function delete_student($id) {
            $data=array('student'=>$id);
            $this->db->delete('student',$data);
        }
    }
?>