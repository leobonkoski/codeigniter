<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
        $this->load->view('pages/users', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);

    }

    public function add_user(){
   
        $data['title'] = 'Users';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form_user', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);

    }

    public function save_user(){
        
        $user_data = $_POST;
        $this->users_model->save_user($user_data);
        redirect("http://localhost/codeigniter/dashboard");
    }

    public function edit_user($user_id){

        $data['user'] = $this->users_model->show_user($user_id);
        $data['title'] = 'Edit';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form_user', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);


    }

    public function update ($user_id){


        $user_data = $_POST;
        $this->users_model->update_user($user_id, $user_data );
        redirect("http://localhost/codeigniter/users");
       


    }

    public function delete ($user_id){

      
        $this->users_model->delete_user($user_id);
        redirect("http://localhost/codeigniter/dashboard");
       


    }

    
    public function inactive_user ($user_id){

      
        $user_data = $_POST;
        $this->users_model->update_status_inactive($user_id, $user_data );
        redirect("http://localhost/codeigniter/users");
       


    }

    public function active_user ($user_id){

      
        $user_data = $_POST;
        $this->users_model->update_status_active($user_id, $user_data );
        redirect("http://localhost/codeigniter/users");
       


    }


    







    

   
}