<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signupcontroller extends CI_Controller {
        public function __construct()
    {
        parent::__construct();

    //    $this->load->helper('form');
          $this->load->helper('url');

     //   $this->load->model('search_model');
      //  $this->load->view('search_form');
    }

   
	public function index(){
		$this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('content');
        $this->load->view('footer');
	}
	}

	?>
