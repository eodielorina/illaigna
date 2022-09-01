<?php
class Pharmacie extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
		$this->load->model('garde','gr');
		$this->load->model('mservice','ms');

		}
	public function index(){
		$urg=$this->ms->nomserviceurgence();
		$first_date=date('Y-m-d');
		$second_date=date('Y-m-d',strtotime('+ 30 day'));
		$query=$this->gr->gardesemaine($first_date,$second_date);
		$this->load->view('front/header');
		$this->load->view('front/menu');
		$this->load->view('front/garde',['query'=>$query,'urg'=>$urg],$first_date,$second_date);
		$this->load->view('front/footer');
	}

}
?>