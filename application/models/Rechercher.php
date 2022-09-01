<?php
class Rechercher extends MY_Model{

public function recherche($lettre){
		$this->db->select($lettre);
		$this->db->like($lettre);
		$this->db->or_like($lettre);
		$this->db->or_like($lettre);
		$this->db->or_like($lettre);
		$this->db->or_like($lettre);
		$this->db->or_like($lettre);
		$query=$this->db->get();
		return $query->result();
	}
	public function cherchereve($lettre){
		$this->db->like('NOM_EVENEMENT',$lettre);
		$this->db->or_like('TYPE_EVENEMENT',$lettre);
		$this->db->or_like('DESCRIPTION',$lettre);
		$this->db->or_like('Lieu',$lettre);
		$this->db->or_like('Tarif',$lettre);
		return $this->db->get('evenement')->result();	
	}
	public function chercherpub($lettre){
         $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
		$this->db->like('DEMARCHE',$lettre);
		$this->db->or_like('NOM_SERVICE',$lettre);
		$this->db->or_like('Etape',$lettre);
		$this->db->or_like('Class',$lettre);
		$this->db->or_like('papier1',$lettre);
		$this->db->or_like('papier2',$lettre);
		$this->db->or_like('papier3',$lettre);
		return $this->db->get('public')->result();


	}
	public function chercherinfo($lettre){
         $this->db->join('services','infopratique.ID_SERVICE=services.ID_SERVICE');
		$this->db->like('NUM_TELEPHONE',$lettre);
		$this->db->or_like('NOM_SERVICE',$lettre);

		$this->db->or_like('ADRESSE',$lettre);
		$this->db->or_like('PHOTOS',$lettre);
		return $this->db->get('infopratique')->result();


	}
	public function chercherurgence($lettre){
		$this->db->like('NUM_PHONE',$lettre);
		$this->db->or_like('NOM_SERVICE',$lettre);
		$this->db->or_like('TYPE_SERVICE',$lettre);
        $this->db->join('services','urgence.ID_SERVICE=services.ID_SERVICE');
		return $this->db->get('urgence')->result();

}

	public function cherchergarde($lettre){
         $this->db->join('pharmacie_de_garde','garde.ID_PHARMACIE=pharmacie_de_garde.ID_PHARMACIE');
		$this->db->like('NOM_PHARMACIE',$lettre);
		$this->db->or_like('NUMERO_PHARMACIE',$lettre);
		$this->db->or_like('ADRESSE_PHARMACIE',$lettre);
		$this->db->or_like('Date_debut',$lettre);
		$this->db->or_like('Date_fin',$lettre);
		return $this->db->get('garde')->result();


	}
		

}


?>
