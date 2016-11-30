<?php
//khaled abdelrahim

/* 
 * Responsible for all Sections information
 */

class Sections extends CI_Model
{
    //controller page (add_emptiyee.php/update_Patient.php/add_Patients.php)___ENTER
    
    //get all
    public function GET_db()
    {
        $get = $this->db->get('Sections');
        return $get->result();
    }
    //controller page (add_emptiyee.php/update_Patient.php/add_Patients.php)___END
    //controller (Statistics.php) ___ENTER

    //get row
    public function row()
    {
        return $this->db->count_all('Sections');
    }
}