<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log_in.css">
    <title>نسيت كلمة المرور</title>
    
</head>
<body dir="rtl">
    <section>
        <form action="" id="myform">
            <h1>ادخل بريدك الالكتروني </h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" required >
                <label for="">البريد الالكتروني</label>
            </div>
            <!-- <input type="submit" class="log" value="تأكيد"  > -->
            <button type="submit" class="log">تأكيد</button>
        </form>
    </section>
    <script>
            document.getElementById("myform").addEventListener("submit",function(event){
                event.preventDefault();
              
                window.location.href="check.php";            
            });      
        </script>
</body>
</html>
