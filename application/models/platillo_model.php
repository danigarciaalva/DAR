<?php

class Platillo_model extends CI_Model{
    
    function __construct(){
        parent::__construct();
    }
    
    function getAll(){
        $query = $this->db->get('platillo');
        return $query->result();
    }
}
?>