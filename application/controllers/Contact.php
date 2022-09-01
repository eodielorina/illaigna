<?php
class Contact extends CI_Controller{
			function __construct(){
				parent::__construct();
				$this->load->library('email');
				$this->load->model('contacts');
				$this->load->library('session');
				$this->load->helper('email');
				$this->load->library('form_validation');
			}
				public function index(){
					$this->load->view('front/header');
					$this->load->view('front/contact');
					$this->load->view('front/menu');
					$this->load->view('front/footer');
					}
				public function message(){
				 		$this->load->library('email');
				   	 	$this->load->library('form_validation');
				   	 	$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');

			$this->form_validation->set_rules('nom', 'Nom', 'trim|required|min_length[4]|max_length[100]');
			$this->form_validation->set_rules('message', 'Message', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

                if ($this->form_validation->run() == FALSE)
                {

					$this->load->view('front/header');
					$this->load->view('front/contact');
					$this->load->view('front/menu');
					$this->load->view('front/footer');

                }
                else
                {

							$type=explode('.', $_FILES["file"] ["name"]);
							$type=$type[count($type)-1];
							$fichier=$_FILES["file"] ["name"];
							$pj="fichiers/".$fichier;
					if (in_array($type,array("jpeg","jpg","gif","png","doc","pdf","docx","pptx")));
									if(($_FILES["file"]["tmp_name"]))
						if(move_uploaded_file($_FILES["file"]["tmp_name"],$pj));
						   		$data=array(
								'nom'=>$this->input->post('nom'),
								'email'=>$this->input->post('email'),
								'message'=>$this->input->post('message'),
								'fichiers'=>$pj

							);

					// enregistrement message user dans la base de données
						$this->contacts->create($data);
				   	 	$sujet = 'Illaigna- Message de :  ' .$this->input->post('nom');
						$message .= $this->input->post('message');
						$email=$this->input->post("email");
						$message=$this->input->post("message");
						 $this->email->from($email);
						$this->email->to('illaignainfo@gmail.com');

						$this->email->subject($sujet);
						$this->email->message($message);
						$this->email->attach($pj);
					     $this->email->send();
					$this->session->set_flashdata('msg',"Merci de nous avoir envoyé ce mail!");
					$this->session->set_flashdata('msg_class','Veillez réesseyer!');
											    
					redirect('contact')	;
				

					}
					}


}


?>