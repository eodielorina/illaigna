<?php
class Nouveau extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->library('form_validation');
				$this->load->model('model_user');
				$this->load->model('service','srv');

				$this->load->model('rubriques');
			}

			public function index(){
				if ($this->session->userdata('username')=='') {

					$this->load->view('login');
					
				}
		else{
				$query=$this->srv->read();
				$this->load->view('header');
				$this->load->view('listeservices',['query'=>$query]);
				$this->load->view('footer');		
				}
			}

		public function services()

			{	
				
				$data['rubrique'] = $this->rubriques->rub();

				$this->form_validation->set_rules('nom','Nom','trim|required');
				
					if ($this->form_validation->run()==FALSE )
					{	$this->load->view('header');
						$this->load->view('services',$data);
						$this->load->view('footer');	

						
					}
					else{
							$this->load->model('model_user');

							if($model=$this->model_user->ajoutservice())
							{
								
								$query=$this->srv->read();
								$this->load->view('header');
								$this->load->view('listeservices',['query'=>$query]);
								$this->load->view('footer');	
							}
							else
							{
								$this->load->view('services',$data);
							}
					}

			} 
				public function edit($record_id){
			$user=$this->model_user->user($this->session->userdata('iduser'));
			$query=$this->srv->read();
			$this->load->view('header');
			$model=$this->srv->select($record_id);
			$data= $this->rubriques->rub();			
			$this->load->view('updateservice',['query'=>$query,'user'=>$user,'data'=>$data,'model'=>$model]);
			$this->load->view('footer');

			}
			public function update($record_id){
				$iduser=$this->input->post('iduser');
				$nom=$this->input->post('nom');
				$code=$this->input->post('code');
				$class=$this->input->post('type');
				$categorie=$this->input->post('categorie');

				$idserv=$this->input->post('idserv');

				$data= array(
						'NOM_SERVICE'	=> $nom,
						'CODE_SERVICE'=> $code,
						'TYPE'=>$class,
						'categorie'=>$categorie


						);
						$this->srv->updateservice($idserv,$data);
						return redirect('Nouveau');

					}
			public function delete($record_id)
			{
				if ($this->srv->deleteservice($record_id)){

				$this->session->set_flashdata('response','Suppression avec succés');
				}

			else{
				$this->session->set_flashdata('response','non');

				}
			redirect('Nouveau');
			}
			public function rubrique()
			{
					$this->load->view('footer');
					$this->form_validation->set_rules('nom','Nom','trim|required');
			

					if ($this->form_validation->run()==FALSE )
					{
						$this->load->view('rubriques');
					}
					else{
							$this->load->model('model_user');
							if($query=$this->model_user->ajoutrubrique())
							{
								$this->load->view('rubriques');
							}
							else
							{
								$this->load->view('rubriques');

							}
					}

			} 
}