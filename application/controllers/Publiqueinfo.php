<?php
class Publiqueinfo extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->model('publique','pu');
				$this->load->model('model_user','mu');
				$this->load->model('mservice','ms');

	}
	public	function index()
	
			{
				if ($this->session->userdata('username')=='') {

					$this->load->view('login');
					
				}
			else{
					$this->load->view('header');
					$users=$this->mu->user($this->session->userdata('iduser'));
					$query=$this->ms->nomservicepub();
					$servpub = $this->ms->servpub();
					$type = $this->ms->gettype();
					$this->load->view('public',['query'=>$query,'users'=>$users,'type'=>$type,'servpub'=>$servpub]);
					$this->load->view('footer');
				}
					
			}
			public function entrer(){
				$this->form_validation->set_rules('pseudo','Pseudo','trim|required');
				$this->form_validation->set_rules('password','Password','trim|required');
				$data['pseudo']=$this->mu->getpseudo();
				

				$query=$this->mu->confirmer();
				if ($query)
				{	 
					$data=array('username'=>$query['PSEUDO'],
						'iduser'=>$query['ID_UTILISATEUR'],
						'is_logged_in'=>true);
						
					$this->session->set_userdata($data);
					$users=$this->mu->user($this->session->userdata('iduser'));
					$query=$this->ms->nomservicepub();
					$type = $this->ms->gettype();
					$servpub = $this->ms->servpub();
					$this->load->view('header');
					$this->load->view('public',['query'=>$query,'users'=>$users,'type'=>$type,'servpub'=>$servpub]);
					$this->load->view('footer');
				}
				else{

						

						redirect('admin');
				
					}
		}	
		public function form(){
		$users=$this->mu->user($this->session->userdata('iduser'));
		$iduser=$this->input->post('iduser');
		$servpub = $this->ms->servpub();
		$type = $this->ms->gettype();
		$this->load->view('header');
		$this->load->view('formpublique',['users'=>$users,'type'=>$type,'servpub'=>$servpub]);
		$this->load->view('footer');	

		}
			public function addpub(){
					/*$type=explode('.', $_FILES["file"] ["name"]);
					$type=$type[count($type)-1];
					$photos=$_FILES["file"] ["name"];
					$url="images/".$photos;
			if (in_array($type,array("jpeg","jpg","gif","png")));
							if(($_FILES["file"]["tmp_name"]))
						if(move_uploaded_file($_FILES["file"]["tmp_name"],$url));*/
				$type = $this->ms->gettype();
				$servpub = $this->ms->servpub();
				$iduser=$this->input->post('iduser');
				$papier=$this->input->post('papier');
				$service=$this->input->post('service');
				$etape=$this->input->post('etape');
				$class=$this->input->post('class');
				$papier1=$this->input->post('papier1');
				$papier2=$this->input->post('papier2');
				$papier3=$this->input->post('papier3');
				/*$cat=$this->input->post('cat');*/
				$idservice=$this->input->post('idservice');
				$demo=$this->input->post('recup');
				$data= array(
						/*'icone'=> $url,
						'Categorie'=>$cat,*/
						'ID_SERVICE'=>$idservice,
						'Class'=>$class,
						'etape'=>$etape,
						'papier1'=>$papier1,
						'papier2'=>$papier2,
						'papier3'=>$papier3,
						/*TYPE_PAPIER''=> $papier,*/
						'DEMARCHE'=> $demo,
						'ID_UTILISATEUR'=>$iduser);
						$this->load->model('publique');
				
						$this->pu->create($data);
						$this->load->view('header');
						
						return redirect('publiqueinfo');
					$this->load->view('footer');

				}
	
		public function deletepub($record_id)
			{
				if ($this->pu->deletepubq($record_id)){

				$this->session->set_flashdata('response','Suppression avec succés');
				}

			else{
				$this->session->set_flashdata('response','non');

				}
			redirect('publiqueinfo');
			}

		
		public function edit($record_id){
			$this->load->view('header');
			$this->load->view('footer');
		$user=$this->mu->user($this->session->userdata('iduser'));
		$record=$this->pu->select($record_id);
		$query=$this->pu->read();
		$type = $this->ms->gettype();
		$servpub = $this->ms->servpub();
	$this->load->view('publiqueupdate',['query'=>$query,'record'=>$record,'type'=>$type,'servpub'=>$servpub,'user'=>$user]); 
			}
		public function update($record_id){

		/*	$type=explode('.', $_FILES["file"] ["name"]);
					$type=$type[count($type)-1];
					$photos=$_FILES["file"] ["name"];
					$url="images/".$photos;
			if (in_array($type,array("jpeg","jpg","gif","png")));
							if(($_FILES["file"]["tmp_name"]))
							if(move_uploaded_file($_FILES["file"]["tmp_name"],$url));
					var_dump($url);*/
				$idpub=$this->input->post('idpub');
				$iduser=$this->input->post('iduser');
				$papier=$this->input->post('papier');
				$idservice=$this->input->post('idservice');
				$demo=$this->input->post('recup');
				$etape=$this->input->post('etape');
				$class=$this->input->post('class');
				$papier1=$this->input->post('papier1');
				$papier2=$this->input->post('papier2');
				$papier3=$this->input->post('papier3');
				/*$cat=$this->input->post('cat');

								/*$sary=$this->input->post('sary');
						if (empty($photos)) {*/
				
				$data= array(
						/*'icone'=>$sary,
						'Categorie'=>$cat,*/

						'ID_SERVICE'=>$idservice,
						/*'TYPE_PAPIER'=> $papier,*/
						'Class'=>$class,
						'etape'=>$etape,
						'papier1'=>$papier1,
						'papier2'=>$papier2,
						'papier3'=>$papier3,
						'DEMARCHE'=> $demo,
						'ID_UTILISATEUR'=>$iduser);
						$this->pu->updatepublique($idpub,$data);
						return redirect('publiqueinfo

							');
						
					}


				/*	else{
				$data= array(
						'ID_SERVICE'=>$idservice,
						'TYPE_PAPIER'=> $papier,
						'DEMARCHE'=> $demo,
						'ID_UTILISATEUR'=>$iduser,
						'icone'=> $url);
						
						$this->pu->updatepublique($idpub,$data);
						return redirect('publiqueinfo');
					
					}
					}*/
		
		public function deconnect(){

			$this->session->unset_userdata('username');
					$this->load->view('login');
			
		}
	
	}

?>