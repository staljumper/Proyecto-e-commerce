<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Administrador extends CI_Controller
{


    public function flogin()
    {

        $this->load->view('loginAdministrador');
    }




    public function login()
    {
        $nick = $this->input->post('nick');
        $contrasena = $this->input->post('contrasena');

        $this->load->model('administradorModel');


        if ($nick && $contrasena && $this->administradorModel->validate_user($nick, $contrasena)) {
            if ($this->session->userdata('isLoggedInUser')) {

                $this->load->view('panelAdministrador');
            }
        } else {

            $this->load->view('index');
        }
    }




    public function enlacePanel()
    {

        $this->load->view('panelAdministrador');
    }
    public function findex()
    {

        $this->load->view('index');
    }


    public function logout()
    {
        $this->load->model('AdministradorModel');
        $this->session->sess_destroy();

        $this->load->view('index');
    }





    public function modificar()
    {
        if ($this->input->post('update')) {
            $id = $this->input->post('id');
            $nick = $this->input->post('nick');
            $contrasena = $this->input->post('contrasena');
            $this->update($id, $nick, $contrasena);
        }

        if ($this->input->post('delete')) {
            $nick = $this->input->post('nick');
            $this->delete($nick);
        }

        if ($this->input->post('cerrar')) {
            $this->logout();
            
        }
    }


    public function update($id, $nick, $contrasena)
    {
        $this->load->model('administradorModel');
        if ($this->administradorModel->update_user($id, $nick, $contrasena)) {
            $this->administradorModel->validate_user($id, $nick, $contrasena);

            $this->load->view('paneladministrador');
        }
    }



    public function delete($nick)
    {
        $this->load->model('administradorModel');
        if ($this->administradorModel->delete_user($nick))

            $this->load->view('login');
    }
}
