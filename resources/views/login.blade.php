<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/login.css">
    <link rel="icon" type="image/x-icon" href="">
    <script src="/js/login.js"></script>
    <title>login</title>
</head>
<body >
    <div class="contianer">
        <div class="form">
            <a id="button-back" class="btn-back" href="">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
            <div class="user">
                <label for="user_name"> نام کاربری: </label>
                <input  id="user_name" type="text"  name="username"class="form-control">
            </div>
            <div class="pass" >
                <label id="code" for="password" >رمز عبور:</label>
                <input type="password " id="password" name="password" class="form-control">
            </div>
            <div class="link">
                <a id="a-signup" class="sign-up" href="/html/sign-up.html">هنوز ثبت نام نکرده اید؟</a>
                <p id="a-forget" class="forget-link" onclick="changeText()" >فراموشی رمز عبور</p>
            </div>
            <a id="login-link" class="link-btn" href="">
                <button id="button-login" class="btn-login">ورود</button>
            </a>
            <button id="button-givepass" class="btn-givepass" onclick="receivedpass()" >دریافت رمز</button>
        </div>
    </div>
</body>
</html>