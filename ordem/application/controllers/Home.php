<?php

defined('BASEPATH') or exit ('Ação não permitida');

    class Home extends CI_Controller{ 
        
        public function __construct() {
            parent::__construct();
        }
        
        public function index(){
            
            $this->load->view('layout/header');
            $this->load->view('home/index');
            $this->load->view('layout/footer');
        }
    
    }
    
    
    
   
    