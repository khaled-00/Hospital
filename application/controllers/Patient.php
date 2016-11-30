<?php

//khaled abd elrahim

/* 
 * Responsible for seeing one patient data
 */


class Patient extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('patients');
        $this->load->library('parser');
        $this->load->library('form_validation');
        
    }
    //all views
    public function view($id)
    {
        //Check for session
        $this->Check_session();
        
        //all data
        $data['dat'] = $this->patients->show_db($id);
       
        
        $Pages = array('pa1'=>1,'pa2'=>0,'pa3'=>0);
        $this->load->view('include/html');
        $this->load->view('include/head',$Pages);
        $this->parser->parse('patient',$data);
        $this->load->view('include/footer');
    }
    //Check for session
    public function Check_session()
    {
        if(! $this->session->userdata('username') || ! $this->session->userdata('password'))
        {
            //back to this page Login
            header("Location: ".base_url()."login");
        }
    }
}