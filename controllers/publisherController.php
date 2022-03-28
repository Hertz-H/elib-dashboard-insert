<?php
namespace coding\app\controllers;
class PublisherController{
    
    public static  function show(){
        require_once("app/views/app-publisher-list.php");

    }
    public static  function add(){
        require_once("app/views/app-publisher-add.php");

    }

    public static  function edit(){
        require_once("app/views/app-publisher-edit.php");

    }
}
?>