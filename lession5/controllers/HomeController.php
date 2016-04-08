<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/6/16
 * Time: 17:33
 */
class HomeController extends Controller
{
    public function initAction()
    {
        $this->dataNews->data = Data::getData();
        $this->loadView();
    }
}