<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="app/public/css/user_info.css">
    <link rel="stylesheet" href="app/public/css/check_out_steper.css">
    <link rel="stylesheet" href="app/public/css/steper.css">
    <link rel="stylesheet" href="app/public/css/form.css">
    <link rel="stylesheet" href="app/public/css/header_footer.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    
 

</head>

<body>
<?php include('app/include/header.php');?>
<div class="steper_container">
    <div class="progeress_container">
        
        <div class="circles_container">
            <div class="line_colored">

            </div>
            <div class="circle">
                <span class="circle_num">1</span> 
                 <div class="circle_info"> 
                     <div class="circle_heading">  <span> معلومات</span> <span>الشحن  </span></div>
                 </div>
            </div>
            <div class="circle"><span class="circle_num">2</span> 
                <div class="circle_info"> 
                    <div class="circle_heading">  <span> معلومات</span> <span>الدفع  </span></div>
                </div>
            </div>
            <div class="circle"><span class="circle_num">3</span> 
                <div class="circle_info"> 
                    <div class="circle_heading">  <span> تأكيد</span> <span>الشراء  </span></div>
                </div>
            </div>
           
        </div>
    </div>
    <div class="page_slider">
        <div   id="iframe_steper">
          
          </div>
       
    </div>
    <div class="btn_container">
       
        <button id="nexts">التالي
        </button>
        <button id="prevs">السابق
        </button>
    </div>
</div>  
<div class="user_info hidden">

    <form action="">
         <div class="input_containtr"><input type="text">
             <span class="input_title">الاسم</span>
         </div>
       
         <div class="input_containtr"><input type="text">
             <span class="input_title">المنطقة   </span>
         </div>
         <div class="input_containtr"><input type="text">
             <span class="input_title">العنوان   </span>
         </div>
         <div class="input_containtr"><input type="text">
             <span class="input_title">رقم التلفون </span>
         </div>
                                                       
    </form>
 </div> 
 <div class="payment hidden " >

    <form action="" >
        <div class="input_containtr pay">
            <span class="pay_method">طريقة الدفع  </span>
            <select name="contry_key" class="contry_key">
                <option value="967">ايداع  </option>
                <div><option value="cach" selected>كاش <i><img src="" alt=""></i></option></div>
                <option value=""> حوالة</option>
            </select>
            
        </div>
        <div class="input_containtr"><input type="text">
            <span class="input_title">رقم الحساب  </span>
        </div>
              
       </form>
    </div>
    <div class="check_out hidden" >
            <div class="container">
    
                <div class="checkout_cards_container">
                
                <div class="chckout_prod_con">
                    
                    <div class="product_item">
                        <div class="book_img_info">
                            <div class="book_img_heading">
                                <i class="book_img"><img src="assests/img/1_icon.jpg" alt=""></i>
                                <div class="book_heading">
                                    <h3 class="">
                                        البداية و النهابة الجزء الأول
            
                                    
                                    </h3>
                                    <span class="product_note">
                                        هذا المنتج رقمي وسيتم توصيلة من خلال البريد الالكتروني  
                                    </span>
                                </div>
                            </div>
            
                            <span class="price">
                                3.99 <span class="currency">ر.س</span>
                            </span>
                            
                        </div>
                        
                </div>
                <div class="product_item">
                    <div class="book_img_info">
                        <div class="book_img_heading">
                            <i class="book_img"><img src="assests/img/1_icon.jpg" alt=""></i>
                            <div class="book_heading">
                                <h3 class="">
                                    البداية و النهابة الجزء الأول
                                
                                </h3>
                                <span class="product_note">
                                    هذا المنتج رقمي وسيتم توصيلة من خلال البريد الالكتروني  
                                </span>
                            </div>
                        </div>
            
                        <span class="price">
                            3.99 <span class="currency">ر.س</span>
                        </span>
                        
                    </div>
                    
            </div>
            <div class="product_item">
                <div class="book_img_info">
                    <div class="book_img_heading">
                        <i class="book_img"><img src="assests/img/1_icon.jpg" alt=""></i>
                        <div class="book_heading">
                            <h3 class="">
                                البداية و النهابة الجزء الأول
            
                            
                            </h3>
                            <span class="product_note">
                                هذا المنتج رقمي وسيتم توصيلة من خلال البريد الالكتروني  
                            </span>
                        </div>
                    </div>
            
                    <span class="price">
                        3.99 <span class="currency">ر.س</span>
                    </span>
                    
                </div>
                
            </div>
            <div class="product_item">
                <div class="book_img_info">
                    <div class="book_img_heading">
                        <i class="book_img"><img src="assests/img/1_icon.jpg" alt=""></i>
                        <div class="book_heading">
                            <h3 class="">
                                البداية و النهابة الجزء الأول
            
                            
                            </h3>
                            <span class="product_note">
                                هذا المنتج رقمي وسيتم توصيلة من خلال البريد الالكتروني  
                            </span>
                        </div>
                    </div>
            
                    <span class="price">
                        3.99 <span class="currency">ر.س</span>
                    </span>
                    
                </div>
                
            </div>
            
            
            
                    
                </div>
                <div class="basket_container">
                    <div class="upper_section">
                        <div class="sum"><div class="right_side"> المجموع </div> <div class="left_side">68.97 <span class="currency_sum">ر.س</span></div></div>
                        <div class="delivery_cost"><div class="right_side">   تكاليف الشحن   </div> <div class="left"><span class="cost_span">مجاني  </span> </div></div>
                        <div class="total"><div class="right_side">  المجموع الكلي  <span class="currency_sum"> شامل الضريبة </span></div> <div class="left_side">68.97 <span class="currency"> ر.س</span></div>
                    
                    </div>
                
                    
                </div>
                
            
                </div>
            </div>
        </div>
    </div>
   <div class="guidlines hidden">
        <div class="container">
    
            <div class="checkout_cards_container" style="justify-content:center; text-align:center;">
            
            <div class="chckout_prod_con">
                <h2 style> خطوات تأكيد عملية الشراء</h2>

                <div class="product_item">
                    <div class="book_img_info">
                        <div class="book_img_heading">
                            <div class="book_heading" style=" padding: 10px 5px; border-width:20px;">
                                <h3 class="">
                                    ادخال المعلومات الشخصية المتعلقة بالشحن
                                </h3>
                            </div>
                        </div>
                    </div>
                    
            </div>
            <div class="product_item">
                <div class="book_img_info">
                    <div class="book_img_heading">
                        <div class="book_heading" style=" padding: 10px 5px; border-width:20px;">
                            <h3 class="">
                                ادخال المعلومات المتعلقة بوسيلة الدفع 
        
                            </h3>
                        
                        </div>
                    </div>
                </div>
                
        </div>
        <div class="product_item">
            <div class="book_img_info">
                <div class="book_img_heading">
                    <div class="book_heading" style=" padding: 10px 5px; border-width:20px;">
                        <h3 class="">
        
                            مراجعة المنتجات التي تم اختيارها        
        
                        
                        </h3>
                        <span class="product_note">
                        </span>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="product_item">
            <div class="book_img_info">
                <div class="book_img_heading">
                    <div class="book_heading " style=" padding: 10px 5px; border-width:20px;">
                        <h3 class="">
                                الضغط على زر التأكيد بعد التحقق من صحة الخطوات السابقة
                        </h3>
                </div>
            </div>
            
        </div>   
            </div>
        </div>
            </div>
    </div>
   </div>

<div class="img_overlay">
    <div class="model_inner_box">
     <h3> تمت عملية الشراء بنجاح</h3>
     <a href="index.html"> <button> موافق</button></a>
      <a href="index.html"><i class="close"> <img src="img/close_icon.svg" alt=""></i></a>
  </div>
</div>

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
            <form action="" >
    
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

























</body>


  
<?php include('app/include/footer.php');?>  
     
<script src="app/public/js/steper.js">  </script>

<script src="app/public/js/header.js">  </script>
</html>