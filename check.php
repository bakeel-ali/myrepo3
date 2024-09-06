<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log_in.css">
    <title>رمز التأكيد</title>
</head>
<body dir="rtl">
    <section>
        <form action="" method="POST" id="myform">
            <h1> رمز التأكيد</h1>
            <label class="label">ادخل رمز التأكيد الذي تم ارساله إلى الإيميل الخاص بك </label>
            <div class="inputbox" id="intput">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="bolean" maxlength="1" required >
                <input type="bolean" maxlength="1" required >
                <input type="bolean" maxlength="1" required >
                <input type="bolean" maxlength="1" required >
                <input type="bolean" maxlength="1" required >
            </div>
          
          <!-- <input type="submit" class="log" value="تأكيد"> -->
          <button type="submit" class="log">تأكيد</button>
            <div class="register">
                <p>إذا لم يصلك رمز التأكيد اضغط >><a href="forgetpassword.php">إعادة الإرسال</a></p>
            </div>
        </form>
    </section>
    <script>
            document.getElementById("myform").addEventListener("submit",function(event){
                event.preventDefault();
                
  
                window.parent.postMessage({type:"loadNextPage"},"*");
                window.location.href="Main.php";
            });
        </script>
</body>
</html>
