<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app/public/css/form.css">
    <link rel="stylesheet" href="app/public/css/header_footer.css">
    <style>
        .f_con{
           display: flex;
           justify-content: center;
           align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
<?php include('app/include/nav.php');?>
<div class="f_con">
    <div class="signin">
        <div class=" form_container_signin">
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
            
            <div class="input_containtr log_in"><button > تسجيل دخول</button></div>
                                                        
            
       </form>
       <div class="form_footer">
           <span>لديك حساب؟ </span>
             <a href="signup"><button class="creat_account">  إنشاء حساب جديد</button></a>
       </div>
              
     </div>
    </div>
</div>
<?php include('app/include/footer.php');?>
</body>
</html>