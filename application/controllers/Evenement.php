<?php
class Evenement extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
		$this->load->model('evenements','event');
		$this->load->library('pagination');
		}
	public function index(){
		$first_date=date('Y-m-d');
		$second_date=date('Y-m-d',strtotime('+ 7 day'));
				$config['base_url']=base_url('evenement/index');
				$config['per_page']=6;
				$config['total_rows']=$this->event->events($first_date,$second_date);
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
		$event['query']=$this->event->eventsemaine($first_date,$second_date,$config['per_page'],$this->uri->segment(3));
		$this->load->view('front/header');
		$this->load->view('front/menu');

		$this->load->view('front/evenement',['query'=>$event]);
		$this->load->view('front/footer');
      }
      public function event($record_id){
		$data=$this->event->select($record_id);
		$this->load->view('front/header');
		$this->load->view('front/menu');

		$this->load->view('front/eventaffiche',['data'=>$data]);
		$this->load->view('front/footer');
      }
      public function recherche(){
			$lettre=$this->input->post('lettre',true);
			if($query = $this->event->eventrech($lettre)){
				$data['serch']=$query;
			$this->load->view('front/header');
			$this->load->view('front/menu');
			$this->load->view('front/rechercheevent',$data);
			$this->load->view('front/footer');

			}
			else{
			$this->load->view('front/header');
			$this->load->view('front/menu');

			$this->load->view('front/nodata');
			$this->load->view('front/footer');
			}
		}
		 public function date(){
		 	$date=$this->input->post('date',true);
			if($query = $this->event->recheredate($date)){
				$data['serch']=$query;
			$this->load->view('front/header');
				$this->load->view('front/menu');

			$this->load->view('front/rechercheevent',$data);
			$this->load->view('front/footer');

			}
			else{

			$this->load->view('front/header');
				$this->load->view('front/menu');

			$this->load->view('front/nodata');
			$this->load->view('front/footer');
			
			}
		}
}

?>