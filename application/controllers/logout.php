<?php
//khaled abd elrahim

/* 
 * LOGOUT PAGE
 */


class Logout extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->library('session');
    }
    //destroy session
    public function index()
    {
        //destroy session
        $this->session->sess_destroy();
        //back to this page Login
        header("Location: ".base_url()."login");
    }
    
}


