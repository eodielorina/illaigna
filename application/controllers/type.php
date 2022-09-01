<?php
class Type extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->library('form_validation');
				$this->load->model('pharmacie');
				$this->load->model('publique');
				$this->load->model('model_user');
			}

		public function ajouter()
			{
				$this->form_validation->set_rules('nom','Nom','trim|required');
				$this->form_validation->set_rules('code','code','trim|required');
					if ($this->form_validation->run()==FALSE )
					{
						$this->load->view('Type');
					}
					else{
							$this->load->model('model_user');
							if($query=$this->model_user->ajouter())
							{
								$this->load->view('Type');
							}
							else
							{
								$this->load->view('Type');

							}
					}

			} 
}