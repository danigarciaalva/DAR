<?php
class Platillo extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->model('platillo_model','platillo');
        $data = $this->platillo->getAll();
        $this->load->view('platilloview');
    }
}
?>