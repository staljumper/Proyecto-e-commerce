<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{


    public function flogin()
    {

        $this->load->view('login');
    }




    public function login()
    {
        $nick = $this->input->post('nick');
        $contrasena = $this->input->post('contrasena');

        $this->load->model('UsuarioModel');


        if ($nick && $contrasena && $this->UsuarioModel->validate_user($nick, $contrasena)) {
            if ($this->session->userdata('isLoggedInUser')) {

                $this->load->view('panelUsuario');
            }
        } else {

            $this->load->view('index');
        }
    }



    public function fregistro()
    {

        $this->load->view('registro');
    }


    public function enlacePanel()
    {

        $this->load->view('panelUsuario');
    }
    public function registro()
    {
        $nick = $this->input->post('nick');
        $contrasena = $this->input->post('contrasena');
        $nombre = $this->input->post('nombre');
        $apellido1 = $this->input->post('apellido1');
        $apellido2 = $this->input->post('apellido2');
        $email = $this->input->post('email');
        $telefono = $this->input->post('telefono');

        $this->load->model('usuarioModel');
        if ($this->usuarioModel->add_user($nick, $contrasena, $nombre, $apellido1, $apellido2, $email, $telefono)) {
            $data['texto'] = "EXITO";

            $this->load->view('panelUsuario', $data);
        }
    }

    public function findex()
    {

        $this->load->view('index');
    }


    public function logout()
    {
        $this->load->model('usuarioModel');
        $this->session->sess_destroy();

        $this->load->view('index');
    }





    public function modificar()
    {
        if ($this->input->post('update')) {
            $id = $this->input->post('id');
            $nick = $this->input->post('nick');
            $nombre = $this->input->post('nombre');
            $apellido1 = $this->input->post('apellido1');
            $apellido2 = $this->input->post('apellido2');
            $email = $this->input->post('email');
            $telefono = $this->input->post('telefono');
            $contrasena = $this->input->post('contrasena');
            $this->update($id, $nick, $contrasena, $nombre, $apellido1, $apellido2, $email, $telefono);
        }

        if ($this->input->post('delete')) {
            $nick = $this->input->post('nick');
            $this->delete($nick);
        }

        if ($this->input->post('cerrar')) {
            $this->logout();
        }
    }


    public function update($id, $nick, $contrasena, $nombre, $apellido1, $apellido2, $email, $telefono)
    {
        $this->load->model('usuarioModel');
        if ($this->usuarioModel->update_user($id, $nick, $contrasena, $nombre, $apellido1, $apellido2, $email, $telefono)) {
            $this->usuarioModel->validate_user($id, $nick, $contrasena, $nombre, $apellido1, $apellido2, $email, $telefono);

            $this->load->view('panelUsuario');
        }
    }



    public function delete($nick)
    {
        $this->load->model('usuarioModel');
        if ($this->usuarioModel->delete_user($nick))

            $this->load->view('login');
    }
}
