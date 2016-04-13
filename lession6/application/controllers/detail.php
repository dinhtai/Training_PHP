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
        $id = $_GET['id'] + 1;
        $this->load->model('detail_model');
        // get article where id = $_GET['id']
        $data['data'] = $this->detail_model->get_article_id($id);
        $this->load->view('detail_view', $data);
    }

}