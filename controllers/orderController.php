<?php
namespace coding\app\controllers;
class OrderController {
    public static function show(){
          require_once("app/views/app-order-list.php");
        // echo "from home ";
        }
        public static  function add(){
          require_once("app/views/app-order-add.php");
  
      }
  
      public static  function edit(){
          require_once("app/views/app-order-edit.php");
  
      }
  
}





?>