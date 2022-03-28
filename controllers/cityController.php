<?php
namespace coding\app\controllers;
class CityController{
    
    public static  function show(){
        require_once("app/views/app-city-list.php");

    }
    public static  function add(){
        require_once("app/views/app-city-add.php");

    }

    public static  function edit(){
        require_once("app/views/app-city-edit.php");

    }
}
?>