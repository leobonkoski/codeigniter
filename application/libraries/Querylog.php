<?php

class Querylog {
    protected $CI;

    public function __construct() {        
        $this->CI =& get_instance();
    }

    function save_query_in_db() {
        date_default_timezone_set('America/Sao_Paulo'); 
        $query = $this->CI->db->last_query();
        $times = $this->CI->db->query_times; 
        $time = round(doubleval($times[2]), 5);
        $this->CI->db->query('INSERT INTO queryLog_tbl(`query`, `executedTime`, `timeTaken`, `executedBy`) '
            . 'VALUES ("'.$query.'", "'.date('m-d-Y h:i:s a', time()).'", "'.$time.'","'.$_SESSION['logged_user']['name'].'")');
    }
}