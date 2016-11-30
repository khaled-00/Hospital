<?php

//khaled abdelrahim

/* 
 * Is responsible for the registration of new patients
 * Responsible for seeing all patients
 */

class Add_patients extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('patients');
        $this->load->model('sections');
        $this->load->library('parser');
        $this->load->library('form_validation');
        $this->load->library('session');
        
    }
    // views
    public function index()
    {
        //Check for session
        $this->Check_session();
        
        //Show Search
        $get['search'] = $this->search();
        //Get Sections
        $get['sc']  = $this->sections->GET_db();
        //show all patients
        $get['patients']  = $this->get_all();
        
        $Pages = array('pa1'=>1,'pa2'=>0,'pa3'=>0);
        $this->load->view('include/html');
        $this->load->view('include/head',$Pages);
        $this->parser->parse('add_patient',$get);
        $this->load->view('include/footer');
        
        //click Registration
        $get['error'] = $this->insert_pat();
        
    }
    //add patient
    public function insert_pat()
    {
        if($this->input->post('InsertPatient'))
        {
            //validations
            $this->form_validation->set_rules('fullname','FullName','required|xss_clean');
            $this->form_validation->set_rules('sectionname','Section','required|xss_clean');
            $this->form_validation->set_rules('Room','Room Number','numeric|xss_clean');
            $this->form_validation->set_rules('gender','Gender','required|xss_clean');
            $this->form_validation->set_rules('case','Case','required|xss_clean');
            $this->form_validation->set_rules('costs','Costs','numeric|xss_clean');
            //END validations

            if($this->form_validation->run())
            {
                $data = array
                (
                    'patients_name'=> $this->input->post('fullname'),
                    'sc_id'=>         $this->input->post('sectionname'),
                    'room'=>          $this->input->post('Room'),
                    'gender'=>        $this->input->post('gender'),
                    'Case'=>          $this->input->post('case'),
                    'Expenses'=>      $this->input->post('costs'),
                    'Notes'=>         $this->input->post('note')
                );
                $this->patients->insert_db($data);

                //back to this page add_patients
                header("Location: ".base_url()."add_patients");
            }
            else
            {
                echo"<div class='mws-form-message error'>
                    insert error !!
                        ".validation_errors()."
                    </div>";
            }
        }
    }
    //show all patients
    public function get_all()
    {
        $join = $this->patients->GET_join_db();
        return $join;
    }
    //search
    public function search()
    {
        if($this->input->post('search'))
        {
            $match = $this->input->post('textsearch');
            $get['search'] = $this->patients->search_patients_db($match);

            return $get['search'];
        }
    }
    //Delete patients
    public function Delete($id)
    {
        if( $this->form_validation->set_rules($id,'id','integer|xss_clean'))
        {
            $this->patients->Delet_db($id);
            //back to this page add_patients
            header("Location: ".base_url()."add_patients");
        }
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
