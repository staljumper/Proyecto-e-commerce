<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdministradorModel extends CI_Model
{
    public function set_session($nick)
    {
        $this->session->set_userdata(
            array(
                'id' => $nick['id'],
                'nick' => $nick['nick'],
                'contrasena' => $nick['contrasena'],
                'isLoggedInUser' => true
            )
        );
    }
    public function validate_user($nick, $contrasena)
    {

        $this->db->select('*');
        $this->db->from('administradores');
        $this->db->where('nick', $nick);
        $this->db->where('contrasena', $contrasena);
        $resultado = $this->db->get();
        $array = $resultado->result_array();

        if (count($array) == 1) {
            $this->set_session($array[0]);
            return true;
        } else {
            return false;
        }
    }



    public function update_user($id, $nick, $contrasena)
    {

        $this->db->set('contrasena', $contrasena);
        $this->db->set('nick', $nick);
        $this->db->where('id', $id);

        if ($this->db->update('administradores')) {

            return true;
        } else {
            return false;
        }
    }


 

    public function delete_user($nick)
    {
        $this->db->where("nick", $nick);
        if ($this->db->delete("administradores"))
            return true;
        else {
            return false;
        }
    }
}
