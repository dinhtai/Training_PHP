<?php

class Controller extends CI_Controller
{
    /**
     * Store current view data
     * @var array
     */
    var $view;

    /**
     * View theme name
     * @var string
     */
    var $theme;

    public function __construct()
    {
        parent::__construct();

        $this->theme = 'index';
        $this->view = new ArrayObject([], ArrayObject::STD_PROP_LIST);
    }

    /**
     * Render view with theme
     * @param  string $view [description]
     * @param  array $data [description]
     * @return [type]       [description]
     */
    public function render($view = '', $data = [])
    {
        /**router
         */
        if (empty($view)) {
            $view = $this->router->fetch_class() . '/' . $this->router->fetch_method();
        }

        /**
         * Build data put into view
         */
        $data = (array)$data + (array)$this->view;


        /**
         * Check for render with theme
         */
        if (strpos($view, 'login') !== FALSE) {
            $this->load->view($view, $data);
        } else {
            $data['content'] = $this->load->view($view . '.php', $data, true);
            $this->load->view($this->theme . '.php', $data);
        }
    }
}