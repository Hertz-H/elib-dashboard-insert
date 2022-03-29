<?php
namespace coding\app\controllers;
use coding\app\models\UserPayment;


class UserPayMethodController extends Controller{
    function newPayment(){
        $this->view('app-userPayment-add');
    }

      

    public function savePayment(){

        //print_r($_POST);
        $pay=new UserPayment();
        $pay->user_id=4;
        $pay->payment_id=1;	
        
        // $pay->is_active=isset($_POST['is_active'])?1:0;
        $pay->save();
        if($pay->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }
    public  function show(){
        $this->view("app-userPaymentMethod-list");

    }
    public   function add(){
        $this->view("app-userPaymentMethod-add");

    }

    public  function edit(){
        $this->view("app-userPaymentMethod-edit");

    }
}
?>