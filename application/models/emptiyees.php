<?php

//khaled abd elrahim

/* 
 * Responsible for all Emptiyee information
 */

class Emptiyees extends CI_Model
{
    //controller bage (add_emptiyee.php)
    
    //insert new Emptiyee
    public function insert_db($data)
    {
        $insert = $this->db->insert('staff',$data);
        return $insert ;
    }
    //Show all Emptiyee 
    public function Get_db()
    {
        $this->db->order_by('e_id','desc');
        //join
        $this->db->select('*');
        $this->db->from('staff');
        $this->db->join('sections','staff.sc_id = sections.sc_id');
        $GET = $this->db->get();
       
        return $GET->result();
    }
    //Delet Emptiyee
    public function delete_db($id)
    {
        $this->db->delete('staff', array("e_id" => $id));
    }
   //search in patients
    public function search_emptiyee_db($match)
    {   //join
        $this->db->select('*');
        $this->db->from('staff');
        $this->db->join('sections', 'staff.sc_id = sections.sc_id');
        //search
        $this->db->like('employee_name',$match);
        $get = $this->db->get();
        
        return $get->result();
    }
    //END controller (add_emptiyee.php) ___END
    
    //controller bage (update_emptiyee.php) ___ENTER
    //Ordered update
    public function Update_db($id,$data)
    {        
        //where
        $this->db->where("e_id",$id);
        //update
        $up = $this->db->update('staff',$data);   
        return $up;
    }
    //END controller (update_emptiyee.php) ___END
    
    //controller bage (emptiyee.php)___ENTER 
    //show one Emptiyee
    public function show_db($id)
    {
        //where
        $this->db->where("e_id",$id);
        //join
        $this->db->select('*');
        $this->db->from('staff');
        $this->db->join('sections', 'staff.sc_id = sections.sc_id');
        $show = $this->db->get();
        
        return $show->result();
    }
    //END controller (emptiyee.php) ___END
    //controller (Statistics.php) ___ENTER

    //get row doctor
    public function row_doctor()
    {
        $this->db->where("Degree",'Doctor');
        return $this->db->count_all_results('staff');
    }
    //get row reception
    public function row_reception()
    {
        $this->db->where("Degree",'reception');
        return $this->db->count_all_results('staff');
    }
    //get row Nurses
    public function row_Nurses()
    {
        $this->db->where("Degree",'Nurses');
        return $this->db->count_all_results('staff');
    }
    //get row to section
    public function Get()
    {
        $this->db->where("Degree",'Nurses');
        return $this->db->count_all_results('staff');
    }
    #####################################################
    ############ Statistics.php -> the table ############
    #####################################################
    //section Eyes ___ENTER
    public function Get_reception_Eyes()
    {
        $this->db->where("Degree",'reception');
        $this->db->where("sc_id",1);
        return $this->db->count_all_results('staff');
    }
    public function Get_Doctor_Eyes()
    {
        $this->db->where("Degree",'Doctor');
        $this->db->where("sc_id",1);
        return $this->db->count_all_results('staff');
    }
    public function Get_Nurses_Eyes()
    {
        $this->db->where("Degree",'Nurses');
        $this->db->where("sc_id",1);
        return $this->db->count_all_results('staff');
    }
    //section Eyes ___END
    //section Teeth ___ENTER
    public function Get_reception_Teeth()
    {
        $this->db->where("Degree",'reception');
        $this->db->where("sc_id",6);
        return $this->db->count_all_results('staff');
    }
    public function Get_Doctor_Teeth()
    {
        $this->db->where("Degree",'Doctor');
        $this->db->where("sc_id",6);
        return $this->db->count_all_results('staff');
    }
    public function Get_Nurses_Teeth()
    {
        $this->db->where("Degree",'Nurses');
        $this->db->where("sc_id",6);
        return $this->db->count_all_results('staff');
    }
    //section Teeth ___END
    //section Heart ___ENTER
    public function Get_reception_Heart()
    {
        $this->db->where("Degree",'reception');
        $this->db->where("sc_id",7);
        return $this->db->count_all_results('staff');
    }
     public function Get_Doctors_Heart()
    {
        $this->db->where("Degree",'Doctors');
        $this->db->where("sc_id",7);
        return $this->db->count_all_results('staff');
    }
     public function Get_Nurses_Heart()
    {
        $this->db->where("Degree",'Nurses');
        $this->db->where("sc_id",7);
        return $this->db->count_all_results('staff');
    }
    //section Heart ___END
    //section intimal ___ENTER
     public function Get_reception_intimal()
    {
        $this->db->where("Degree",'reception');
        $this->db->where("sc_id",8);
        return $this->db->count_all_results('staff');
    }
    public function Get_Doctors_intimal()
    {
        $this->db->where("Degree",'Doctors');
        $this->db->where("sc_id",8);
        return $this->db->count_all_results('staff');
    }
     public function Get_Nurses_intimal()
    {
        $this->db->where("Degree",'Nurses');
        $this->db->where("sc_id",8);
        return $this->db->count_all_results('staff');
    }
    //section intimal ___END
    
}
