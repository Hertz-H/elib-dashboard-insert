<?php
namespace coding\app\controllers;
class UsersController{

  
    public static  function login(){
        require_once("app/views/login.php");

    }

    public static  function signup(){
        require_once("app/views/signup.php");

    }
 
    public static  function add(){
        require_once("app/views/app-user-add.php");

    }

    public static  function edit(){
        require_once("app/views/app-user-edit.php");

    }
    public static  function  show(){
        require_once("app/views/app-user-list.php");

    }
    
}
?>