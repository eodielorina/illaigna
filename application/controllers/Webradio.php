<?php 

class Webradio extends CI_Controller
{
			public function __construct(){
			parent::__construct();
		
			}
		public function index(){
			$this->load->view('front/header');
		$this->load->view('front/menu');

			$this->load->view('front/web_radio');
			$this->load->view('front/footer');
			
		}
	
}

 ?>