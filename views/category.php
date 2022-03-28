<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link rel="stylesheet" href="app/public/css/header_footer.css">
    <link rel="stylesheet" href="app/public/css/categories_style.css">
    <link rel="stylesheet" href="app/public/css/form.css">
    <link rel="stylesheet" href="app/public/css/slider_with_js.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
<?php include('app/include/header.php');?>
<main>
<div class="container">
<?php include('app/include/slider.php');?>
   
    
  
    <div class="cate_container">
        <!-- categories -->
  
        <div class="cat-section">
            <div class="cat_header">
                <a href="">الرئيسية</a> <span class="sperator"> /</span>
                <a href="">الكتب العربية</a> <span class="sperator"> /</span>
                <a href="">كتب إلكترونية</a>
            </div>
            <div class="cate_body">
                <div class="cat_name">
                    <i class="fas fa-book-open "></i>
                    <span class="title">كتب إلكترونية</span>
                </div>
                <ul class="list_con">
                    <div>
                    <li><a href="">تصفية النتائج</a></li>
                    <li><a href="">علامة تجارية</a><i class="far fa-minus-square"></i></li>
                    <li><a href="">السعر</a><i class="far fa-minus-square"></i></li>
                    <li class="range_cont"><div class="range"> </div>
                    <div class="pric_con"><span> ر.س 0</span> <span></span>ر.س 150</div></li>
                    <li><a href="">صيغة الكتاب</a><i class="far fa-minus-square"></i></li>
                </div>
                </ul>
            </div>
        </div>
        <div class="cat_prod_container">
            <div class="filer_cat_con">
                <span> الترتيب بحسب :</span>  <select name="" id="">

                    <option value="" selected> الرجاء الاختيار</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>


                </select>
            </div>
            <div class="offers_cards_container">
                <div class="card" >

                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_1.jpg" alt=""></a>
                    </div>
                 <div class="card_info ">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html">  <span>  كتاب إلكتروني</span>
                         <div class=" book_name"> <span class=" book_name_span"> كبرياء وهوى  </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
               
                         
                    
                    <div class="card_icons_container">
                             <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                         <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                         <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
                    </div>
                 </div>
                </div>
           
                <div class="card" >
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_3.jpg" alt=""></a>
                    </div>
                  <div class="card_info" >
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                        <div class=" gud book_name"> <span class=" book_name_span"> خلف قوتي ضعف يحبك</span>    <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
                      
                
                         <div class="card_icons_container">
                            <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                        <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                        <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
                   </div>
                 </div>
                </div> 
                <div class="card">
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/l.jpg" alt=""></a>
                    </div>
                 <div class="card_info">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                        <div class="book_name"> <span class="book_name_span"> كتالوج الحب </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                        
                    <div class="otherformat">
                        صيغ أخرى: <span>كتاب مطبوع</span>
                    </div>
                    </div>
                   
                        
                    <div class="card_icons_container">
                        <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                    <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                    <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
               </div>
                 </div>
                </div>
                <div class="card">
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_4.jpg" alt=""></a>
                    </div>
                 <div class="card_info">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                        <div class="book_name"> <span class="book_name_span"> الى الذي أسرني حبه  </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
                   
                        
                    <div class="card_icons_container">
                        <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                    <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                    <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
               </div>
                 </div>
                </div>
                <div class="card">
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_5.jpg" alt=""></a>
                    </div>
                 <div class="card_info">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html">  <span>  كتاب إلكتروني</span>
                        <div class="book_name"> <span class="book_name_span"> زواج غير متوقع  </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
                   
                         
        
                   
                          <div class="card_icons_container">
                            <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                        <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                        <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
                   </div>
                 </div>
                </div>
                <div class="card" >

                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_1.jpg" alt=""></a>
                    </div>
                 <div class="card_info ">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html">  <span>  كتاب إلكتروني</span>
                         <div class=" book_name"> <span class=" book_name_span"> كبرياء وهوى  </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
               
                         
                    
                    <div class="card_icons_container">
                             <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                         <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                         <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
                    </div>
                 </div>
                </div>
           
                <div class="card" >
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_3.jpg" alt=""></a>
                    </div>
                  <div class="card_info" >
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                        <div class=" gud book_name"> <span class=" book_name_span"> خلف قوتي ضعف يحبك</span>    <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
                      
                
                         <div class="card_icons_container">
                            <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                        <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                        <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
                   </div>
                 </div>
                </div> 
                <div class="card">
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/l.jpg" alt=""></a>
                    </div>
                 <div class="card_info">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                        <div class="book_name"> <span class="book_name_span"> كتالوج الحب </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                        
                    <div class="otherformat">
                        صيغ أخرى: <span>كتاب مطبوع</span>
                    </div>
                    </div>
                   
                        
                    <div class="card_icons_container">
                        <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                    <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                    <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
               </div>
                 </div>
                </div>
                <div class="card">
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_4.jpg" alt=""></a>
                    </div>
                 <div class="card_info">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                        <div class="book_name"> <span class="book_name_span"> الى الذي أسرني حبه  </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
                   
                        
                    <div class="card_icons_container">
                        <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                    <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                    <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
               </div>
                 </div>
                </div>
                <div class="card">
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_5.jpg" alt=""></a>
                    </div>
                 <div class="card_info">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html">  <span>  كتاب إلكتروني</span>
                        <div class="book_name"> <span class="book_name_span"> زواج غير متوقع  </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
                   
                         
        
                   
                          <div class="card_icons_container">
                            <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                        <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                        <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
                   </div>
                 </div>
                </div>
                <div class="card" >

                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_1.jpg" alt=""></a>
                    </div>
                 <div class="card_info ">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html">  <span>  كتاب إلكتروني</span>
                         <div class=" book_name"> <span class=" book_name_span"> كبرياء وهوى  </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
               
                         
                    
                    <div class="card_icons_container">
                             <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                         <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                         <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
                    </div>
                 </div>
                </div>
           
                <div class="card" >
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_3.jpg" alt=""></a>
                    </div>
                  <div class="card_info" >
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                        <div class=" gud book_name"> <span class=" book_name_span"> خلف قوتي ضعف يحبك</span>    <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
                      
                
                         <div class="card_icons_container">
                            <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                        <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                        <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
                   </div>
                 </div>
                </div> 
                <div class="card">
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/l.jpg" alt=""></a>
                    </div>
                 <div class="card_info">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                        <div class="book_name"> <span class="book_name_span"> كتالوج الحب </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                        
                    <div class="otherformat">
                        صيغ أخرى: <span>كتاب مطبوع</span>
                    </div>
                    </div>
                   
                        
                    <div class="card_icons_container">
                        <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                    <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                    <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
               </div>
                 </div>
                </div>
                <div class="card">
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_4.jpg" alt=""></a>
                    </div>
                 <div class="card_info">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                        <div class="book_name"> <span class="book_name_span"> الى الذي أسرني حبه  </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
                   
                        
                    <div class="card_icons_container">
                        <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                    <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                    <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
               </div>
                 </div>
                </div>
                <div class="card">
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_5.jpg" alt=""></a>
                    </div>
                 <div class="card_info">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html">  <span>  كتاب إلكتروني</span>
                        <div class="book_name"> <span class="book_name_span"> زواج غير متوقع  </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
                   
                         
        
                   
                          <div class="card_icons_container">
                            <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                        <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                        <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
                   </div>
                 </div>
                </div>
                <div class="card" >

                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_1.jpg" alt=""></a>
                    </div>
                 <div class="card_info ">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html">  <span>  كتاب إلكتروني</span>
                         <div class=" book_name"> <span class=" book_name_span"> كبرياء وهوى  </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
               
                         
                    
                    <div class="card_icons_container">
                             <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                         <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                         <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
                    </div>
                 </div>
                </div>
           
                <div class="card" >
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_3.jpg" alt=""></a>
                    </div>
                  <div class="card_info" >
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                        <div class=" gud book_name"> <span class=" book_name_span"> خلف قوتي ضعف يحبك</span>    <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
                      
                
                         <div class="card_icons_container">
                            <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                        <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                        <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
                   </div>
                 </div>
                </div> 
                <div class="card">
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/l.jpg" alt=""></a>
                    </div>
                 <div class="card_info">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                        <div class="book_name"> <span class="book_name_span"> كتالوج الحب </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                        
                    <div class="otherformat">
                        صيغ أخرى: <span>كتاب مطبوع</span>
                    </div>
                    </div>
                   
                       
                    <div class="card_icons_container">
                        <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                    <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                    <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
               </div>
                 </div>
                </div>
                <div class="card">
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_4.jpg" alt=""></a>
                    </div>
                 <div class="card_info">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                        <div class="book_name"> <span class="book_name_span"> الى الذي أسرني حبه  </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
                   
                        
                    <div class="card_icons_container">
                        <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                    <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                    <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
               </div>
                 </div>
                </div>
                <div class="card">
                    <div class="img_container">
                        <a href="book_page.html"> <img src="img/k_5.jpg" alt=""></a>
                    </div>
                 <div class="card_info">
                    <div class="card_heading">
                        <i class=" "><img src="img/book.svg" alt=""></i>
                        <a href="book_page.html">  <span>  كتاب إلكتروني</span>
                        <div class="book_name"> <span class="book_name_span"> زواج غير متوقع  </span> <span>(كتاب إلكتروني) </span></div></a>
                    </div>
                    <div class="price_heading">
                        <span class="price">17.99 </span><span class="currency">ر.س</span>
                        <div class="note"> شامل الضريبة</div>
                    </div>
                   
                         
        
                   
                          <div class="card_icons_container">
                            <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                        <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                        <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
                   </div>
                 </div>
                </div>
            </div>
            <btn class="show_mr_pro_btn">
                    عرض المزيد
            </btn>
            <div class="line"></div>
            <div class="recomend">
                اشتر من الكتب الالكترنية على متجر جرير الالكتروني
            </div>
            
     </div>
    </div>
    
     
    </div>

 
</main>


 <!-- sign in -->
 
 <div class="overly">
    <div class="signin">
        <div class=" form_container_signin">
            <i  class="close_signin"> <img src="img/close_icon.svg" alt=""></i>
           <div class="sign_header">
               <h3>تسجيل الدخول</h3>
           </div>
           <hr>
           
            <!--signin -->
              <!--  -->
            <form action="">
    
            <div class="input_containtr"><input type="text">
                <span class="input_title">البريد الالكتروني</span>
            </div>
          
            <div class="input_containtr"><input type="text">
                <span class="input_title">كلمة السر</span>
                <span class="forget">نسيت؟</span>
            </div>
            
            <div class="input_containtr log_in"><button> تسجيل دخول</button></div>
                                                        
            
       </form>
       <div class="form_footer">
           <span>لديك حساب؟ </span>
           <a href="sign_up.html"><button class="creat_account">  إنشاء حساب جديد</button></a>
       </div>
              
     </div>
    </div>
 
</div>


<!-- sign up -->
<div class="overly">
    <div class="signup">

        <div class=" form_container">

        <div class="sign_header">
            <i  class="close_signup"> <img src="img/close_icon.svg" alt=""></i>
            <h3>انشاء حساب</h3>
            
        </div>
        <hr>
        
            <!-- sign_up -->
            <!--  -->
            <form action="">
            <div class="number_container">
                <div class="input_containtr"><input type="text" placeholder="رقم الجوال"></div>
                <div class="input_containtr">
                    <span>رمز البلد</span>
                    <select name="contry_key">
                        <option value="967">+967</option>
                        <div><option value="+970" selected>+970<i><img src="" alt=""></i></option></div>
                        <option value=""></option>
                    </select>
                    <i><img src="img/suadia.png" alt=""></i>
                </div>
            </div>
            <div class="valid_notes">سوف نرسل  لك<span> رمز  التحقق عن طريق رسالة نصية</span>  </div>
                
                    <div class="input_containtr  input_darker"><input type="text" >
                    <span class="span_valid_num">ارسال رمز التحقق </span></div>
                <div class="input_containtr"><input type="text">
                    <span class="input_title">الاسم الأول</span></div>
                
                <div class="input_containtr"><input type="text">
                    <span class="input_title">اسم العائلة</span>
                </div>
                <div class="input_containtr"><input type="text">
                    <span class="input_title">البريد الالكتروني</span>
                </div>
                <div class="input_containtr"><input type="text">
                    <span class="input_title"> تأكيد البريد الالكتروني</span>
                </div>
                <div class="input_containtr"><input type="text">
                    <span class="input_title">كلمة السر</span>
                </div>
                <div class="checkbox_container">
                    <input type="checkbox" name="policy" value="agree"checked>   أوافق على <span>على الشروط والأحكام</span>  <br>
                    <input type="checkbox" name="subscribe" value="yes" checked> التسجيل للانضمام للبشرة البردية<br>
                </div>
                
                 <button class="btn"> إنشاء حساب</button>
                                                            
                <div class="form_footer">
                    <span>لديك حساب؟ </span><a href="login.html">تسجيل الدخول &lt;</a>
                </div>
            </form>
            
        </div>
    </div>
</div>

<?php include('app/include/footer.php');?>
<script src="app/public/js/slider.js"></script>


   
</body>

</html>
