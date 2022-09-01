<?php 

class Welcome extends MY_Controller
{
	
function __construct()
	{
		parent::__construct();
		$this->load->library('session');
				$this->load->model('model_user','mu');
				$this->load->model('evenement');
				$this->load->model('mservice','ms');
	}
		public function index(){
		$this->data['ohatra']='Bonjour ';
		$this->page="welcome_message";
		$this->layout();
	}
	public function test(){
		
		$this->page="testtemplate";
			
		$this->layout();
	}


}
