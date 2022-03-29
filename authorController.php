<?php
namespace coding\app\controllers;
use coding\app\models\Author;

class AuthorController extends Controller{
    function newAuthor(){
        $this->view('app-author-add');
    }

      

    public function saveAuthor(){

        //print_r($_POST);
        $Author=new Author();
        $Author->name=$_POST['name'];
        $Author->phone=$_POST['phone'];
        $Author->email=$_POST['email'];
        $Author->bio=$_POST['bio'];
        $Author->created_by=4;
        // $Author->is_active=isset($_POST['is_active'])?1:0;
        $Author->save();
        if($Author->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }
   public   function show(){
    
        $this->view('app-author-list');  
    }
    public  function add(){
        $this->view('app-author-add');  

    }

    public   function edit(){
        $this->view('app-author-edit');  

    }
}
?>