<?php

class Dashboard extends CI_Controller
{
    
    function __construct(){
        parent::__construct();
  
        // if($this->session->userdata('Active') !== TRUE){
        //     redirect('login');
        // }
        
    }
    
    
    public function index(){
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/nav_head');
        $this->load->view('templates/admin/side_nav');
        $this->load->view('dashboard');
        
        $this->load->view('templates/admin/footer');
    }
}