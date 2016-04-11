<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/6/16
 * Time: 17:49
 */
class DetailController extends Controller
{
    public function initAction()
    {
        $this->database->query('SELECT id, title, content FROM articles');
        $dataArray = $this->database->resultset();

        foreach ($dataArray as $key => $value) {
            $dataArray[$key]['link'] = '/detail&id=' . $key;
        }

        $this->dataNews->data = $dataArray;
        $id = $_GET['id'];

        if (isset($this->dataNews->data[$id])) {
            $this->dataNews->id = $_GET['id'];
        } else {
            // redirect to home
            header('Location: /views/error.php?message=Data not found');
        }

        $this->loadView();
        $this->database->closeConnect();
    }

}