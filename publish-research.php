<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <link rel="stylesheet" href="publish.css">
    <title>اضافة بجث</title>
</head>
<body dir="rtl">
    <nav>
     <?php include("Nav-Menu.php"); ?>
    </nav>
    
            <br>
            <br>
            <br>
    <form action="" class="form">
    <fieldset class="content">
        <legend><b>نشر بحث :</b></legend>
            <div class="name">
                <label for="name"  class="lab1">اسم الباحث :</label>
                <input type="text" id="name" placeholder="الاسم " required>              
            </div>
            <div class="section">
                <label for="filed" class="lab5">مستوى الباحث العلمي :</label>
                <select name="" id="filed" required>
                    <option value="باكالوريس">باكالوريس</option>
                    <option value="ماجستير">ماجستير</option>
                    <option value="دكتوراة">دكتوراة</option>
                </select>
            </div>
            <div class="countory">
                <label for="con" class="lab6"> الدولة :</label>
                <select name="" id="con" required>
                    <option value="اليمن">اليمن</option>
                    <option value="السعودية">السعودية</option>
                    <option value="قطر">قطر</option>
                    <option value="مصر">مصر</option>
                    <option value="الامارات">الامارات</option>
                    <option value="الكويت">الكويت</option>
                    <option value="البحرين">البحرين</option>
                    <option value="سلطنة عمان">سلطنة عمان</option>
                    <option value="العراق">العراق</option>
                    <option value="سوريا">سوريا</option>
                </select>
            </div>
            <div class="choese">
                <label for="">الجنس :</label>
                <label for="num1" id="num1">ذكر</label>
                <input type="radio" name="age1" value="ذكر"  id="num1" checked>
                <label for="num2" id="num2">انثى</label>
                <input type="radio" name="age1" value="انثى"  id="num2">
            </div>
            <div class="age">
                <label for="age">العمر :</label>
                <input type="bolean" maxlength="2" required>
            </div>
            <div class="email">
                <label for="ema">البريد الالكتروني :</label>
                <input type="email" id="ema" placeholder="البريد الالكتروني" required>
            </div>
            <pre></pre>
            <div class="ser">
                <label for="sub1">موضوع البحث :</label>
                <input type="text" id="sub1"  required>
            </div>
            <div class="sec">                
                <label for="lab3">مجال البحث :</label>
                <select name="" id="lab3" required>
                <option value="الدراسات الاسلامية">الدراسات الاسلامية</option>
                <option value="الفقة و الشريعة">الفقة و الشريعة</option>
                <option value="اللغة العربية">اللغة العربية</option>
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
                </select><br>
                <label for="lab4">مجال بحث اخر :</label>
                <input type="checkbox" name="مجال بجث اخر " id="lab4">
                <input type="text" id="lab" placeholder="مجال بجث اخر ">
            </div>
            <label for="lab9">وصف البحث :</label>
            <div class="desc">
                
                <textarea name="" id="lab9" cols="30" rows="10" placeholder="وصف البحث" required></textarea>
            </div>
            <div class="subject">
                <label for="subject">ضمن البحث هنا>></label>
                <input type="file" name="" id="subject" required>
            </div>
            <div class="submit">
                <input type="submit" value="نشر">
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

</body>
</html>