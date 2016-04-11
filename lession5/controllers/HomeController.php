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

        $this->database->query('SELECT id, title, content,modified FROM articles');
        $dataArray = $this->database->resultset();
        foreach ($dataArray as $key => $value) {
            $dataArray[$key]['link'] = '/detail&id=' . $key;
        }

        $this->dataNews->data = $dataArray;
        $this->loadView();
        $this->database->closeConnect();
    }
}