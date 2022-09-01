<?php
class Gardes extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->helper('date');
				$this->load->model('garde','gr');
				}
	public function index(){
			if ($this->session->userdata('username')=='') {

					$this->load->view('login');
			}
			else {
			$nompharm = $this->gr->nompharm();
			$this->load->view('header');
			$this->load->view('ajoutgarde',['nompharm'=>$nompharm]);
			$this->load->view('footer');	
		}
	}
	public function addgarde(){
		$id=$this->input->post('idpharm');
		$date1=$this->input->post('date1');
		$date2=$this->input->post('date2');
		if($date1!=" " & $date2!=""){
		for($i=0;$i<count($date1);$i++){
			$data[]=[
				'Date_debut'=>$date1[$i],
				'Date_fin'=>$date2[$i],

				'ID_PHARMACIE'=>$id
			];

	}
		$this->db->insert_batch('garde',$data);

	}
	else{		
			exit;
	}
		redirect('gardes/liste');	
		}

	public function liste(){
		$query=$this->gr->gardes();
		$this->load->view('header');
		
		$this->load->view('listegarde',['query'=>$query]);
		$this->load->view('footer');	
			}
	public function gardeliste(){
		$first_date=date('Y-m-d', strtotime('-1 day'));
		$second_date=date('Y-m-d', strtotime(' +5 day'));
		$query=$this->gr->gardesemaine($first_date,$second_date);
		$this->load->view('header');
		$this->load->view('front/garde',['query'=>$query]);
		$this->load->view('footer',$first_date,$second_date);	
	}
	public function edit($record_id){
			$this->load->view('header');
			$record=$this->gr->select($record_id);
			$nompharm = $this->gr->nompharm();
			$this->load->view('updategarde',['nompharm'=>$nompharm,'record'=>$record]); 			
			$this->load->view('footer');
			}
	public function update($record_id){
			$idgarde=$this->input->post('idgarde');
			$id=$this->input->post('idpharm');
			$date1=$this->input->post('date1');
			$date2=$this->input->post('date2');
			$data= array(
						'Date_debut'	=> $date1,
						'Date_fin'=> $date2,
						'ID_PHARMACIE'=>$id
						);
		$this->gr->updategarde($idgarde,$data);
			redirect('gardes/liste');

					}
		public function delete($record_id)
			{
				if ($this->gr->deletegarde($record_id)){

				$this->session->set_flashdata('response','Suppression avec succés');
				}

			else{
				$this->session->set_flashdata('response','non');

				}
			redirect('gardes/liste');
		}
}
?>