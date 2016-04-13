<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Home_Model extends Database_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get all article form DataBase
     * @return array article from DB
     */
    function get_all_article(){
        $query  = $this->db->query('SELECT id, title, content, modified FROM articles');
        return $query->result_array();
    }


}
/* End of file '/Home.php' */
/* Location: ./application/models//Home.php */