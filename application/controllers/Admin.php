<?php
class Admin extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->library('form_validation');
			}
		public function index(){
					if ($this->session->userdata('username')=='') {

							$this->load->view('login');
							
						}
					else{
						redirect('publiqueinfo');
					}
			

					}
		
			
}
?>
