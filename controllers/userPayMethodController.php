<?php
namespace coding\app\controllers;
class UserPayMethodController{
    function newPayment(){
        $this->view('app-userPayment-add');
    }

      

    public function savePayment(){

        //print_r($_POST);
        $pay=new UserPayment();
        $pay->name=$_POST['name'];
        // $pay->is_active=isset($_POST['is_active'])?1:0;
        $pay->save();
        if($pay->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }
    public static  function show(){
        require_once("app/views/app-userPaymentMethod-list.php");

    }
    public static  function add(){
        require_once("app/views/app-userPaymentMethod-add.php");

    }

    public static  function edit(){
        require_once("app/views/app-userPaymentMethod-edit.php");

    }
}
?>