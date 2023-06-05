<?php


function permission(){
    $blocker = get_instance();
    $logout_user =  $blocker->session->userdata("logged_user");
    if(!$logout_user){
      $blocker->session->set_flashdata("danger", "You must be logged in to access this page!");
      redirect("login");
    }
    return $logout_user;




}