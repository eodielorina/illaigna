<?php
class Utilisateur extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->library('form_validation');
				$this->load->model('model_user');
				$this->load->model('user');
			}
			public function index(){
				if ($this->session->userdata('username')=='') {

					$this->load->view('login');
					
				}
		else{
				$query=$this->user->read();
				$this->load->view('header');
				$this->load->view('listeutilisateur',['query'=>$query]);
				$this->load->view('footer');		
			}
			}
		   public function enregistrer()
			{
				
			    $this->form_validation->set_rules('nom','Nom','trim|required');
				$this->form_validation->set_rules('pseudo','Pseudo','trim|required');
				$this->form_validation->set_rules('password','Mot de passe','trim|required|min_length[4]|max_length[20]');
				$this->form_validation->set_rules('passconf','Confirme Mot de passe','trim|required|matches[password]|min_length[4]|max_length[20]');
				$this->form_validation->set_rules('user','Recipients', 'required');
					if ($this->form_validation->run()==FALSE )
					{
								$this->load->view('header');
								$this->load->view('enregistrer');
								$this->load->view('footer');		
								
					}
					else{
							$this->load->model('model_user');
							if($query=$this->model_user->enregistrer())
							{
									$query=$this->user->read();
								$this->load->view('header');

								$this->load->view('listeutilisateur',['query'=>$query]);
							}
							else
							{
								$this->load->view('header');
								$this->load->view('enregistrer');
								$this->load->view('footer');

							}
					}

}
			public function edit($record_id){
				$this->load->view('header');
			$user=$this->model_user->user($this->session->userdata('iduser'));
			$query=$this->user->read();
			
			$model=$this->user->select($record_id);
			$this->load->view('updateuser',['query'=>$query,'user'=>$user,'model'=>$model]);
			$this->load->view('footer');

			}
			public function update($record_id){
				$this->form_validation->set_rules('password','Mot de passe','trim|required|min_length[4]|max_length[20]');
				$this->form_validation->set_rules('passconf','Confirme mot de passe','trim|required|matches[password]|min_length[4]|max_length[20]');
				$this->form_validation->set_rules('user','Recipients', 'required');
		if ($this->form_validation->run()==FALSE )
					{
						$model=$this->user->select($record_id);
						$this->load->view('header');
						$this->load->view('updateuser',['model'=>$model]);
						$this->load->view('footer');
						
					}
					else{
				$iduser=$this->input->post('iduser');

				$data=array(
		'NOM'=>$this->input->post('nom'),
		'PSEUDO'=>$this->input->post('pseudo'),
		'MDP'=>md5($this->input->post('password')),
		'DROIT' =>$this->input->post("user"),
		

		);
						$this->user->updateuser($iduser,$data);
						return redirect('utilisateur');
}

					}
			public function delete($record_id)
			{
				if ($this->user->deleteuser($record_id)){

				$this->session->set_flashdata('response','Suppression avec succés');
				}

			else{
				$this->session->set_flashdata('response','non');

				}
			redirect('Utilisateur');
			}
			}?>