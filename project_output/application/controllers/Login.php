<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/15/16
 * Time: 12:00
 */
class Login extends CI_Controller
{
    /**
     * Login constructor.
     */
    public function __construct()
    {
        parent::__construct();

        // load hash, model, form helper
        $this->load->library('encrypt');
        $this->load->model('user', 'model');
        $this->load->helper('form');
        $this->load->helper('security');

    }

    /**
     * Login index function
     */
    public function index()
    {
        $this->load->view("login/index");
    }

    /**
     * Verify Function
     */
    public function verify()
    {

        // load validation library
        $this->load->library('form_validation');

        // set validation rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if ($this->form_validation->run() == FAlSE) {
            // validation not ok
            $msg = validation_errors();
            var_dump($msg);
            $this->load->view('login/index.php');
        } else {
            $this->check_database();
        }
    }

    /**
     *  check_database function
     */
    public function check_database()
    {

        // create the data object
        $data = new stdClass();

        // get username and password
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->model->resolve_user_login($username, $password)) {
            $user_id = $this->model->get_user_id_from_username($username);
            $user = $this->model->get_user($user_id);


            // set session user datas
            $_SESSION['user_id'] = (int)$user_id;
            $_SESSION['username'] = (string)$username;
            $_SESSION['logged_in'] = (bool)true;
            $_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
            $_SESSION['is_admin'] = (bool)$user->is_admin;
            $_SESSION['email'] = (string)$user->email;

            redirect('Post', 'refresh');
        } else {
            // login failed
            redirect('login', 'refresh');
        }
    }


    /**
     * log out function
     */
    public function logout()
    {
        // create the data object
//        $data = new stdClass();
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {

            // remove session data
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }

            // show login page
            redirect('login', 'refresh');
        } else {
            redirect('Post', 'refresh');
            // show home page
        }
    }

}