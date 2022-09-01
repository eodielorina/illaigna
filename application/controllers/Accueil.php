<?php
class Accueil extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->library('form_validation');
			}
		public function index(){
						
			$this->load->view('front/accueil');
			$this->load->view('front/menu');

					}
		public function accueil(){
			
			$this->load->view('front/accueil');
			$this->load->view('front/menu');
		}
			
}
?>
