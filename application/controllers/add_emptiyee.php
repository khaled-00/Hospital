<?php

//khaled abd elrahim

/* 
 * Responsible for adding employees and offer all staff
 */

class Add_emptiyee extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('sections');
        $this->load->model('emptiyees');
        $this->load->library('parser');
        $this->load->library('form_validation');
        
    }
    //views
    public function index()
    {
        //Check for session
        $this->Check_session();
        
        //Show Search
        $data['search'] = $this->search();
        //show all sections
        $data['sec'] = $this->sections->GET_db();
        //show all emptiyee
        $data['show'] = $this->emptiyees->Get_db();
        
        $Pages = array('pa1'=>0,'pa2'=>1,'pa3'=>0);
        $this->load->view('include/html');
        $this->load->view('include/head',$Pages);
        $this->parser->parse('add_emptiyee',$data);
        $this->load->view('include/footer');
        
        //click Registration
        $data['error'] = $this->insert();
    }
    //insert new emptiyee
    public function insert()
    {
        if($this->input->post('Insert_employee'))//if click
        {
            //file___ENTER
            $V = array
                (
                    'upload_path'=>'./uploads/',
                    'allowed_types'=>'gif|jpg|png',
                    'max_size'=>'5120', //5BM
                    'file_name'=>rand(0,99999999)//name file
                );
            $this->load->library('upload',$V);//the library
            if($this->upload->do_upload('image'))//Check upload to this input
            {    
                $file_a = $this->upload->data();//data for file       
                //file___END

                //validations___ENTER
                $this->form_validation->set_rules('fullname',' FullName ','required|xss_clean');
                $this->form_validation->set_rules('section',' Section ','required|xss_clean');
                $this->form_validation->set_rules('function',' Degree ','required|xss_clean');
                $this->form_validation->set_rules('gender',' Gender ','required|xss_clean');
                $this->form_validation->set_rules('Salary',' Salary ','numeric|xss_clean');
                //validations___END

                //Time___ENTER         
                $t_on = $this->input->post('T_on');
                $t_oof = $this->input->post('T_oof');
                $time = 'From '.$t_on.' to '.$t_oof;
                //Time___END
                if($this->form_validation->run())
                {
                    $data = array
                        (
                            'employee_name'=>  $this->input->post('fullname'),
                            'Degree'=>         $this->input->post('function'),
                            'file'=>           $file_a['file_name'],
                            'Notes'=>          $this->input->post('note'),
                            'sc_id'=>          $this->input->post('section'),
                            'gender'=>         $this->input->post('gender'),
                            'Salary'=>         $this->input->post('Salary'),
                            'Times'=>          $time
                        );

                    if($this->emptiyees->insert_db($data))
                    {
                        //back to this page add_patients
                        header("Location: ".base_url()."add_emptiyee");
                    }

                }
                else 
                {
                    echo"<div class='mws-form-message error'>
                        insert error !!
                            ".validation_errors()."
                        </div>";
                }
            }
            else 
            {
                //eroore upload
                echo"<div class='mws-form-message error'>
                        insert error !!
                            ".$this->upload->display_errors()."
                        </div>";
            }
        }
    }
    //Delete Emptiyee
    public function Delete($id)
    {   
        if( $this->form_validation->set_rules($id,'id','integer|xss_clean'))
        {
            $this->emptiyees->delete_db($id);
            //back to this page add_patients
            header("Location: ".base_url()."add_emptiyee");
        }
    }
    //search
    public function search()
    {
        if($this->input->post('search'))
        {
            $match = $this->input->post('textsearch');
            $get['search'] = $this->emptiyees->search_emptiyee_db($match);

            return $get['search'];
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