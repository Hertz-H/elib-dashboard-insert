<?php
namespace coding\app\controllers;
class AddressController{
    
    public static  function show(){
        require_once("app/views/app-address-list.php");

    }
    public static  function add(){
        require_once("app/views/app-address-add.php");

    }

    public static  function edit(){
        require_once("app/views/app-address-edit.php");

    }
}
?>