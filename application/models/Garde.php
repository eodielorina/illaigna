<?php
class Garde extends MY_Model{

	protected $table = 'garde';
 
  	 public function nompharm(){
  	 	  $this->db->select('*');
            $this->db->from('pharmacie_de_garde');
          	$query=$this->db->get();
            return $query->result(); 
          } 
public function servurg(){
        return $this->db->get_where('services',['CODE_SERVICE'=>'Numero urgence','TYPE'=>'service'])->result();

           }
  public function gardesemaine($first_date,$second_date){
          $this->db->select('*');
          $this->db->from('garde');
          $this->db->join('pharmacie_de_garde','garde.ID_PHARMACIE=pharmacie_de_garde.ID_PHARMACIE');
          $this->db->where('Date_fin >=',$first_date);
          $this->db->where('Date_fin <=',$second_date);
       $this->db->order_by('Date_debut','ASC');
          return $this->db->get()->result();           
  }

      public function gardes()  {
           $this->db->select('*');
          $this->db->from('garde');
          $this->db->join('pharmacie_de_garde','garde.ID_PHARMACIE=pharmacie_de_garde.ID_PHARMACIE');
           $this->db->order_by('Date_debut','ASC');
          $query=$this->db->get();
          return $query->result();    
        }     
        public function select($record_id){
      $query=$this->db->get_where('garde',array('ID_GARDE'=>$record_id));
          if($query->num_rows()> 0)
          {
            return $query->row();
          }
        
          }

      public function updategarde($record_id,$data){
      return $this->db->where('ID_GARDE',$record_id)
              ->update('garde',$data);
      } 

      public function deletegarde($record_id){

      return $this->db->delete('garde',array('ID_GARDE'=>$record_id));

      }
}

