<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        permission();
        $this->load->model("log_model");
    }

   
    public function index(){


        $data['log_database'] = $this->log_model->listing_log();
        $data['title'] = 'Log';
        $this->output->set_content_type('application/json');
        $this->load->view('pages/log', $data);
   
    }

    

    

   
}