<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/5/16
 * Time: 14:50
 */
class Test
{
    public  $newprop1 = "Hello this is new property";


    function getNewProp(){
        return  $this->newprop1;
    }

    function setNewProp($newProp){
        $this->newprop1 = $newProp;
    }

    function __construct()
    {
        echo 'Load test success !!';
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'The class "', __CLASS__, '" was destroyed "';
    }
}