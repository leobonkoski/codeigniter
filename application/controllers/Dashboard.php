<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        permission();
        $this->load->model("users_model");
    }
    
    
    public function index(){

        $data['users'] = $this->users_model->listing_data();
        $data['title'] = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/dashboard', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }

    public function search(){
        $this->load->model("search_model");
        $data['title'] = 'Search results for:'. '"'. $_POST["search"] .'"';
        $data['result_search'] = $this->search_model->search_user($_POST);
     
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/searching_result', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);


    }

    

   
}