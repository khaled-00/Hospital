<?php

//khaled abd elrahim

/* 
 * Responsible for Update employee
 */


class Update_emptiyee extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('emptiyees');
        $this->load->model('sections');
        $this->load->library('parser');
        $this->load->library('form_validation');
    } 
    //view
    public function Update($id)
    {
        //Check for session
        $this->Check_session();
        
        $data['section'] = $this->sections->GET_db();//all sections in menu select
        //all data for this emptiyee
        $data['emptiy'] = $this->emptiyees->show_db($id);
        
        $Pages = array('pa1'=>0,'pa2'=>1,'pa3'=>0);
        $this->load->view('include/html');
        $this->load->view('include/head',$Pages);
        $this->parser->parse('update_emptiyee',$data);
        $this->load->view('include/footer');
        //click update_emptiyee
        if($this->input->post('update_emptiyee'))
        {
            return $this->insert_update($id);
        }
    }
    //Ordered update
    public function insert_update($id)
    {   
        //validations___ENTER
        $this->form_validation->set_rules('name','FullName','xss_clean');
        $this->form_validation->set_rules('Section','Section','xss_clean');
        $this->form_validation->set_rules('Function','Degree','xss_clean');
        $this->form_validation->set_rules('gender','Gender','required|xss_clean');            
        $this->form_validation->set_rules('file','image','xss_clean');
        $this->form_validation->set_rules('Salary','Salary','numeric|xss_clean');
        //validations___END
        //data ___ENTER
        $data = array
            (
                'employee_name'=>  $this->input->post('name'),
                'Degree'=>         $this->input->post('Function'),
                'Notes'=>          $this->input->post('note'),
                'sc_id'=>          $this->input->post('Section'),
                'gender'=>         $this->input->post('gender'),
                'Salary'=>         $this->input->post('cose'),
                'Times'=>          $this->input->post('time'),
            );
        //data ___END
        //file___ENTER
        $V = array
            (
                'upload_path'=>'./uploads/',
                'allowed_types'=>'gif|jpg|png',
                'max_size'=>'5120', //5BM
                'file_name'=>rand(0,99999999)//name file
            );
        $this->load->library('upload',$V);//the library
        //if file image exists
        if($this->upload->do_upload('image'))//Ordered upload to this input      
        {
            $file_b = $this->upload->data();//data for file 
            $data['file'] = $file_b['file_name'];//insert new file
        //file___END
        }
        if($this->form_validation->run())
        {
            //ubdate data   
            if($this->emptiyees->Update_db($id,$data))
            {
                //back to this page add_patients
                header("Location: ".base_url()."update_emptiyee/Update/".$id."");  
            }
        }  
        else 
        {
            //error
            echo"<div class='mws-form-message error'>
                insert error !!
                    ".validation_errors()."
                </div>";
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
