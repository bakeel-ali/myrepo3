
<?php include("database.php"); ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="log_in.css">
    <title>تسجيل الدخول</title>
    <style>
    section{
        font-family: Arial, Helvetica, sans-serif;
    }
    .pross{
        background-color: red;
        height:200px;
        left:5px;
    }
    </style>

</head>
<body dir="rtl">
        <section>
                        
                <form action="login.php?action=submit" method="POST" id="myform">
                    <h1>تسجيل الدخول</h1>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" placeholder="Example:name123@gmail.com" id="put" required name="username">
                        <label for="">اسم المستخدم </label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" placeholder="Exmaple:EA%ds&12$" minlength="8" maxlength="15" id="put" required>
                        <label for="">كلمة المرور</label>
        
                    </div>
                    <div class="forget" id="fort">
                        <label for=""><input type="checkbox">حفظ</label>
                        <a href="forgetpassword.php"> نسيت كلمة المرور </a>
                    </div>
                    <input type="submit" class="log" id="login" value=" تسجيل الدخول  " name="submit" >
                    <!-- <button  id="login" type="submit" class="log">تسجيل الدخول</button>                 -->
                    <div class="register">
                            <p>لإنشاء حساب جديد <a href="sign_in.php"> اضغط هنا</a></p>
                        </div>
                </form>
                <br>
                </section>
        <div class="pross">
            <?php
if (isset($_GET['action']) and $_GET['action'] == 'submit')
{
    if (isset($_POST['username']) and $_POST['username'] != 
    null and isset($_POST['password']) and $_POST['password'] != null)
    {
        $username = preg_replace('/[^a-zA-Z0-9._-]/', '', $_POST['username']);
        $password = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['password']);
        if (login($username, $password)) {
            echo "<h3 style='color:#0F0;'>مرحبا بك تم تسجيل دخولك</h3>";
            $_SESSION['username'] = $username;
            echo "<h5 style='color:#0F0;'> جاري تحويلك للصفحة الرئيسية... </h5>";
            echo '
            <script type="text/javascript">
            setTimeout(function () {
            window.location.href = "Main.php";
            }, 2000);
            </script>
            ';
        } 
        else {
        echo "<h3>حاول مجدد sdkvndknvkdnvkndkvndsknvkdndksnkdsnkdsا </h3>";
        }
    }
    else {
    echo "<h3 style='color:black;'>الحقول جميع ملئ يرجى </h3>";
    }
}
function login($username, $password) {
    global $conn_link;
    $query = "SELECT * FROM users WHERE pass='$password' and username='$username'";
    if ($result = mysqli_query($conn_link,$query))
    {
        if(mysqli_num_rows($result) == '1')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
    
    }
?>
</div>

  <?php require("database_close.php"); ?>     
</body>
</html>