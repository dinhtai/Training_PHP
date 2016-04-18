<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/18/16
 * Time: 14:13
 */
class About extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->title = 'About';
        $this->render();
    }
}