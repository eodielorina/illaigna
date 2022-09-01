<?php 

class Recherche extends CI_Controller
{
	public function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->library('form_validation');
				$this->load->model('rechercher','rch');
			}
		
	 		public function search(){
				$lettre=$this->input->post('lettre',true);
				
				if($eve=$this->rch->cherchereve($lettre)) {;
				/*$pub=$this->rch->chercherpub($lettre);
				//$infos=$this->rch->chercherinfo($lettre); pour infopratique il y rein pour le moment
				$urg=$this->rch->chercherurgence($lettre);
				$gard=$this->rch->cherchergarde($lettre);*/

				$this->load->view('front/header');
				$this->load->view('front/menu');
				$this->load->view('front/affiche',['eve'=>$eve]);
				$this->load->view('front/footer');}
				if($pub=$this->rch->chercherpub($lettre)){;
				/*;
				//$infos=$this->rch->chercherinfo($lettre); pour infopratique il y rein pour le moment
				$urg=$this->rch->chercherurgence($lettre);
				$gard=$this->rch->cherchergarde($lettre);*/

				$this->load->view('front/header');
				$this->load->view('front/menu');
				$this->load->view('front/affiche',['eve'=>$eve]);
				$this->load->view('front/footer');}
					/*if($query = $this->rch->chercher($lettre)){
						$data['rech']=$query;
					$this->load->view('front/header');
					$this->load->view('front/menu');
					$this->load->view('front/affiche',$data);
					$this->load->view('front/footer');
					}*/
					else{
					$this->load->view('front/header');
					$this->load->view('front/menu');
					$this->load->view('front/aucun');
					$this->load->view('front/footer');
					}
		}
		public function selectid($record_id){
		$data=$this->rch->select($record_id);
		$this->load->view('front/header');
		$this->load->view('front/menu');
		$this->load->view('front/recherche',['data'=>$data]);
		$this->load->view('front/footer');
      }


      
}

 ?>