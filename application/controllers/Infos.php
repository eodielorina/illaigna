<?php
class infos extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->model('model_user','mu');
				$this->load->model('infopratique');
				$this->load->model('mservice','ms');
			}
			public function index(){
				if ($this->session->userdata('username')=='') {

					$this->load->view('login');
					
				}
			else{
				$this->load->view('header');
				$user=$this->mu->user($this->session->userdata('iduser'));
				$servinfos = $this->ms->servinfos();
				$query=$this->ms->nomserviceinfos();
				$this->load->view('infopratique',['query'=>$query,'user'=>$user,'servinfos'=>$servinfos]);
				$this->load->view('footer');
			  }
			}
		public function form(){
		$this->load->view('header');
		$user=$this->mu->user($this->session->userdata('iduser'));
		$iduser=$this->input->post('iduser');
		$servinfos = $this->ms->servinfos();
		$this->load->view('forminfos',['user'=>$user,'servinfos'=>$servinfos]);
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
					
	
					$iduser=$this->input->post('iduser');
					$iduser=$this->input->post('iduser');
					$phone=$this->input->post('phone');
					$adresse=$this->input->post('adresse');
					$idservice=$this->input->post('idservice');
					$phone=$this->input->post('phone');
				$data= array(
						'NUM_TELEPHONE'=> $phone,
						'PHOTOS'=> $url,
						'ADRESSE'=> $adresse,
						'ID_SERVICE'=> $idservice,
						'ID_UTILISATEUR'=>$iduser);
						$this->infopratique->create($data);
						$this->load->model('infopratique');
						return redirect('infos');

			}
				public function delete($record_id)
			{
			if ($this->infopratique->deleteinfos($record_id)){

				$this->session->set_flashdata('response','ok');
			}
			else{
				$this->session->set_flashdata('response','non');

			}
			redirect('infos');
		}
		public function edit($record_id){
		$user=$this->mu->user($this->session->userdata('iduser'));
		$record=$this->infopratique->select($record_id);
		$query=$this->infopratique->read();
		$type = $this->ms->gettype();
		$servinfos = $this->ms-> servinfos();
		$this->load->view('header');
		$this->load->view('updateinfos',['query'=>$query,'record'=>$record,'type'=>$type,'servinfos'=>$servinfos,'user'=>$user]); 	
			$this->load->view('footer');

			}
	public function update(){

		$type=explode('.', $_FILES["file"] ["name"]);
		$type=$type[count($type)-1];
		$photos=$_FILES["file"] ["name"];
		$url="images/".$photos;
if (in_array($type,array("jpeg","jpg","gif","png")));
				if(($_FILES["file"]["tmp_name"]))
				if(move_uploaded_file($_FILES["file"]["tmp_name"],$url));
					$idinfo=$this->input->post('idinfo');
					$iduser=$this->input->post('iduser');
					$iduser=$this->input->post('iduser');
					$phone=$this->input->post('phone');
					$adresse=$this->input->post('adresse');
					$idservice=$this->input->post('idservice');
					$phone=$this->input->post('phone');
					$sary=$this->input->post('sary');


						if (empty($photos)) {

				$data= array(
						'NUM_TELEPHONE'=> $phone,
						'PHOTOS'=> $sary,
						'ADRESSE'=> $adresse,
						'ID_SERVICE'=> $idservice,
						'ID_UTILISATEUR'=>$iduser);
						$this->infopratique->updateinfos($idinfo,$data);
						redirect('infos');
						

			}
			else{
				$data= array(
						'NUM_TELEPHONE'=> $phone,
						'PHOTOS'=> $url,
						'ADRESSE'=> $adresse,
						'ID_SERVICE'=> $idservice,
						'ID_UTILISATEUR'=>$iduser);
						$this->infopratique->updateinfos($idinfo,$data);
						redirect('infos');

			}
		}

		}
?>