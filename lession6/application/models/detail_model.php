<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/12/16
 * Time: 16:42
 */
class Detail_Model extends Database_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get article where id form DataBase
     * @return array article from DB
     */
    function get_article_id($id){
        if(empty($id)){
            return false;
        }
        $query  = $this->db->query('SELECT title, content, modified FROM articles WHERE id = '. $id);
        return $query->result_array();
    }

}