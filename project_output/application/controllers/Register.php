<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/18/16
 * Time: 10:35
 */
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // load form helper and validation library
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('user', 'model');
        $this->load->helper('security');

    }

    public function index()
    {
        $this->load->view("register/index");
    }

    public function verify()
    {
        var_dump('register validate');
        // create the data object
        $data = new stdClass();

        // set validation rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

        if ($this->form_validation->run() == false) {
            $msg = validation_errors();
            var_dump($msg);
//            Helper::showAlert();
            $this->load->view("register/index");
        } else {

            // get username, password, email
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if ($this->model->create_user($username, $email, $password)) {
                redirect('Post', 'refresh');
            } else {
                $this->load->view("register/index");
            }
        }

    }


}