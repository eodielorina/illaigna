<?php
class Mservice extends CI_Model{
          function __construct(){
          parent::__construct();
        }

        public function servpub(){
        return $this->db->get_where('services',['CODE_SERVICE'=>'public','TYPE'=>'service'])->result();
           } 
        public function servinfos(){
        return $this->db->get_where('services',['CODE_SERVICE'=>'infos pratique','TYPE'=>'Service'])->result();

           } 

        public function servurg(){
        return $this->db->get_where('services',['CODE_SERVICE'=>'Numero urgence','TYPE'=>'service'])->result();

           } 
       
         public    function gettype()
            {
        return $this->db->get_where('services',['CODE_SERVICE'=>'public','TYPE'=>'type'])->result();
               
            }
           public  function gettypeurg()
            {
        return $this->db->get_where('services',['CODE_SERVICE'=>'Numero urgence','TYPE'=>'type'])->result();
               
            }
              function gettypeeve()
            {
        return $this->db->get_where('services',['CODE_SERVICE'=>'Les evenements de Tamatave','TYPE'=>'type'])->result();
               
            }

        public function nomservicepub()  {
          $this->db->select('*');
          $this->db->from('public');
          $this->db->join('services','public.ID_SERVICE=services.ID_SERVICE');
          $query=$this->db->get();
          return $query->result();    
}      
      public function nomserviceinfos()  {
           $this->db->select('*');
          $this->db->from('infopratique');
          $this->db->join('services','infopratique.ID_SERVICE=services.ID_SERVICE');
          $query=$this->db->get();
          return $query->result();    
        }      


      public function nomserviceurgence()  {
           $this->db->select('*');
          $this->db->from('urgence');
          $this->db->join('services','urgence.ID_SERVICE=services.ID_SERVICE');
          $query=$this->db->get();
          return $query->result();    
}      

}
?>