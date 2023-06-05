<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inactive_Users extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        permission();
        $this->load->model("users_model");
    }

   
    public function index(){


        $data['users'] = $this->users_model->listing_data();
        $data['title'] = 'Users';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/inactive_users', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);

    }


    public function delete ($user_id){

      
        $this->users_model->delete_user($user_id);
        redirect("http://localhost/codeigniter/users");
       


    }


    

   
}