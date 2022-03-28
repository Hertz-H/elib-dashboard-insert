<?php
namespace coding\app\controllers;
class AuthorController{
    
   public static  function show(){
        require_once("app/views/app-author-list.php");

    }
    public static  function add(){
        require_once("app/views/app-author-add.php");

    }

    public static  function edit(){
        require_once("app/views/app-author-edit.php");

    }
}
?>