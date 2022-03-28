<?php
namespace coding\app\controllers;
class Controller{

    public static  function list(){
        require_once("app/views/app-publisher-list.php");

    }
    public static  function login(){
        require_once("app/views/login.php");

    }

    public static  function signup(){
        require_once("app/views/signup.php");

    }
   
   
    public static  function  add_cat(){
        require_once("app/views/app-category-add.php");

    }
    public static  function  edit_cat(){
        require_once("app/views/app-category-edit.php");

    }
}
?>