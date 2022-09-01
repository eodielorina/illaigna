<?php
class Demarches extends CI_Model{
/*page resaka pagignation*/
	public function select($record_id){
          $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
    
    $query=$this->db->get_where('public',array('ID_PUBLIC'=>$record_id));
      if($query->num_rows()>0)
      {
            return $query->row();
      }
  }



	public function demarche(){
		$this->db->select('*');
            $this->db->from('public');
          $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','PAPIERS-CITOYENNETÉ');
          	$query=$this->db->get()->num_rows();
            return $query;
          } 
public function page ($limit, $start) {
        $this->db-> limit ($limit, $start);
        $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','PAPIERS-CITOYENNETÉ');

       $query= $this->db->get('public')->result(); 
        return $query;
    }

  

			public function selectsante(){
         $this->db->select('*');
            $this->db->from('public');
          $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','SOCIAL-SANTÉ');
          return   $query=$this->db->get()->num_rows();;
			}
      public function pagesante ($limit, $start) {
        $this->db-> limit ($limit, $start);
        $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','SOCIAL-SANTÉ');

       $query= $this->db->get('public')->result(); 
        return $query;
    }
        public function selectfamille(){
          $this->db->select('*');
          $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
        $this->db->where('categorie =','FAMILLES');
            $this->db->from('public');
        return    $query=$this->db->get()->num_rows();

      }
       public function pagefamille ($limit, $start) {
        $this->db-> limit ($limit, $start);
        $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','FAMILLES');

       $query= $this->db->get('public')->result(); 
        return $query;
    }
      public function selecttravail(){
          $this->db->select('*');
          $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','TRAVAIL');
            $this->db->from('public');
      return      $query=$this->db->get()->num_rows();

      }
       public function pagetravail ($limit, $start) {
        $this->db-> limit ($limit, $start);
        $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','TRAVAIL');

       $query= $this->db->get('public')->result(); 
        return $query;
    }
      public function selectlogement(){
          $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->select('*');
          $this->db->where('categorie =','LOGEMENT');
            $this->db->from('public');
       return     $query=$this->db->get()->num_rows();

      }
       public function pagelogement ($limit, $start) {
        $this->db-> limit ($limit, $start);
        $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','LOGEMENT');

       $query= $this->db->get('public')->result(); 
        return $query;
    }
    public function selecttrans(){
          $this->db->select('*');
          $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','TRANSPORTS');
            $this->db->from('public');
           return    $query=$this->db->get()->num_rows();
         

      }
      public function pagetrans ($limit, $start) {
        $this->db-> limit ($limit, $start);
        $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','TRANSPORTS');

       $query= $this->db->get('public')->result(); 
        return $query;
    }
      public function selectarg(){
          $this->db->select('*');
          $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');

          $this->db->where('categorie =','ARGENT');
            $this->db->from('public');
        return    $query=$this->db->get()->num_rows();
            

      }
       public function pageargent ($limit, $start) {
        $this->db-> limit ($limit, $start);
        $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','ARGENT');

       $query= $this->db->get('public')->result(); 
        return $query;
    }
       public function selectjust(){
          $this->db->select('*');
          $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');

          $this->db->where('categorie =','JUSTICE');
            $this->db->from('public');
        return      $query=$this->db->get()->num_rows();
            

      }
        public function pagejust ($limit, $start) {
        $this->db-> limit ($limit, $start);
        $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','JUSTICE');

       $query= $this->db->get('public')->result(); 
        return $query;
    }
      public function selectet(){
          $this->db->select('*');
          $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');

         $this->db->where('categorie =','ÉTRANGERS');
            $this->db->from('public');
          return   $query=$this->db->get()->num_rows();
           

      }
       public function pageet ($limit, $start) {
        $this->db-> limit ($limit, $start);
        $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','ÉTRANGERS');
       $query= $this->db->get('public')->result(); 
        return $query;
    }
      public function selectlois(){
          $this->db->select('*');
          $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');

      $this->db->where('categorie =','LOISIRS ');
            $this->db->from('public');
          return    $query=$this->db->get()->num_rows();
           

      }
       public function pagelois($limit, $start) {
        $this->db-> limit ($limit, $start);
        $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $this->db->where('categorie =','LOISIRS');
       $query= $this->db->get('public')->result(); 
        return $query;
    }


	}

		

?>