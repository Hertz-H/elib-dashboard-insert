<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="app/public/css/slider_with_js.css">
    <link rel="stylesheet" href="app/public/css/header_footer.css">
    <link rel="stylesheet" href="app/public/css/form.css">
    <link rel="stylesheet" href="app/public/css/home_gallery.css">
    <link rel="stylesheet" href="app/public/css/right.css" id="language_style">
</head>
<?php include('app/include/header.php');?>
<body>

<main>
<div class="container">
 <!-- Slider section --->  
 <?php include('app/include/slider.php');?>

 <!-- categories section --->

     <section class="sections_container">
         <div class="heading">
             <h2>تصفح حسب القسم</h2>
         </div>
         <div class="sec_items_container">
         
            <div class="sec_item">
                <a href="category"><div class="img_sec_con">
                <i class="fas fa-book "></i>
                </div> 
                <p> دين  </p></a>
            </div>
            <div class="sec_item">
                <a href="category"> <div class="img_sec_con">
                    <i class="fas fa-video "></i> 
                </div>
                <p>  تاريخ </p></a>
            </div>
            <div class="sec_item">
                <a href="category">  <div class="img_sec_con">
                    <i class="fas fa-headset "></i> 
                </div>
                <p>  روايات </p></a>
            </div>
            <div class="sec_item">
                <a href="category">  <div class="img_sec_con">
                    <i class="fas fa-gamepad "></i> 
                </div>
                <p> سياسة  </p></a>
            </div>
            <div class="sec_item">
                <a href="category"> <div class="img_sec_con">
                    <i class="fas fa-book "></i> 
                </div>
                <p> اقتصاد  </p></a>
            </div>
            <div class="sec_item">
                <a href="category"> <div class="img_sec_con">
                    <i class="fas fa-gamepad "></i> 
                </div>
                <p> طبخ  </p></a>
            </div>
            <div class="sec_item">
                <a href="category"> <div class="img_sec_con">
                    <i class="fas fa-film "></i> 
                </div>
                <p> التربية  </p></a>
            </div>
            <div class="slide_left"> <i class="fas fa-angle-left"></i></div>
            <div class="slide_right"><i class="fas fa-angle-right"></i></div>
         </section>
         
 <!-- offers section --->

         <section class="offers_adds">
             <div class="upper_sec_offer">
                 <div class="upper_img_cont">
                     <img src="app/public/img/s_3.webp" alt="">
                 </div>
                 <div class="upper_img_cont">
                    <img src="app/public/img/s_4.jpg" alt="">
                </div>
                <div class="upper_img_cont">
                    <img src="app/public/img/s_1.webp" alt="">
                </div>
                <div class="upper_img_cont">
                    <img src="app/public/img/s_2.jpg" alt="">
                </div> 
             </div>
             <div class="lower_sec_offer">
                    <img src="app/public/img/ad_lower.png" alt="">
             </div>

         </section>

<!-- books based on category  --->

    <section class="offers_sections">
        <div class="home_sec_heading">
            <h2>العروض الحالية</h2>
            <div class="home_show_all">
                <a href=""> عرض الكل</a>
            </div>
        </div>
        <div class="offers_cards_container timing_offers">
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
           
                     <div class="timer_container">
                         <span id="d"></span> 
                          <span id="h"></span> 
                         <span id="m"></span> 
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
                    <div class="timer_container">
                        <span id="d"></span> 
                         <span id="h"></span> 
                        <span id="m"></span> 
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
               
                     <div class="timer_container">
                         <span id="d"></span> 
                          <span id="h"></span> 
                         <span id="m"></span> 
                 
           
    
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
               
                     <div class="timer_container">
                         <span id="d"></span> 
                          <span id="h"></span> 
                         <span id="m"></span> 
                 
           
    
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
               
                     <div class="timer_container">
                         <span id="d"></span> 
                          <span id="h"></span> 
                         <span id="m"></span> 
                 
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
                    <a href="book_page.html">  <img src="img/i_1.jpg" alt=""></a>
                </div>
             <div class="card_info ">
                <div class="card_heading">
                    <i class=" "><img src="img/book.svg" alt=""></i>
                    <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                    <div class=" book_name"> <span class=" book_name_span"> كن أنت </span> <span>(كتاب إلكتروني) </span></div></a>
                </div>
                <div class="price_heading">
                    <span class="price">17.99 </span><span class="currency">ر.س</span>
                    <div class="note"> شامل الضريبة</div>
                </div>
                
                     <div class="timer_container">
                         <span id="d"></span> 
                          <span id="h"></span> 
                         <span id="m"></span> 
                 
                     </div>
    
               
                     <div class="card_icons_container">
                        <span><i class=""><img src="img/star_2.svg" alt=""></i> </span>
                    <span class="basket_icon"> <i class="fas fa-cart-arrow-down"></i> </span>
                    <span>  <i class=""><img src="img/compare_2.svg" alt=""> </i>
               </div>
             </div>
            </div>
            <div class="slide_left"> <i class="fas fa-angle-left"></i></div>
            <div class="slide_right"><i class="fas fa-angle-right"></i></div>
           </div>
           
        </section>
    <section class="offers_sections">
        <div class="home_sec_heading">
            <h2> الكتب الدينية</h2>
            <div class="home_show_all">
                <a href=""> عرض الكل</a>
            </div>
        </div>
        <div class="offers_cards_container">
            <div class="card" >

                <div class="img_container">
                    <a href="book"> <img src="img/k_1.jpg" alt=""></a>
                </div>
             <div class="card_info ">
                <div class="card_heading">
                    <i class=" "><img src="img/book.svg" alt=""></i>
                    <a href="book">  <span>  كتاب إلكتروني</span>
                     <div class=" book"> <span class=" book_name_span"> كبرياء وهوى  </span> <span>(كتاب إلكتروني) </span></div></a>
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
                    <a href="book"> <img src="img/k_3.jpg" alt=""></a>
                </div>
              <div class="card_info" >
                <div class="card_heading">
                    <i class=" "><img src="img/book.svg" alt=""></i>
                    <a href="book"> <span>  كتاب إلكتروني</span>
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
                    <a href="book_page.html">  <img src="img/i_1.jpg" alt=""></a>
                </div>
             <div class="card_info ">
                <div class="card_heading">
                    <i class=" "><img src="img/book.svg" alt=""></i>
                    <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                    <div class=" book_name"> <span class=" book_name_span"> كن أنت </span> <span>(كتاب إلكتروني) </span></div></a>
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
            <div class="slide_left"> <i class="fas fa-angle-left"></i></div>
            <div class="slide_right"><i class="fas fa-angle-right"></i></div>
           </div>
           
    </section>
    <section class="offers_sections">
        <div class="home_sec_heading">
            <h2> الكتب التاريخية</h2>
            <div class="home_show_all">
                <a href=""> عرض الكل</a>
            </div>
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
                    <a href="book_page.html">  <img src="img/i_1.jpg" alt=""></a>
                </div>
             <div class="card_info ">
                <div class="card_heading">
                    <i class=" "><img src="img/book.svg" alt=""></i>
                    <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                    <div class=" book_name"> <span class=" book_name_span"> كن أنت </span> <span>(كتاب إلكتروني) </span></div></a>
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
            <div class="slide_left"> <i class="fas fa-angle-left"></i></div>
            <div class="slide_right"><i class="fas fa-angle-right"></i></div>
           </div>
           
    </section>
    <section class="offers_sections">
        <div class="home_sec_heading">
            <h2> السياسة </h2>
            <div class="home_show_all">
                <a href=""> عرض الكل</a>
            </div>
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
                    <a href="book_page.html">  <img src="img/i_1.jpg" alt=""></a>
                </div>
             <div class="card_info ">
                <div class="card_heading">
                    <i class=" "><img src="img/book.svg" alt=""></i>
                    <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                    <div class=" book_name"> <span class=" book_name_span"> كن أنت </span> <span>(كتاب إلكتروني) </span></div></a>
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
            <div class="slide_left"> <i class="fas fa-angle-left"></i></div>
            <div class="slide_right"><i class="fas fa-angle-right"></i></div>
           </div>
           
    </section>
    <section class="offers_sections">
        <div class="home_sec_heading">
            <h2> الاقتصاد </h2>
            <div class="home_show_all">
                <a href=""> عرض الكل</a>
            </div>
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
                    <a href="book_page.html">  <img src="img/i_1.jpg" alt=""></a>
                </div>
             <div class="card_info ">
                <div class="card_heading">
                    <i class=" "><img src="img/book.svg" alt=""></i>
                    <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                    <div class=" book_name"> <span class=" book_name_span"> كن أنت </span> <span>(كتاب إلكتروني) </span></div></a>
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
            <div class="slide_left"> <i class="fas fa-angle-left"></i></div>
            <div class="slide_right"><i class="fas fa-angle-right"></i></div>
           </div>
           
    </section>
    <section class="offers_sections">
        <div class="home_sec_heading">
            <h2> الطبخ </h2>
            <div class="home_show_all">
                <a href=""> عرض الكل</a>
            </div>
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
                    <a href="book_page.html">  <img src="img/i_1.jpg" alt=""></a>
                </div>
             <div class="card_info ">
                <div class="card_heading">
                    <i class=" "><img src="img/book.svg" alt=""></i>
                    <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                    <div class=" book_name"> <span class=" book_name_span"> كن أنت </span> <span>(كتاب إلكتروني) </span></div></a>
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
            <div class="slide_left"> <i class="fas fa-angle-left"></i></div>
            <div class="slide_right"><i class="fas fa-angle-right"></i></div>
           </div>
           
    </section>
    <section class="offers_sections">
        <div class="home_sec_heading">
            <h2> أفضل الروايات الرومانسية </h2>
            <div class="home_show_all">
                <a href=""> عرض الكل</a>
            </div>
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
            <div class="card" >
                <div class="img_container">
                    <a href="book_page.html">  <img src="img/l.jpg" alt=""></a>
                </div>
             <div class="card_info" >
                <div class="card_heading">
                    <i class=" "><img src="img/book.svg" alt=""></i>
                    <span>  كتاب إلكتروني</span>
                    <div class=" gud book_name"> 
                        <a href="book_page.html">  <span class=" book_name_span">كتالوج الحب </span>    <span>(كتاب إلكتروني) </span>
                        </div></a>
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
                    <a href="book_page.html">  <img src="img/i_1.jpg" alt=""></a>
                </div>
             <div class="card_info ">
                <div class="card_heading">
                    <i class=" "><img src="img/book.svg" alt=""></i>
                    <a href="book_page.html"> <span>  كتاب إلكتروني</span>
                    <div class=" book_name"> <span class=" book_name_span"> كن أنت </span> <span>(كتاب إلكتروني) </span></div></a>
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
            <div class="slide_left"> <i class="fas fa-angle-left"></i></div>
            <div class="slide_right"><i class="fas fa-angle-right"></i></div>
           </div>
           
    </section>
     
    </div>
<?php 
print_r($_GET);
if(!empty($_GET))
if( $_GET["action"]=="login" ){
    echo "in login ";
    ?> 
 <!-- sign in -->
 
<div class="overly" style="visibility: visible;">
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

<?php } ?> 

<!-- sign up -->
 <?php 
 if(!empty($_GET))
 if( $_GET["action"]=="signup" ){
     echo "in sign up"; ?> 
<div class="overly" style="visibility: visible;">
    <div class="signup">

        <div class=" form_container">

        <div class="sign_header">
            <i  class="close_signup"> <img src="img/close_icon.svg" alt=""></i>
            <h3>انشاء حساب</h3>
            
        </div>
        <hr>
        
            <!-- sign_up -->
         
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
<?php } ?> 

</main>
<?php include('app/include/footer.php');?>
<script src="app/public/js/home_off_timer.js"></script>
<script src="app/public/js/slider.js"></script>
</body>

</html>
