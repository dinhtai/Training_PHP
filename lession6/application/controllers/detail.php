<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/12/16
 * Time: 16:40
 */
class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('detal_model');
        $this->load->view('detai_view');
    }

}