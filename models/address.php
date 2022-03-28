<?php
namespace coding\app\models;



class Address extends Model{
   

    function __construct()
    {
        parent::$tblName="user_addresses";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}