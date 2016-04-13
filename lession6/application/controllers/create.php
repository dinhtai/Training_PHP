<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/13/16
 * Time: 10:06
 */
class create extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('create_model');
        $this->load->view('create_view');
    }
}