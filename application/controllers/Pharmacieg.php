<?php
	
	class Pharmacieg extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->model('pharmacies','ph');
				$this->load->model('model_user','mu');			
			}
	public function index(){
		if ($this->session->userdata('username')=='') {

					$this->load->view('login');
					
				}
		else{
		$query=$this->ph->read();
		$this->load->view('header');
		$this->load->view('listepharmacie',['query'=>$query]);
		$this->load->view('footer');	
		}
	}
	public function form(){
		$user=$this->mu->user($this->session->userdata('iduser'));
		$iduser=$this->input->post('iduser');
		$this->load->view('header');
		$this->load->view('pharmacie',['user'=>$user]);
		$this->load->view('footer');	

	}

		public function addpharmacie(){

				$iduser=$this->input->post('iduser');
				$adresse=$this->input->post('adresse');
				$nom=$this->input->post('nom');
				$phone=$this->input->post('phone');
				$data= array(
						'NOM_PHARMACIE'	=> $nom,
						'NUMERO_PHARMACIE'=> $phone,
						'ADRESSE_PHARMACIE'=>$adresse,
						'ID_UTILISATEUR'=>$iduser);
						$this->ph->create($data);
						return redirect('pharmacieg');
					}
		public function delete($record_id)
			{  
			if ($this->ph->deletepharm($record_id)){

				$this->session->set_flashdata('response','ok');
			}
			else{
				$this->session->set_flashdata('response','non');

			}
			redirect('pharmacieg');
		}
		public function edit($record_id){
			$this->load->view('header');
			$this->load->view('footer');
		$record=$this->ph->select($record_id);
		$user=$this->mu->user($this->session->userdata('iduser'));
		$query=$this->ph->read();
		$this->load->view('update',['query'=>$query,'user'=>$user,'record'=>$record]); 			

			}
		public function update($record_id){
				$idparm=$this->input->post('idparm');
				$iduser=$this->input->post('iduser');
				$adresse=$this->input->post('adresse');
				$nom=$this->input->post('nom');
				$phone=$this->input->post('phone');
				$date=$this->input->post('date');
				$date2=$this->input->post('date2');

				$data= array(
						'NOM_PHARMACIE'	=> $nom,
						'NUMERO_PHARMACIE'=> $phone,
						'ADRESSE_PHARMACIE'=>$adresse,
						' DATE_GARDE'=> $date	,
						'DATE_GARDE_FIN'=> $date2,
						'ID_UTILISATEUR'=>$iduser);
						$this->ph->updatepharm($idparm,$data);
						return redirect('pharmacieg');

					}
		}
		
	?>
