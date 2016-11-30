<?php

//khaled abd elrahim 

/* 
 * To view the hospital data
 */

class Statistics extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->model('patients');
        $this->load->model('sections');
        $this->load->model('emptiyees');
        $this->load->library('parser');
    }
    
    public function index()
    {
        //Check for session
        $this->Check_session();
        
        $data = array 
        (
            //row all hospital
            'sections'=>$this->sections->row(),
            'patients'=>$this->patients->row(),
            'doctor'=>$this->emptiyees->row_doctor(),
            'reception'=>$this->emptiyees->row_reception(),
            'Nurses'=>$this->emptiyees->row_Nurses(),

            //row of Degree Eyes
            'reception_Eyes'=>$this->emptiyees->Get_reception_Eyes(),
            'Doctor_Eyes'=>$this->emptiyees->Get_Doctor_Eyes(),
            'Nurses_Eyes'=>$this->emptiyees->Get_Nurses_Eyes(),
            //row of Degree Heart
            'reception_Heart'=>$this->emptiyees->Get_reception_Heart(),
            'Doctor_Heart'=>$this->emptiyees->Get_Doctors_Heart(),
            'Nurses_Heart'=>$this->emptiyees->Get_Nurses_Heart(),
            //row of Degree Teeth
            'reception_Teeth'=>$this->emptiyees->Get_reception_Teeth(),
            'Doctor_Teeth'=>$this->emptiyees->Get_Doctor_Teeth(),
            'Nurses_Teeth'=>$this->emptiyees->Get_Nurses_Teeth(),
            //row of Degree intimal
            'reception_intimal'=>$this->emptiyees->Get_reception_intimal(),
            'Doctor_intimal'=>$this->emptiyees->Get_Doctor_Teeth(),
            'Nurses_intimal'=>$this->emptiyees->Get_Nurses_intimal(),

            //row patients of ones section
            'row_patients_Eyes'=>$this->patients->row_patients_Eyes(),
            'row_patients_Teeth'=>$this->patients->row_patients_Teeth(),
            'row_patients_Heart'=>$this->patients->row_patients_Heart(),
            'row_patients_intimal'=>$this->patients->row_patients_intimal(),

        );
        
        $Pages = array('pa1'=>0,'pa2'=>0,'pa3'=>1);
        $this->load->view('include/html');
        $this->load->view('include/head',$Pages);
        $this->load->view('Statistics',$data);
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