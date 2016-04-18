<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/18/16
 * Time: 14:25
 */
class Profile extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->title ='Profile';
        $this->render();
    }
}