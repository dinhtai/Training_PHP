<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * method init home page
     */
    public function index()
    {
        $this->load->model('home_model');
        $data['data'] = $this->home_model->get_all_article();
        $this->load->view('home_view', $data);
    }

    /**
     * Method handler show detail page when click link
     */
    public function  detail(){
        var_dump($_REQUEST);
        $this->load->model('detail_model');
        $this->load->wview('detail_view');
    }

    public function get($id)
    {
        $id = intval($id);
        if ($id != 0) {
            $this->load->model('home_model');
            $data['content'] = $this->home_model->get($id);
            $this->load->view('home_view', $data);
        } else {
            redirect(site_url(), 'refresh');
        }
    }

    public function add()
    {
        $this->form_validation->set_rules('element', 'Element label', 'trim|required');
        if ($this->form_validation->run() === FALSE) {
            $data['input_element'] = array('name' => 'element', 'id' => 'element', 'value' => set_value('element'));
            $this->load->view('home_view', $data);
        } else {
            $field = $this->input->post('element');
            $this->load->model('home_model');
            if ($this->home_model->add(array('field_name' => $field))) {
                $this->load->view('home_success_page_view');
            } else {
                $this->load->view('home_error_page_view');
            }
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('element', 'Element label', 'trim|required');
        $this->form_validation->set_rules('id', 'ID', 'trim|is_natural_no_zero|required');
        if ($this->form_validation->run() === FALSE) {
            if (!$this->input->post()) {
                $id = intval($this->uri->segment($this->uri->total_segments()));
            } else {
                $id = set_value('id');
            }
            $data['input_element'] = array('name' => 'element', 'id' => 'element', 'value' => set_value('element'));
            $data['hidden'] = array('id' => set_value('id', $id));
            $this->load->view('home_view', $data);
        } else {
            $element = $this->input->post('element');
            $id = $this->input->post('id');
            $this->load->model('home_model');
            if ($this->home_model->update(array('element' => $element), array('id' => $id))) {
                $this->load->view('home_success_page_view', $data);
            } else {
                $this->load->view('home_error_page_view');
            }
        }
    }

    public function delete($id)
    {
        $id = intval($id);
        if ($id != 0) {
            $this->load->model('home_model');
            $data['content'] = $this->home_model->delete();
            $this->load->view('home_view', $data);
        } else {
            redirect(site_url(), 'refresh');
        }
    }
}
/* End of file '/Home.php' */
/* Location: ./application/controllers//Home.php */
