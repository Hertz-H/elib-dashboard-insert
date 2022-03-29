<?php
namespace coding\app\controllers;
use coding\app\models\Book;




class BookController extends Controller{
    public function saveBook(){

        //print_r($_POST);
        $book=new Book();
        $book->title=$_POST['name'];
        $book->category_id=$_POST['cate_id'];
        $book->price=$_POST['price'];
        $book->description=$_POST['description'];
        $book->author_id=$_POST['author_id'];
        $book->publisher_id=$_POST['publisher_id'];
        $book->pages_number=$_POST['page_num'];
        $book->format=$_POST['format'];
        $book->quantity=$_POST['quantity'];
        $book->created_by=4;
        
        // $book->image=$_POST['book_img'];
        




        
                 
        if($book->save())
        
        $this->view('feedback',['success'=>'تمت العملية بنجاح']);
        else 
        $this->view('feedback',['danger'=>'فشلت العملية']);
    
    }



    public   function show(){
     
        $this->view('app-book-list');
    }
    public   function add(){
        $this->view('app-book-add');

    }

    public   function edit(){
        $this->view('app-book-edit');
    }
}
?>