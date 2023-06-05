<?php

class Login_model extends CI_Model{

    public function doLogin($email, $password){
        
        $this->db->where("email",$email);
        $this->db->where("password",$password);
        $user_login = $this->db->get("users")->row_array();
        return $user_login;

    


    }



}