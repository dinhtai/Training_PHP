<?php

class Post extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('post_model', 'post');

        $this->view->title = 'Home | Welcome';
        $this->view->nodes = $this->post->getPosts([]);
        $this->render();
    }

    public function post()
    {
        $this->load->helper('url');

        if ($this->input->post()) {
            $this->load->model('post_model', 'post');
            $content = $this->input->post('post_content');
            $this->post->postNews($content);
            redirect('post', 'refresh');
        }
    }

    public function detail($id)
    {
        $this->load->model('node');

        $node = $this->node->getNode($id);

        if (empty($node)) {
            redirect('/');
        }

        $this->view->node = $node;
        $this->view->title = $node->title;
        $this->view->nodes = $this->node->getNodes();

        $this->render();
    }

    public function profile()
    {
        $this->view->title = 'Profile';
        $this->render('profile');
    }

    public function docs()
    {
        $this->view->title = 'Docs';
        $this->render('docs');
    }


    public function create()
    {

    }

    public function update()
    {

    }

    public function delete($id)
    {

    }
}
