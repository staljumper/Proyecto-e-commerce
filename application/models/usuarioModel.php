<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UsuarioModel extends CI_Model
{
    public function set_session($nick)
    {
        $this->session->set_userdata(
            array(
                'id' => $nick['id'],
                'nick' => $nick['nick'],
                'contrasena' => $nick['contrasena'],
                'nombre' => $nick['nombre'],
                'apellido1' => $nick['apellido1'],
                'apellido2' => $nick['apellido2'],
                'email' => $nick['email'],
                'telefono' => $nick['telefono'],
                'isLoggedInUser' => true
            )
        );
    }
    public function validate_user($nick, $contrasena)
    {

        $this->db->select('*');
        $this->db->from('usuarios');
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



    public function add_user($nick, $contrasena, $nombre, $apellido1, $apellido2, $email, $telefono)
    {
        $data = array(
            'nick' => $nick,
            'contrasena' => $contrasena,
            'nombre' => $nombre,
            'apellido1' => $apellido1,
            'apellido2' => $apellido2,
            'email' => $email,
            'telefono' => $telefono,
        );

        if ($this->db->insert('usuarios', $data))
            return true;
        else
            return false;
    }


    public function update_user($id, $nick, $contrasena, $nombre, $apellido1, $apellido2, $email, $telefono)
    {

        $this->db->set('contrasena', $contrasena);
        $this->db->set('nick', $nick);
        $this->db->set('nombre', $nombre);
        $this->db->set('apellido1', $apellido1);
        $this->db->set('apellido2', $apellido2);
        $this->db->set('email', $email);
        $this->db->set('telefono', $telefono);
        $this->db->where('id', $id);

        if ($this->db->update('usuarios')) {

            return true;
        } else {
            return false;
        }
    }


    /* Hacerlo con el nick */

    public function delete_user($nick)
    {
        $this->db->where("nick", $nick);
        if ($this->db->delete("usuarios"))
            return true;
        else {
            return false;
        }
    }
}
