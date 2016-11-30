<?php

//khaled abd elrahim

/* 
 * LOGIN PAGE
 */

class Login extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->library('session');
    }
    //page
    public function index()
    {
        
        $this->load->view('login');
        //chick ENTER
        if($this->input->post('chick'))
        {
            return $this->chick();
        }
    }
    //chick up user
    public function chick()
    {
        $user = $this->input->post('user_name');
        $pass = $this->input->post('password');
        
        if($this->user->chick_db($user,$pass))
        {
            //start session
            $sessions = array 
                (
                    'username'=>$this->input->post('user_name'),
                    'password'=>$this->input->post('password'),
                );
            $this->session->set_userdata($sessions);
            //Go to this page Add_patients
            header("Location: ".base_url()."add_patients");
           
        } 
        else 
        {
            echo 'error';
        }
    }
    
}

