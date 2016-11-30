<?php

//khaled abd elrahim

/* 
 * Responsible for show employee 
 */


class Emptiyee extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $this->load->model('emptiyees');
    }
    // views
    public function view($id)
    {
        //Check for session
        $this->Check_session();
        
        //get data
        $data['emp'] = $this->emptiyees->show_db($id);
        
        $Pages = array('pa1'=>0,'pa2'=>1,'pa3'=>0);
        $this->load->view('include/html');
        $this->load->view('include/head',$Pages);
        $this->parser->parse('emptiyee',$data);
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