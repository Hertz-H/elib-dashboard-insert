<?php
namespace coding\app\controllers;
class CategoryController {
    public static function show(){
          require_once("app/views/app-category-list.php");
        // echo "from home ";
        }
        public static  function  add(){
          require_once("app/views/app-category-add.php");
  
      }
      public static  function  edit(){
          require_once("app/views/app-category-edit.php");
  
      }
  
}





?>