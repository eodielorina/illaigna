<?php
class Apropos extends CI_Controller{
			function __construct(){
				parent::__construct();
				
			}
		public function index(){
					$this->load->view('front/header');
					$this->load->view('front/apropos');
					$this->load->view('front/menu');
					$this->load->view('front/footer');

					}
	}
?>