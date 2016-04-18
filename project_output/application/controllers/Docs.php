<?php
/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/18/16
 * Time: 14:28
 */
class Docs extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->title ='Docs';
        $this->render();
    }
}