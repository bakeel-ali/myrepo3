<?php require("database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="publish.css">
    <title>نشر كتاب </title>
    <style>
        .error {
            color: #ff0000;
        }
        #textInput{
            display: none;
        }

        #num3:checked ~ #num3{
            display: none;
        }
        #num4:checked ~ #textInput{
            display: inline;
        }
    </style>
</head>

<body dir="rtl">
    <nav>
        <?php include("Nav-Menu.php");
        require("process_img.php");
        require("process_file.php");  
        require("process_data_author.php");
              
        ?>
    </nav>


    <br>
    <br>
    <br>

    <form action="publish-book.php?action=submit" class="form" method="POST" enctype="multipart/form-data">
        <fieldset class="content">
            <legend><b>نشر كتاب :</b></legend>
            <div class="name">
                <label for="name" class="lab1">اسم الكاتب:</label>
                <input type="text" name="name" value="<?php echo $name; ?>" id="name" placeholder="الاسم " required>
                <span class="error">*<?php echo $nameErr; ?></span>
            </div>
            <div class="section">
                <label for="filed" class="lab5">مستوى الكاتب التعليمي:</label>
                <select name="education_level" id="filed" required>
                    <option value="ثانوي">ثانوي</option>
                    <option value="باكالوريس">باكالوريس</option>
                    <option value="ماجستير" selected>ماجستير</option>
                    <option value="دكتوراة">دكتوراة</option>
                </select>
            </div>
            <div class="countory">
                <label for="con"> الدولة</label>
                <input type="text" id="con" list="items" name="country">
                <datalist id="items">
                    <option value="اليمن" selected>اليمن</option>
                    <option value="السعودية">السعودية</option>
                    <option value="قطر">قطر</option>
                    <option value="مصر">مصر</option>
                    <option value="الامارات">الامارات</option>
                    <option value="الكويت">الكويت</option>
                    <option value="البحرين">البحرين</option>
                    <option value="سلطنة عمان">سلطنة عمان</option>
                    <option value="العراق">العراق</option>
                    <option value="سوريا">سوريا</option>
                </datalist>
                <span class="error">*<?php echo $countryErr; ?></span>
            </div>


            <div class="choese">
                <label for="">الجنس :</label>
                <label for="num1" id="num1">ذكر</label>
                <input type="radio" name="gender" value="ذكر" id="num1" <?php if(isset($gender)&& $gender==="ذكر") echo "checked"; ?> checked>
                <label for="num2" id="num2">انثى</label>
                <input type="radio" name="gender" <?php if(isset($gender)&& $gender==="انثى") echo "checked"; ?>  value="انثى" id="num2">
            </div>
            <div class="age">
                <label for="age">العمر :</label>
                <input type="bolean" name="age" value="<?php echo $age; ?>" maxlength="2">
                <span class="error">*<?php echo $ageErr; ?></span>
            </div>
            <div class="email">
                <label for="ema">البريد الالكتروني :</label>
                <input type="email" name="email" value="<?php echo $email; ?>" id="ema" placeholder="البريد الالكتروني" required>
                <span class="error">*<?php echo $emailErr; ?></span>
            </div>
            <div>
                <label for="imge"> صورة شخصية للكاتب <u>اختياري</u>:</label>
                <input type="file" name="auth_img" id="imge">
                <span class="error">*<?php echo $auth_imgErr; ?></span>
            </div>
            <pre></pre>
            <div class="ser">
                <label for="sub1">عنوان الكتاب :</label>
                <input type="text" name="title" value="<?php echo $title; ?>" id="sub1" required>
                <span class="error">*<?php echo $titleErr; ?></span>
            </div>
            <div class="sec">
                <label for="lab3">مجال الكتاب:</label>
                <input type="text" id="lab3" list="items_specialty" name="field">
                <datalist id="items_specialty">
                    <option value="الدراسات الاسلامية">الدراسات الاسلامية</option>
                    <option value="الفقة و الشريعة">الفقة و الشريعة</option>
                    <option value="اللغة العربية">اللغة العربية</option>
                    <option value="الشعر العربي الفصيح">الشعر العربي الفصيح</option>
                    <option value="الشعر الشعبي">الشعر الشعبي</option>
                    <option value="القانون و الحقوق">القانون و الحقوق</option>
                    <option value="التاريخ">التاريخ</option>
                    <option value="الفلك">الفلك</option>
                    <option value="الجغرافيا">الجغرافيا</option>
                    <option value="العلوم الطبية">العلوم الطبية</option>
                    <option value="كيمياء">كيمياء</option>
                    <option value="فيرياء">فيرياء</option>
                    <option value="احياء">احياء</option>
                    <option value="الحاسبات و التكنولوجيا">الحاسبات و التكنولوجيا</option>
                    <option value="العلوم الزراعية">العلوم الزراعية</option>
                    <option value="العلوم الاجتماعية">العلوم الاجتماعية</option>
                </datalist>
                <span class="error">*<?php echo $fieldErr; ?></span>
            </div>
            <div>
                <label for="numberr">عدد صفحات الكتاب:</label>
                <input type="bolean" name="num_page" value="<?php echo $num_page; ?>" id="numberr" minlength="2" maxlength="5" required>
                <span class="error">*<?php echo $num_pageErr; ?></span>
            </div>
            <label for="lab9">وصف للكتاب :</label>
            <div class="desc">
                <textarea name="des_book"  id="lab9" cols="30" rows="5" placeholder="وصف للكتاب" required><?php echo $des_book; ?></textarea>
                <span class="error">*<?php echo $des_bookErr; ?></span>
            </div>
            <div>
                <label for="imge">صورة غلاف الكتاب<u>اختياري</u>:</label>
                <input type="file" name="book_img" id="imge">
                <span class="error">*<?php echo $book_imgErr; ?></span>
            </div>
            <div class="subject">
                <label for="subject">ضمن الكتاب هنا>></label>
                <input type="file" name="book_file" id="subject" required>
                <span class="error">*<?php echo $book_fileErr; ?></span>
            </div>
            <div class="ch">
                <label for="">السعر :</label>
                
                <label for="num3">مجانا</label>
                <input type="radio" checked  name="price" <?php if(isset($price)&& $price==="0.0") echo "checked"; ?>  value="0.0" id="num3">
                <label for="num4">مدفوع</label>
                <input type="radio"  name="price" value="" id="num4" <?php if(isset($price)&& $price!=="0.0") echo "checked"; ?>>
                <input type="text" id="textInput" value="<?php echo $price; ?>" oninput="updateRadioValue()" >
                
                <span class="error">*<?php echo $priceErr ?></span>
            </div>
            <div class="submit">
                <input type="submit" value="نشر" name="submit">
            </div>
        </fieldset>
    </form>
    <br>
    <br>
    <br>
    <br>
   
    <footer>
        <?php include("footer.php"); ?>
    </footer>
    <?php
    // معالجة النموذج
    if (isset($_GET['action']) and $_GET['action'] == 'submit') {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {            
            if (empty($title) || empty($name) || empty($field) || empty($country) || empty($des_book) || empty($num_page)) {
                echo "يرجى ملء جميع الحقول المطلوبة.";

            } else {
                //  $name = $_POST['name'];
                $education_level = $_POST['education_level'];
                $gender = $_POST['gender'];


    
if(empty($nameErr) && empty($ageErr) && empty($emailErr) && empty($countryErr) && empty($auth_imgErr) && empty($titleErr) && empty($fieldErr) && empty($num_pageErr) && empty($priceErr) && empty($des_bookErr) && empty($book_fileErr) && empty($book_imgErr))
{
    $target="";
    if($ff)
    {
        $target="books_file/".basename($_FILES['book_file']['name']);   

        if (move_uploaded_file($_FILES['book_file']['tmp_name'], $target)) {
            $book_file=$target;            
        }
        else{
            $book_fileErr="فشل التحميل اعد المحاولة ";
        }
    }
    if($uploadauthimg)
    {
        $target="authors_img/".basename($_FILES['auth_img']['name']);                    
        if (move_uploaded_file($_FILES['auth_img']['tmp_name'], $target)) {
            $auth_img=$target;            
        }
        else{
            $auth_imgErr="فشل التحميل اعد المحاولة ";
        }
    }
    else{
        $auth_img=null;
    }
    if($upbook_img)
    {
        $target="books_img/".basename($_FILES['book_img']['name']);                    
        if (move_uploaded_file($_FILES['book_img']['tmp_name'], $target)) {
            $book_img=$target;            
        }
        else{
            $book_imgErr="فشل التحميل اعد المحاولة ";
        }
    }
    if(empty($auth_imgErr) && empty($book_fileErr) && empty($book_imgErr)){
    
        // إدخال البيانات في قاعدة البيانات
        $stmt = $conn_link->prepare("INSERT INTO authors (auth_name, edu_level, gender, age, country, auth_img, email) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisss", $name, $education_level, $gender, $age, $country, $auth_img, $email);
        $stmt->execute();
        $author_id = $stmt->insert_id;

        $stmtt = $conn_link->prepare("INSERT INTO books (title_book, field_book, num_page, des_book, book_img, book_file, price,auth_id) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
        $stmtt->bind_param("ssssssdi", $title, $field, $num_page, $des_book, $book_img,$book_file, $price,$author_id);

        if (($stmtt->execute())) {
            echo "<h2> تم إدخال البيانات بنجاح </h2>";
            echo '
            <script type="text/javascript">
            setTimeout(function () {
            window.location.href = "Main.php";
            }, 3000);
            </script>
            ';
        } else {
            echo "<h2> خطأ:  . $stmt->error;</h2>";
        }
        $stmt->close();
        $stmt1->close();
    }
    }
}}}   
?>
  
    <script>
        function updateRadioValue() {
            const inputValue = document.getElementById('textInput').value;
            const radioButton = document.getElementById('num4');
            radioButton.value = inputValue;
        }
    </script>
     <?php
    require("database_close.php");
    ?>
</body>

</html>