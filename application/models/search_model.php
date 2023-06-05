<?php

class Search_model extends CI_Model{

    public function search_user ($search_data){


        if(empty($search_data)){
            return array();
        }

        $search_data = $this->input->post("search");
        $this->db->like("name",$search_data );
        return $this->db->get("users")->result_array();
    }


}