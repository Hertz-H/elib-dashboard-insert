<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app/public/css/header_footer.css">
    <link rel="stylesheet" href="app/public/css/form.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="app/public/css/check_out.css">
</head>

 
<body>
<?php include('app/include/header.php');?>
 <div class="container">
 <div class="check_out_heading">
    <div class="shoping_cart">
        <i class="fas fa-cart-arrow-down"></i>
       </div>
     <h2>السلة</h2>
     <span> (3 منتجات )</span>
 </div>
 <div class="checkout_cards_container">
    <div class="chckout_prod_con">
        <div class="product_item">
                <div class="book_img_info">
                    <div class="book_img_heading">
                        <i class="book_img"><img src="app/public/img/1_icon.jpg" alt=""></i>
                        <div class="book_heading">
                            <h3 class="">
                                البداية و النهابة الجزء الأول

                              (كتاب الكتروني)
                           
                            </h3>
                            <span class="product_note">
                                هذا المنتج قابل للخصم لحاملي بطاقة مكتبة جرير 
                            </span>
                        </div>
                    </div>
                    <div class="delivery_note">
                        <span>    ملاحظة:</span>  هذا المنتج رقمي وسيتم توصيلة من خلال البريد الالكتروني  <span class="colored"> كيفية الحصول على المنتج ؟</span>    
                        </div>
                    <span class="price">
                        3.99 <span class="currency">ر.س</span>
                    </span>
                    <div class="quantiy">
                        <div> 1</div>
                        <div> <i> +</i>
                            <i>-</i>
                        </div>
                    </div>
                  
                </div>
                <hr>
                <a href=""><span class="dot"><i class="far fa-times-circle"></i></span> <span class="delet">  أحذف</span> </a>
        </div>
        <div class="product_item">
            <div class="book_img_info">
                <div class="book_img_heading">
                    <i class="book_img"><img src="app/public/img/1_icon.jpg" alt=""></i>
                    <div class="book_heading">
                        <h3 class="">
                            البداية و النهابة الجزء الأول

                          (كتاب الكتروني)
                       
                        </h3>
                        <span class="product_note">
                            هذا المنتج قابل للخصم لحاملي بطاقة مكتبة جرير 
                        </span>
                    </div>
                </div>
                <div class="delivery_note">
                    <span>    ملاحظة:</span>  هذا المنتج رقمي وسيتم توصيلة من خلال البريد الالكتروني  <span class="colored"> كيفية الحصول على المنتج ؟</span>    
                    </div>
                <span class="price">
                    3.99 <span class="currency">ر.س</span>
                </span>
                <div class="quantiy">
                    <div> 1</div>
                    <div><i>+</i>
                        <i>-</i>
                    </div>
                </div>
              
            </div>
            <hr>
            <a href=""><span class="dot"><i class="far fa-times-circle"></i></span> <span class="delet">  أحذف</span> </a>
    </div>
    <div class="product_item">
        <div class="book_img_info">
            <div class="book_img_heading">
                <i class="book_img"><img src="app/public/img/1_icon.jpg" alt=""></i>
                <div class="book_heading">
                    <h3 class="">
                        البداية و النهابة الجزء الأول

                      (كتاب الكتروني)
                   
                    </h3>
                    <span class="product_note">
                        هذا المنتج قابل للخصم لحاملي بطاقة مكتبة جرير 
                    </span>
                </div>
            </div>
            <div class="delivery_note">
                <span>    ملاحظة:</span>  هذا المنتج رقمي وسيتم توصيلة من خلال البريد الالكتروني  <span class="colored"> كيفية الحصول على المنتج ؟</span>    
                </div>
            <span class="price">
                3.99 <span class="currency">ر.س</span>
            </span>
            <div class="quantiy">
                <div> 1</div>
                <div><i>+</i>
                    <i>-</i>
                </div>
            </div>
          
        </div>
        <hr>
        <a href=""><span class="dot"><i class="far fa-times-circle"></i></span> <span class="delet">  أحذف</span> </a>
</div>
    </div>
    <div class="basket_container">
        <div class="upper_section">
            <div class="sum"><div class="right_side"> المجموع </div> <div class="left_side">68.97 <span class="currency_sum">ر.س</span></div></div>
            <div class="delivery_cost"><div class="right_side">   تكاليف الشحن   </div> <div class="left"><span class="cost_span">مجاني  </span> </div></div>
            <div class="total"><div class="right_side">  المجموع الكلي  <span class="currency_sum"> شامل الضريبة </span></div> <div class="left_side">68.97 <span class="currency"> ر.س</span></div></div>
          
        </div>
        <div class="lower_section">
            <div class="policy_notation">
                بالضغط على "انهاء التسوق فأنت توافق على <span class="colored_policy"> على الشروط والاحكام و سياسة الخصوصية </span>            </div>
            <a href="order"><button class="basket_btn">تحديث سلة التسوق</button></a>
            
        </div>
        
    </div>

 </div>
</div>

<?php include('app/include/footer.php');?>
</body>


</script>
</html>
