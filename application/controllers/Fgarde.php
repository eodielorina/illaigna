<?php
class Fgarde extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
		$this->load->model('garde','gr');
		}
	public function index(){
		$first_date=date('Y-m-d');
		$second_date=date('Y-m-d',strtotime('+ 7 day'));
		$query=$this->gr->gardesemaine($first_date,$second_date);
		$this->load->view('front/header');
		$this->load->view('front/garde',['query'=>$query],$first_date,$second_date);
		$this->load->view('front/footer');
	}

}
?>