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
        $this->dataNews->data = Data::getData();
        $id = $_GET['id'];
        if(isset($this->dataNews->data[$id])){
            $this->dataNews->id = $_GET['id'];
        }else{
            // redirect to home
            header('Location: /views/error.php?message=Data not found');
        }
        $this->loadView();
    }


}