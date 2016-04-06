<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/6/16
 * Time: 17:03
 */
class Controller
{
    var $view;
    var $action;

    public function __construct($options = [])
    {
        // get view, action tuong ung
        $this->view = '';
        $this->action = '';
        $this->dataNews = new ArrayObject([], ArrayObject::STD_PROP_LIST);
        $this->parseData($options);
    }

    public function parseData($options)
    {
        $data = (array)$options;
        $this->view = $data['view'];
        $this->action = $data['action'];
    }

    public function loadView($view = '')
    {
        // check view
        $view = $view ? $view : $this->view;
        extract((array) $this->dataNews);
        require(BASE_PATH . "/views/{$view}/index.php");
    }

}