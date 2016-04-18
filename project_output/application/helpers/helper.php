<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/18/16
 * Time: 11:47
 */
class Helper extends CI_Config
{
    /**
     * Helper constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Show Alert View
     * @param $msg
     */
    public static function showAlert($msg)
    {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
}