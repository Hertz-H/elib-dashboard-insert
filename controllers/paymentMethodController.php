<?php
namespace coding\app\controllers;
class PaymentMethodController{
    
    public static  function show(){
        require_once("app/views/app-paymentMethod-list.php");

    }
    public static  function add(){
        require_once("app/views/app-paymentMethod-add.php");

    }

    public static  function edit(){
        require_once("app/views/app-paymentMethod-edit.php");

    }
}
?>