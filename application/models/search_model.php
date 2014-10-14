<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search_model extends CI_Model {

     function __construct()
    {
       parent::__construct();
   $this->load->database();

          }
    public function getsearch($name,$lastname,$department)
    
    {
        if ($lastname!=''){ $this->db->where('lastName',$lastname);}
         if ($department!=''){ $this->db->where('department',$department);}
          
      $this->db->where('firstName',$name);
      $this->db->from('lecturers', 10, 20);
      
     
      // $this->db->select('product_title');
       // $res = $this->db->get('employees');
        $query = $this->db->get();
       // $rowcount = $query->num_rows();
        $data = $query->result_array();

       return $data;
         
         
    }
  }