<?php
namespace coding\app\models;



class UserPayment extends Model{
   

    function __construct()
    {
        parent::$tblName="user_payment_methods";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}