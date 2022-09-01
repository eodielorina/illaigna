<?php
class Rubriques extends CI_Model{
    function __construct(){
        parent::__construct();
    }

	public function rub(){
     $query = $this->db->query('SELECT rubriques FROM rubriques');


        return $query->result();

	}
}

    ?>