<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\AuthorsController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\{UserPayMethodController,CategoryController,PaymentMethodController,AuthorController,BookController,AddressController,CityController,OfferController,UsersController,HomeController,CheckoutController,OrderController,CategoriesController,BooksController,Book_pageController,PublisherController,Controller};
use Dotenv\Dotenv;


$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);

Router::get('/users',[UsersController::class,'show']);


Router::get('/books',function(){
  echo "books route path";
});

Router::get('/new_user',[UsersController::class,'register']);

Router::get('/remove_user',[UsersController::class,'delete']);

Router::post('/users',[UsersController::class,'show']);
// Router::get('/new_user',[UsersController::class,'newUser']);

Router::post('/save_user',[UsersController::class,'saveUser']);
// Router::get('/save_author',[AuthorsController::class,'createAuthor']);
Router::post('/save_city',[CityController::class,'saveCity']);
Router::post('/save_author',[AuthorController::class,'saveAuthor']);
Router::post('/save_offer',[OfferController::class,'saveOffer']);

Router::post('/save_payment_method',[UserPayMethodController::class,'savePayment']);

Router::get('/add_user_payment',[UserPayMethodController::class,'add']);
Router::get('/edit_user_payment',[UserPayMethodController::class,'edit']);
Router::get('/list_user_payment',[UserPayMethodController::class,'show']);





//new seciton
Router::get('/add_order',[OrderController::class,'add']);
Router::get('/edit_order',[OrderController::class,'edit']);
Router::get('/list_order',[OrderController::class,'show']);


Router::get('/add_author',[AuthorController::class,'add']);
Router::get('/edit_author',[AuthorController::class,'edit']);
Router::get('/list_author',[AuthorController::class,'show']);

Router::get('/add_offer',[OfferController::class,'add']);
Router::get('/edit_offer',[OfferController::class,'edit']);
Router::get('/list_offer',[OfferController::class,'show']);

Router::get('/add_city',[CityController::class,'add']);
Router::get('/edit_city',[CityController::class,'edit']);
Router::get('/list_city',[CityController::class,'show']);

Router::get('/add_address',[AddressController::class,'add']);
Router::get('/edit_address',[AddressController::class,'edit']);
Router::get('/list_address',[AddressController::class,'show']);

Router::get('/add_payment',[PaymentMethodController::class,'add']);
Router::get('/edit_payment',[PaymentMethodController::class,'edit']);
Router::get('/list_payment',[PaymentMethodController::class,'show']);

Router::get('/add_cat',[CategoryController::class,'add']);
Router::get('/edit_cat',[CategoryController::class,'edit']);
Router::get('/list_cat',[CategoryController::class,'show']);
Router::post('/save_category',[CategoryController::class,'saveCategory']);


Router::get('/add_user',[UsersController::class,'add']);
Router::get('/edit_user',[UsersController::class,'edit']);
Router::get('/list_user',[UsersController::class,'show']);

Router::get('/edit_publisher',[PublisherController::class,'edit']);//fill the array with the function and the path 
Router::get('/list_publishers',[PublisherController::class,'show']);//fill the array with the function and the path
Router::get('/add_publisher',[PublisherController::class,'add']);
Router::post('/save_publisher',[PublisherController::class,'savePublisher']);


Router::get('/add_book',[BookController::class,'add']);
Router::get('/edit_book',[BookController::class,'edit']);
Router::post('/book_save',[BookController::class,'saveBook']);

// Router::get('/list_book',[BookController::class,'show']);

















$system->start();

