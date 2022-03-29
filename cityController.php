<?php
namespace coding\app\controllers;
use coding\app\models\City;


class CityController extends Controller{
    function newCity(){
        $this->view('app-city-add');
    }

      

    public function saveCity(){

        print_r($_POST);
        $City=new City();
        $City->name=$_POST['name'];
        $City->created_by=4;
        // $City->is_active=isset($_POST['is_active'])?1:0;
      
        if($City->save())
        
        $this->view('feedback',['success'=>'تمت العملية بنجاح']);
        else 
        $this->view('feedback',['danger'=>'فشلت العملية']);

    }
    public  function show(){
        $this->view("app-city-list");

    }
    public   function add(){
        $this->view("app-city-add");

    }

    public   function edit(){
        $this->view("app-city-edit");

    }
}
?>