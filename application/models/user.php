<?php

//khaled abd elrahim

/* 
 * table user
 */

class User extends CI_Model
{
    //controller page (login.php) ___ENTER 
    
    //chick to data base
    public function chick_db($user,$pass)
    {
        $this->db->where('user_name',$user);
        $this->db->where('password',$pass);
        
        $get = $this->db->get('user');
        return $get->result();
    }
    
}

