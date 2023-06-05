<?php
class Log_model extends CI_Model {
	
    public function listing_log (){
        return $this->db->get("querylog_tbl")->result_array();
    }


    


}
