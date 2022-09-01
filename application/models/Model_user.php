<?php
class Model_user extends CI_Model{
	function __construct(){
		parent::__construct();
				
	}

	public function enregistrer()
	{
		$data=array(
		'NOM'=>$this->input->post('nom'),
		'PSEUDO'=>$this->input->post('pseudo'),
		'MDP'=>md5($this->input->post('password')),
		'DROIT' =>$this->input->post("user"),
		

		);

		$inserer=$this->db->insert('utilisateur',$data);
		return  $inserer;
	}

	public function confirmer(){
		
		$data=array(
		'PSEUDO'=>$this->input->post('pseudo'),
		'MDP'=>md5($this->input->post('password'))
			);
		return $this->db->get_where('utilisateur',$data)->row_array();
		}
		public function getpseudo()
		{
		$query=$this->db->query('SELECT PSEUDO AND MDP FROM utilisateur');
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return NULL;
		 }

	}
		public function user($id_user){
			return $this->db->get_where('utilisateur',['id_utilisateur'=>$id_user])->row_array();
		}
		public function idservice($id_serv){
		return $this->db->get_where('services',['id_service'=>$id_serv])->row_array();
		}

		public function ajoutservice()
			{
			$data=array(
			'NOM_SERVICE'=>$this->input->post('nom'),
			'CODE_SERVICE'=>$this->input->post('code'),
			'categorie'=>$this->input->post('categorie'),
			'TYPE'=>$this->input->post('type')


			);
			$inserer=$this->db->insert('services',$data);
			return  $inserer;

	}
		public function ajoutrubrique(){
		$data=array(
			'rubriques'=>$this->input->post('nom'),
			);
			$inserer=$this->db->insert('rubriques',$data);
			return  $inserer;
	}
}
?>