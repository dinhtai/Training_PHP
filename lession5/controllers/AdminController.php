<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/11/16
 * Time: 11:14
 */
class AdminController extends Controller
{
    var $title = '';
    var $content = '';
    var $status = '';

    public function __construct()
    {
        // get data post from form
        if (isset($_POST['title']) || isset($_POST['content']) || isset($_POST['status'])) {
            $this->title = $_POST['title'];
            $this->content = $_POST['content'];
            $this->status = $_POST['status'];
            $this->updateData($this->title, $this->content, $this->status);
        }

        // get article edit
//        $idArticle = $_GET['id'] + 1;
//        $database = new Database();
//        $database->singleQuery("SELECT id, title, content FROM articles WHERE id = '$idArticle'");
//        $dataArticle = $database->single();
//        $this->article = $dataArticle;
//        var_dump($dataArticle);


    }

    public function initAction()
    {
        $this->loadView('Admin');
    }

    public function updateData($title, $content, $status)
    {
        $database = new Database();
        $query = "INSERT INTO articles (title,content,status)
                  VALUES ('$title', '$content', '$status')";
        if ($database->execQuery($query)) {
            $msg = "Insert Successfully!!!";
            echo "<script type= 'text/javascript'>alert('$msg'); </script>";
        } else {
            $msg = "Insert Error!!!";
            echo "<script type= 'text/javascript'>alert('$msg'); </script>";
        }

    }


}