<?php
namespace coding\app\controllers;
use coding\app\models\Category;



class CategoryController extends Controller{

  function newCategory(){
    $this->view('app-category-add');
    }

  

public function saveCategory(){

    //print_r($_POST);
    $category=new Category();
    $category->name=$_POST['name'];
    // $category->is_active=isset($_POST['is_active'])?1:0;
    $category->created_by=4;
    if($category->save())
    
    $this->view('feedback',['success'=>'تمت العملية بنجاح']);
    else 
    $this->view('feedback',['danger'=>'فشلت العملية']);

}
  
  public  function show(){
    $this->view("app-category-list");
        // echo "from home ";
        }
        public   function  add(){
          $this->view("app-category-add");
  
      }
      public   function  edit(){
        $this->view("app-category-edit");
  
      }
  
}





?>