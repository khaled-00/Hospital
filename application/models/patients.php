<?php
//khaled abdelrahim

/* 
 * Responsible for all patient information
 */

class Patients extends CI_Model
{
    //controller (add_Patients.php) __ENTER
    
    //add new Patients
    public function insert_db($data1)
    {
        $insert = $this->db->insert('patients',$data1);
        return $insert ;
    }
    //get all table
    public function GET_join_db()
    {
        $this->db->order_by('p_id','desc');
        //join
        $this->db->select('*');
        $this->db->from('patients');
        $this->db->join('sections', 'patients.sc_id = sections.sc_id');
        $get = $this->db->get();
        return $get->result();
    }
    //search in patients
    public function search_patients_db($match)
    {   //join
        $this->db->select('*');
        $this->db->from('patients');
        $this->db->join('sections', 'patients.sc_id = sections.sc_id');
        //search
        $this->db->like('patients_name',$match);
        $get = $this->db->get();
        
        return $get->result();
    }
    //Delete patients
    public function Delet_db($id)
    {
        $this->db->delete('patients', array("p_id" => $id));
    }
    //END controller (add_Patients.php) ___END
    //controller (Patients.php) ___ENTER
    
    //show one patient
    public function show_db($id)
    {
        //where
        $this->db->where("p_id",$id);
        //join
        $this->db->select('*');
        $this->db->from('patients');
        $this->db->join('sections', 'patients.sc_id = sections.sc_id');
        $show = $this->db->get();
        
        return $show->result();
    }
    //Ordered update
    public function Update_db($id,$data)
    {        
        //where
        $this->db->where("p_id",$id);
        //update
        $up = $this->db->update('patients',$data);   
        return $up;
    }
    //END controller (Patients.php) ___END
    //controller (Statistics.php) ___ENTER

    //get row
    public function row()
    {
        return $this->db->count_all('patients');
    }
    
    //num patients in ones section
    public function row_patients_Eyes()
    {
        $this->db->where("sc_id",1);
        return $this->db->count_all_results('patients');
    }
    public function row_patients_Teeth()
    {
        $this->db->where("sc_id",6);
        return $this->db->count_all_results('patients');
    }
    public function row_patients_Heart()
    {
        $this->db->where("sc_id",7);
        return $this->db->count_all_results('patients');
    }
    public function row_patients_intimal()
    {
        $this->db->where("sc_id",8);
        return $this->db->count_all_results('patients');
    }
    //num patients in ones section ___END
}