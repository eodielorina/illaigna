<?php 
class Numurgence extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->model('model_user','mu');
				$this->load->model('urgence');
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
				$query=$this->ms->nomserviceurgence();
				$servurg = $this->ms->servurg();
				$type = $this->ms->gettypeurg();
				$this->load->view('urgence',['query'=>$query,'user'=>$user,'servurg'=>$servurg,'type'=>$type]);
			}
		}
		public function form(){
		$this->load->view('header');
		$user=$this->mu->user($this->session->userdata('iduser'));
		$servurg = $this->ms->servurg();
		$type = $this->ms->gettypeurg();
		$this->load->view('formurgence',['user'=>$user,'servurg'=>$servurg,'type'=>$type]);
		$iduser=$this->input->post('iduser');
		$this->load->view('footer');	

		}
			
			
			public function addurg(){
				
				$idservice=$this->input->post('idservice');
				$iduser=$this->input->post('iduser');
				$type=$this->input->post('type');
				$idservice=$this->input->post('idservice');
				$phone=$this->input->post('phone');
				$data= array(
						'TYPE_SERVICE'	=> $type,
						'ID_SERVICE'=> $idservice,
						'NUM_PHONE'=> $phone,
						'ID_UTILISATEUR'=>$iduser		);
						$this->urgence->create($data);
						return redirect('Numurgence');
		}
		public function delete($record_id)
			{  
			if ($this->urgence->deleteurg($record_id)){

				$this->session->set_flashdata('response','ok');
			}
			else{
				$this->session->set_flashdata('response','non');

			}
			redirect('numurgence');
	}
	public function edit($record_id){
		$this->load->view('header');
			$this->load->view('footer');
			$user=$this->mu->user($this->session->userdata('iduser'));
			$query=$this->urgence->read();
			$type = $this->ms->gettypeurg();
			$servurg = $this->ms->servurg();
			$data=$this->urgence->select($record_id);
			$this->load->view('urgenceupdate',['query'=>$query,'user'=>$user,'type'=>$type,'data'=>$data,'servurg'=>$servurg]);


			}
	public function update(){
					$idurg=$this->input->post('idurg');
				$idservice=$this->input->post('idservice');
				$iduser=$this->input->post('iduser');
				$type=$this->input->post('type');
				$idservice=$this->input->post('idservice');
				$phone=$this->input->post('phone');
				$data= array(
						'TYPE_SERVICE'	=> $type,
						'ID_SERVICE'=> $idservice,
						'NUM_PHONE'=> $phone,
						'ID_UTILISATEUR'=>$iduser		);
						$this->urgence-> updateurgence($idurg,$data);
						return redirect('Numurgence');
		}

}

?>