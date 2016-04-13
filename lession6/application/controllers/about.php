<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/13/16
 * Time: 08:48
 */
class about extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('about_model');
        $this->load->view('about_view');
    }
}