<?php //require("info.php"); ?>
<?php require("database.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log_in.css">
    <title>إنشاء حساب</title>
    <style>
    section{
        font-family: Arial, Helvetica, sans-serif;
    }
    .pross{
        background-color: azure;
        height:200px;
    }
    </style>
</head>
<body >

    <section>
        <form action="sign_in.php?action=submit" method="POST" id="myform">            
            <h5 data-i18n="txt16">Select language to translate</h5>
            <select class="mt-2">
                <option value="en" selected data-i18n="txt14">English</option>
                <option value="ar" data-i18n="txt15">Arabic</option>
            </select>
            <h1 data-i18n="txt1">create acount</h1>

            <div class="inputbox">
                <ion-icon name="first-name"></ion-icon>
                <input type="text" id="name1" required placeholder="Username" name="username" required>
                <label for="" data-i18n="txt2">اسم المستخدم</label>
            </div>

            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email"  placeholder="example:name123@gmail.com" required name="email">
                <label for="" data-i18n="txt4"> البريد الالكتروني</label>
            </div>

            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" minlength="6" maxlength="15" required placeholder="Password" name="password">
                <label for="" data-i18n="txt5">كلمة السر </label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" minlength="6" maxlength="15" required placeholder="Password" name="password2">
                <label for="" data-i18n="txt3">تاكيد كلمة السر</label>
            </div>
                <div class="forget" id="forget">
                <label for=""><input type="checkbox" data-i18n="txt11">حفظ</label>
               
            </div>
            <input type="submit"  name="submit" class="log" value="انشاء حساب" data-i18n="txt17">
            <div class="register">
                <p data-i18n="txt13">لديك حساب بالفعل </p>
                <a id="aclass" data-i18n="txt12" href="login.php">اضغط هنا</a>
            </div>
        </form>
    </section>

<div class="pross">
    <!-- php code -->
    <?php
//متغير لحفظ البيانات التي يتم جلبها من الملف 
//متغير لحفظ نصوص الخطاء 
$error;
if (isset($_GET['action']) and $_GET['action'] == 'submit')
{
    if (username_v() and email_v() and pass_v()) {
        if (checkUser()) {
            echo "<h4>بالفعل موجود المستخدم هذا! </h4>";
            echo '
            <script type="text/javascript">
            setTimeout(function () {
            window.location.href = "login.php";
            }, 3000);
            </script>
            ';
        } 
        else {
            signUp();
            echo "<h4>تم التسجيل بنجاح</h4>";
            echo '
            <script type="text/javascript">
            setTimeout(function () {
            window.location.href = "Main.php";
            }, 1000);
            </script>
            ';
        }
    } 
    else {
        echo "<h4>$error</h4>";
        //header("location:public.php");
    }
}
?>
<?php
// دالة التحقق من اسم المستخدم 
function username_v() {
global $error;
if (isset($_POST['username']) and $_POST['username'] != null) {
        if (preg_match('/^([a-zA-Z0-9._-]){6,30}$/',$_POST['username'])) {
        return true;
    } 
    else {
       $error="يجب أن يكون اسم المستخدم مكون من الحروف النجليزية الكبير ة أو الصغير ة  او الارقام والحروف الخاصة ";
        return false;
    }
    }
     else {
         $error="قم بملئ حقل  اسم المستخدم ";
        return false;
    }
}

//دالة التحقق من كلمة المرور 
function pass_v() {
    global $error;
    if ((isset($_POST['password']) and $_POST['password'] != null) and (isset($_POST['password2']) and $_POST['password2'] !=null)) 
    {
        if (preg_match('/^([a-zA-Z0-9]){6,20}$/', $_POST['password']))
        {
            if ($_POST['password'] != $_POST['password2']) {
            $error="كلمة المرور غير متطابقة";
            return false;
            } else {
            return true;
            }
        } else {
            $error="يرجى كتابة كلمة مرور تحتوي على حروف إنجليزية كبير ة أو اضغير ة أو أرقام أو خليط منهم فقط وأن يكون طول كلمة المرور من 6 إلى 20 عنصر";
        return false;
        }
    } 
    else {
        $error="يرجى ملئ حقول كلمة المرور";
        return false;
    }
}
//دالة التحقق من الايميل 
function email_v() {
    global $error;
    if (isset($_POST['email']) and $_POST['email'] != null) {
        if (preg_match('/^([a-zA-Z])([a-zA-Z0-9._-]){2,30}@([a-zA-Z0-9.-])+\.([a-zA-Z0-9]){2,5}$/', $_POST['email']))
        {
        
        return true;
        }
        else {
            $error="يرجى كتابة بريد إلكتروني صحيح" ;
            return false;
        }
    } 
    else {
    $error="يرجى ملئ حقول البريد اللكتروني";
    return false;
    }
}
//
function checkUser() {
    global $conn_link;
    $query = "SELECT * FROM users WHERE username='{$_POST['username']}'";
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

function signUp() {
    global $conn_link;
    $query = "INSERT INTO users (username,email,pass) VALUES ('{$_POST['username']}','{$_POST['email']}','{$_POST['password']}')";
    if (mysqli_query($conn_link,$query) === true) {
        return true;
    }
    else{
        return false;
    }
}
?>
</div>
<?php require("database_close.php"); ?>
    <script src="Script.js" ></script>
</body>
</html>
