<?php

//khaled abd elrahim

/* 
 * Responsible for the amendment to the patient data
 */


class Update_patient extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('patients');
        $this->load->model('sections');       
        $this->load->library('parser');
        $this->load->library('form_validation');
        
    }
    //view
    public function Update($id)
    {
        //Check for session
        $this->Check_session();
        
        //show sections
        $values['sec'] = $this->sections->GET_db();
        //show one patient
        $values['data'] = $this->patients->show_db($id);
        
        $Pages = array('pa1'=>1,'pa2'=>0,'pa3'=>0);
        $this->load->view('include/html');
        $this->load->view('include/head',$Pages);
        $this->parser->parse('update_patient',$values);
        $this->load->view('include/footer');
        
        //click updaet
        if($this->input->post('updaet_Patient'))
        {
            $v = $this->insert_update($id);
            if($v)
            {
                //back to this page add_patients
                header("Location: ".base_url()."update_patient/Update/".$id."");
            }
            else 
            {   //error
                echo"<div class='mws-form-message error'>
                    insert error !!
                        ".validation_errors()."
                    </div>";
            }
        }
    }
    //Enter update
    public function insert_update($id)
    {
        //validations
        $this->form_validation->set_rules('fullname','FullName','required|xss_clean');
        $this->form_validation->set_rules('Section','Section','xss_clean');
        $this->form_validation->set_rules('Room','Room Number','numeric|xss_clean');
        $this->form_validation->set_rules('gender','Gender','required|xss_clean');
        $this->form_validation->set_rules('case','Case','xss_clean');
        $this->form_validation->set_rules('costs','Costs','numeric|xss_clean');
        //END validations
        
        if($this->form_validation->run())
        {
            $data = array
                (
                    'patients_name'=>$this->input->post('fullname'),
                    'Case'=>$this->input->post('case'),
                    'sc_id'=>$this->input->post('Section'),
                    'gender'=>$this->input->post('gender'),
                    'Expenses'=>$this->input->post('costs'),
                    'room'=>$this->input->post('Room'),
                    'Notes'=>$this->input->post('Notes'),
                );
            $up = $this->patients->Update_db($id,$data);
            return $up;
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