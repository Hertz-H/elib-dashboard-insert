<?php
namespace coding\app\controllers;
use coding\app\models\Offer;



class OfferController extends Controller{
  public function saveOffer(){

    print_r($_POST);
    $offer=new Offer();
    $offer->title=$_POST['name'];
    $offer->discount=$_POST['discount'];
    $offer->start_date=$_POST['from'];
    $offer->end_date=$_POST['to'];
    $offer->created_by=4;
    // $offer->is_active=isset($_POST['is_active'])?1:0;
  
    if($offer->save())
    
    $this->view('feedback',['success'=>'تمت العملية بنجاح']);
    else 
    $this->view('feedback',['danger'=>'فشلت العملية']);

}
    public  function show(){
      $this->view("app-offer-list");
        // echo "from home ";
        }
        public   function add(){
          $this->view("app-offer-add");
  
      }
  
      public   function edit(){
        $this->view("app-offer-edit");
  
      }
  
}





?>