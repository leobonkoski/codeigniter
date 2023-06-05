<?php

class Users_model extends CI_Model{

    public function listing_data (){
        return $this->db->get("users")->result_array();
    }

    public function save_user ($user_data){
        $this->db->insert("users", $user_data);
        $this->querylog->save_query_in_db();

    }

    public function show_user ($user_id){

        return $this->db->get_where("users", array
            ("id"=> $user_id
            )
        
        )->row_array();
    }


    public function update_user ($user_id, $user_data){
        $this->db->where("id", $user_id);
        return $this->db->update("users", $user_data);



    }

    public function delete_user ($user_id){
        $this->db->where("id", $user_id);
        return $this->db->delete("users");

    

    }

    public function update_status_inactive ($user_id, $user_data){
        $this->db->where("id", $user_id);
        $this->db->set("inactive", 1);
        return $this->db->update("users", $user_data);
       

    }

    public function update_status_active ($user_id, $user_data){
        $this->db->where("id", $user_id);
        $this->db->set("inactive", 0);
        return $this->db->update("users", $user_data);
       

    }

  


}