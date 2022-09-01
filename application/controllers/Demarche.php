<?php
class Demarche extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->database();
				$this->load->library('session');
				$this->load->model('demarches','dem');
				$this->load->model('service');
				$this->load->library('pagination');
		}
		public function index(){
					$query=$this->dem->demarche();
					/*var_dump($query);*/
					$this->load->view('front/header');
					$this->load->view('front/publics',['query'=>$query]);
					$this->load->view('front/menu');
					}

					 public function publique($record_id){
		$data=$this->dem->select($record_id);
		$this->load->view('front/header');
		$this->load->view('front/menu');

		$this->load->view('front/pubaffiche',['data'=>$data]);
		$this->load->view('front/footer');
      }
				public function recherche(){
			$lettre=$this->input->post('lettre',true);
			if($query = $this->dem->recheche($lettre)){
				$data['serch']=$query;
			$this->load->view('front/header');
		$this->load->view('front/menu');

			$this->load->view('front/rechercheinfos',$data);
			$this->load->view('front/footer');

			}
			else{
			$this->load->view('front/header');
				$this->load->view('front/menu');

			$this->load->view('front/nodata');
			$this->load->view('front/footer');
			}
		}	 
		public function information(){

				$config['base_url']=base_url() . "demarche/information";
				$config['per_page']=4;
				$config['total_rows']=$this->dem->demarche();
				$config['num_links']=6;
				$config['full_tag_open'] = "<ul class='pagination  pull-right'>";
				$config['full_tag_close'] ="</ul>";
				$config['num_tag_open'] = '<li >';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = "<li ><li class='active'><a href='#'>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				$config['next_tag_open'] = "<li>";
				$config['next_tagl_close'] = "</li>";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tagl_close'] = "</li>";
				$config['first_tag_open'] = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_tag_open'] = "<li>";
				$config['last_tagl_close'] = "</li>";
				$config['prev_link']='Précédant';
				$config['next_link']='Suivant';
    		$this->pagination->initialize($config);
    	/*$data["links"] = $this->pagination->create_links();*/
		$data['query']=$this->dem->page($config['per_page'],$this->uri->segment(3));
		/*$nomservice=$this->service->read();*/
		/*$service=$this->dem->nomservice();*/
		$this->load->view('front/header');
		$this->load->view('front/menu');
		$this->load->view('front/information',$data);
		$this->load->view('front/footer');
      }
      
      public function infosante(){
      	$config['base_url']=base_url() ."demarche/infosante";
				$config['per_page']=4;
				$config['total_rows']=$this->dem->selectsante();
				$config['num_links']=6;
				$config['full_tag_open'] = "<ul class='pagination  pull-right'>";
				$config['full_tag_close'] ="</ul>";
				$config['num_tag_open'] = '<li >';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = "<li ><li class='active'><a href='#'>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				$config['next_tag_open'] = "<li>";
				$config['next_tagl_close'] = "</li>";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tagl_close'] = "</li>";
				$config['first_tag_open'] = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_tag_open'] = "<li>";
				$config['last_tagl_close'] = "</li>";
				$config['prev_link']='Précédant';
				$config['next_link']='Suivant';
    		$this->pagination->initialize($config);
    	/*$data["links"] = $this->pagination->create_links();*/
		$data['query']=$this->dem->pagesante($config['per_page'],$this->uri->segment(3));
		$this->load->view('front/header');
		$this->load->view('front/menu');
		$this->load->view('front/sante',$data);
		$this->load->view('front/footer');
      }
       public function famille(){
       		$config['base_url']=base_url() . "demarche/famille";
				$config['per_page']=4;
				$config['total_rows']=$this->dem->selectfamille();
				$config['num_links']=6;
				$config['full_tag_open'] = "<ul class='pagination  pull-right'>";
				$config['full_tag_close'] ="</ul>";
				$config['num_tag_open'] = '<li >';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = "<li ><li class='active'><a href='#'>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				$config['next_tag_open'] = "<li>";
				$config['next_tagl_close'] = "</li>";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tagl_close'] = "</li>";
				$config['first_tag_open'] = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_tag_open'] = "<li>";
				$config['last_tagl_close'] = "</li>";
				$config['prev_link']='Précédant';
				$config['next_link']='Suivant';
    		$this->pagination->initialize($config);
    	/*$data["links"] = $this->pagination->create_links();*/
		$data['query']=$this->dem->pagefamille($config['per_page'],$this->uri->segment(3));
		$this->load->view('front/header');
		$this->load->view('front/menu');
		$this->load->view('front/famille',$data);
		$this->load->view('front/footer');
      }
		public function travail(){
			$config['base_url']=base_url() . "demarche/travail";
				$config['per_page']=4;
				$config['total_rows']=$this->dem->selecttravail();
				$config['num_links']=6;
				$config['full_tag_open'] = "<ul class='pagination  pull-right'>";
				$config['full_tag_close'] ="</ul>";
				$config['num_tag_open'] = '<li >';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = "<li ><li class='active'><a href='#'>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				$config['next_tag_open'] = "<li>";
				$config['next_tagl_close'] = "</li>";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tagl_close'] = "</li>";
				$config['first_tag_open'] = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_tag_open'] = "<li>";
				$config['last_tagl_close'] = "</li>";
				$config['prev_link']='Précédant';
				$config['next_link']='Suivant';
    		$this->pagination->initialize($config);
    	/*$data["links"] = $this->pagination->create_links();*/
		$data['query']=$this->dem->pagetravail($config['per_page'],$this->uri->segment(3));
		$this->load->view('front/header');
		$this->load->view('front/header');
		$this->load->view('front/menu');
		$this->load->view('front/travail',$data);
		$this->load->view('front/footer');
      }
      public function logement(){
      	$config['base_url']=base_url() . "demarche/logement";
				$config['per_page']=4;
				$config['total_rows']=$this->dem->selectlogement();
				$config['num_links']=6;
				$config['full_tag_open'] = "<ul class='pagination  pull-right'>";
				$config['full_tag_close'] ="</ul>";
				$config['num_tag_open'] = '<li >';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = "<li ><li class='active'><a href='#'>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				$config['next_tag_open'] = "<li>";
				$config['next_tagl_close'] = "</li>";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tagl_close'] = "</li>";
				$config['first_tag_open'] = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_tag_open'] = "<li>";
				$config['last_tagl_close'] = "</li>";
				$config['prev_link']='Précédant';
				$config['next_link']='Suivant';
    		$this->pagination->initialize($config);
    	/*$data["links"] = $this->pagination->create_links();*/
		$data['query']=$this->dem->pagelogement($config['per_page'],$this->uri->segment(3));
		$this->load->view('front/header');
		$this->load->view('front/menu');
		$this->load->view('front/logement',$data);
		$this->load->view('front/footer');
      }
      public function transports(){
      	$config['base_url']=base_url() . "demarche/transports";
				$config['per_page']=4;
				$config['total_rows']=$this->dem->selecttrans();
				$config['num_links']=6;
				$config['full_tag_open'] = "<ul class='pagination  pull-right'>";
				$config['full_tag_close'] ="</ul>";
				$config['num_tag_open'] = '<li >';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = "<li ><li class='active'><a href='#'>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				$config['next_tag_open'] = "<li>";
				$config['next_tagl_close'] = "</li>";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tagl_close'] = "</li>";
				$config['first_tag_open'] = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_tag_open'] = "<li>";
				$config['last_tagl_close'] = "</li>";
				$config['prev_link']='Précédant';
				$config['next_link']='Suivant';
    		$this->pagination->initialize($config);
    	/*$data["links"] = $this->pagination->create_links();*/
		$data['query']=$this->dem->pagetrans($config['per_page'],$this->uri->segment(3));
		$this->load->view('front/header');
		$this->load->view('front/menu');
		$this->load->view('front/transport',$data);
		$this->load->view('front/footer');
      }
      public function argent(){
      	$config['base_url']=base_url() . "demarche/argent";
				$config['per_page']=4;
				$config['total_rows']=$this->dem->selectarg();
				$config['num_links']=6;
				$config['full_tag_open'] = "<ul class='pagination  pull-right'>";
				$config['full_tag_close'] ="</ul>";
				$config['num_tag_open'] = '<li >';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = "<li ><li class='active'><a href='#'>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				$config['next_tag_open'] = "<li>";
				$config['next_tagl_close'] = "</li>";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tagl_close'] = "</li>";
				$config['first_tag_open'] = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_tag_open'] = "<li>";
				$config['last_tagl_close'] = "</li>";
				$config['prev_link']='Précédant';
				$config['next_link']='Suivant';
    		$this->pagination->initialize($config);
    	/*$data["links"] = $this->pagination->create_links();*/
		$data['query']=$this->dem->pageargent($config['per_page'],$this->uri->segment(3));
		$this->load->view('front/header');
		$this->load->view('front/menu');
		$this->load->view('front/argent',$data);
		$this->load->view('front/footer');
      }
       public function justice(){
       	 	$config['base_url']=base_url() . "demarche/justice";
				$config['per_page']=4;
				$config['total_rows']=$this->dem->selectjust();
				$config['num_links']=6;
				$config['full_tag_open'] = "<ul class='pagination  pull-right'>";
				$config['full_tag_close'] ="</ul>";
				$config['num_tag_open'] = '<li >';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = "<li ><li class='active'><a href='#'>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				$config['next_tag_open'] = "<li>";
				$config['next_tagl_close'] = "</li>";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tagl_close'] = "</li>";
				$config['first_tag_open'] = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_tag_open'] = "<li>";
				$config['last_tagl_close'] = "</li>";
				$config['prev_link']='Précédant';
				$config['next_link']='Suivant';
    		$this->pagination->initialize($config);
    	/*$data["links"] = $this->pagination->create_links();*/
		$data['query']=$this->dem->pagejust($config['per_page'],$this->uri->segment(3));
		$this->load->view('front/header');
		$this->load->view('front/menu');
		$this->load->view('front/justice',$data);
		$this->load->view('front/footer');
      }
      public function etranger(){
      	 	$config['base_url']=base_url() . "demarche/etranger";
				$config['per_page']=4;
				$config['total_rows']=$this->dem->selectet();
				$config['num_links']=6;
				$config['full_tag_open'] = "<ul class='pagination  pull-right'>";
				$config['full_tag_close'] ="</ul>";
				$config['num_tag_open'] = '<li >';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = "<li ><li class='active'><a href='#'>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				$config['next_tag_open'] = "<li>";
				$config['next_tagl_close'] = "</li>";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tagl_close'] = "</li>";
				$config['first_tag_open'] = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_tag_open'] = "<li>";
				$config['last_tagl_close'] = "</li>";
				$config['prev_link']='Précédant';
				$config['next_link']='Suivant';
    		$this->pagination->initialize($config);
    	/*$data["links"] = $this->pagination->create_links();*/
		$data['query']=$this->dem->pageet($config['per_page'],$this->uri->segment(3));
		$this->load->view('front/header');
		$this->load->view('front/menu');
		$this->load->view('front/etranger',$data);
		$this->load->view('front/footer');
      }
       public function loisirs(){
       	$config['base_url']=base_url() . "demarche/loisirs";
				$config['per_page']=4;
				$config['total_rows']=$this->dem->selectlois();
				$config['num_links']=6;
				$config['full_tag_open'] = "<ul class='pagination  pull-right'>";
				$config['full_tag_close'] ="</ul>";
				$config['num_tag_open'] = '<li >';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = "<li ><li class='active'><a href='#'>";
				$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
				$config['next_tag_open'] = "<li>";
				$config['next_tagl_close'] = "</li>";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tagl_close'] = "</li>";
				$config['first_tag_open'] = "<li>";
				$config['first_tagl_close'] = "</li>";
				$config['last_tag_open'] = "<li>";
				$config['last_tagl_close'] = "</li>";
				$config['prev_link']='Précédant';
				$config['next_link']='Suivant';
    		$this->pagination->initialize($config);
    	/*$data["links"] = $this->pagination->create_links();*/
		$data['query']=$this->dem->pagelois($config['per_page'],$this->uri->segment(3));
		$this->load->view('front/header');
		$this->load->view('front/menu');
		$this->load->view('front/loisirs',$data);
		$this->load->view('front/footer');
      }
}
?>

