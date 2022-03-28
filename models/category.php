<?php
namespace coding\app\models;



class Category extends Model{
   

    function __construct()
    {
        parent::$tblName="categories";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}