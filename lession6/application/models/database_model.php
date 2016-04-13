<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/12/16
 * Time: 14:54
 */
class Database_Model extends CI_Model
{
    /**
     * Database_Model constructor.
     */

    function __construct(){
        parent::__construct();

        // initializes the database class
        $this->load->database();

    }

    /**
     *  Reconnect to database
     */
    public  function  reconnect_DB(){
        $this->db->reconnect();
    }

    /**
     *  Close connect to database
     */
    public function closeconnect_DB(){
        $this->db->close();
    }


}