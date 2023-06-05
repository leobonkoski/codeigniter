<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    
    public function index(){


        $data['title'] = 'Sign-up';

        $this->load->view('pages/login', $data);
      
    }

    public function login_user()
    {
        $this->load->model("login_model");
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user_login = $this->login_model->doLogin($email, $password);

        if($user_login){
            $this->session->set_userdata("logged_user", $user_login);
            redirect("dashboard");
            


        }else {
            redirect("login");
        }


    }

    public function logout_user()
    {
        $this->session->unset_userdata("logged_user");
        redirect("login");

    }

   
}