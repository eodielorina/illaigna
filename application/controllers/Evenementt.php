<?php
class Evenementt extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->library('session');
				$this->load->model('model_user','mu');
				$this->load->model('evenements');
				$this->load->model('mservice','ms');

			
			}

		public function index(){
				if ($this->session->userdata('username')=='') {

					$this->load->view('login');
					
				}
			else{
			$this->load->view('header');
			$this->load->view('footer');
			$user=$this->mu->user($this->session->userdata('iduser'));
			$query=$this->evenements->read();
			$type = $this->ms->gettypeeve();
			$this->load->view('evenement',['query'=>$query,'user'=>$user,'type'=>$type]);
			}
		}
		public function form(){
		$this->load->view('header');
		$user=$this->mu->user($this->session->userdata('iduser'));
		$type = $this->ms->gettypeeve();
		$this->load->view('formevenement',['user'=>$user,'type'=>$type]);
		$iduser=$this->input->post('iduser');
		$this->load->view('footer');	

		}
			
		public function add(){

					$type=explode('.', $_FILES["file"] ["name"]);
					$type=$type[count($type)-1];
					$photos=$_FILES["file"] ["name"];
					$url="images/".$photos;
			if (in_array($type,array("jpeg","jpg","gif","png")));
							if(($_FILES["file"]["tmp_name"]))
							if(move_uploaded_file($_FILES["file"]["tmp_name"],$url));
						var_dump($url);
					$data= array(
						'NOM_EVENEMENT'	=> $this->input->post('nom'),
						'DESCRIPTION'=> $this->input->post('des'),
						'Lieu'=> $this->input->post('lieu'),
						'Tarif'=> $this->input->post('tarif'),
						'PHOTOS'=> $url,
						' DATE_EVENEMENT'=>$this->input->post('date'),
						'TYPE_EVENEMENT'=>$this->input->post('papier'),
						'DATE_EVENEMENT_FIN'=> $this->input->post('date2'),
						'ID_UTILISATEUR'=>$this->input->post('iduser'));
						var_dump($data);
						$this->load->model('evenement');
						$this->evenements->create($data);
						return redirect('Evenementt');
	}
	

		
			public function edit($record_id){
				$this->load->view('header');
			$this->load->view('footer');
			$user=$this->mu->user($this->session->userdata('iduser'));
			$query=$this->evenements->read();
			$type = $this->ms->gettypeeve();
			$data=$this->evenements->select($record_id);
			$this->load->view('evenementupdate',['query'=>$query,'user'=>$user,'type'=>$type,'data'=>$data]);


			}
			public function delete($record_id)
			{
				if ($this->evenements->deletevenement($record_id)){

				$this->session->set_flashdata('response','Suppression avec succés');
				}

			else{
				$this->session->set_flashdata('response','non');

				}
			redirect('Evenementt');
			}
			public function update($record_id){

					$type=explode('.', $_FILES["file"] ["name"]);
					$type=$type[count($type)-1];
					$photos=$_FILES["file"] ["name"];
					$url="images/".$photos;
			if (in_array($type,array("jpeg","jpg","gif","png")));
							if(($_FILES["file"]["tmp_name"]))
							if(move_uploaded_file($_FILES["file"]["tmp_name"],$url));
				var_dump($url);
								$idev=$this->input->post('idev');
								$sary=$this->input->post('sary');
						if (empty($photos)) {

				$data= array(
						'NOM_EVENEMENT'	=> $this->input->post('nom'),
						'DESCRIPTION'=> $this->input->post('des'),
						'Lieu'=> $this->input->post('lieu'),
						'Tarif'=> $this->input->post('tarif'),
						'PHOTOS'=> $sary,
						' DATE_EVENEMENT'=>$this->input->post('date'),
						'TYPE_EVENEMENT'=>$this->input->post('papier'),
						'DATE_EVENEMENT_FIN'=> $this->input->post('date2'),
						'ID_UTILISATEUR'=>$this->input->post('iduser'));
						$this->evenements->updateevenement($idev,$data);
						return redirect('Evenementt');
			}
				else{
				$data= array(
						'NOM_EVENEMENT'	=> $this->input->post('nom'),
						'DESCRIPTION'=> $this->input->post('des'),
						'Lieu'=> $this->input->post('lieu'),
						'Tarif'=> $this->input->post('tarif'),
						'PHOTOS'=> $url,
						' DATE_EVENEMENT'=>$this->input->post('date'),
						'TYPE_EVENEMENT'=>$this->input->post('papier'),
						'DATE_EVENEMENT_FIN'=> $this->input->post('date2'),
						'ID_UTILISATEUR'=>$this->input->post('iduser'));
						$this->evenements->updateevenement($idev,$data);
						return redirect('Evenementt');
					
					}
		
				}
				
		  
		}
?>